<?php

namespace FormerDUTStudentsBundle\Controller;

use FormerDUTStudentsBundle\Entity\StudentFormation;
use FormerDUTStudentsBundle\Entity\Student;
use FormerDUTStudentsBundle\Entity\ArrayCollection;
use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class StudentController
 * @package FormerDUTStudentsBundle\Controller\Student
 *
 * CRUD on students
 *
 */
class StudentController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     *
     * Get all students
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * /students GET
     */
    public function getStudentsAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get all students
        $students = $repository->findBy(array('validated' => true));

        // Serialize
        $data = $this->get('jms_serializer')->serialize($students, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Get all unvalidated students
     *
     * @Security("is_granted('ROLE_ADMIN')")
     *
     *  /students/unvalidated GET
     */
    public function getUnvalidatedStudentsAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get all students
        $students = $repository->findBy(array('validated' => false));

        // Serialize
        $data = $this->get('jms_serializer')->serialize($students, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @param $id
     *
     * The student id
     *
     * @return Response
     *
     * Get a student from his id
     *
     * @Security("is_granted('ROLE_ADMIN')")
     *
     * /students/{id} GET
     */
    public function getStudentAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get the student by his id
        $student = $repository->find($id);

        // Serialize
        $data = $this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Add a new student
     * Generate the user
     * JSON:
     * {
     *      "name": "Younes",
     *      "lastName": "Guarssifi",
     *      "mail": "younes.gua@gmail.com",
     *
     *      "mail2": "younes@gmail.com",
     *      "phone": 0612345678,
     *      "company": "IUT",
     *      "job": "Student"
     * }
     *
     * Parameters from mail2 to job are optional
     *
     * /students POST
     */
    public function addStudentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('FormerDUTStudentsBundle:Student');

        // Get the json
        $data = $request->getContent();

        // Path to the profile page
        $page = $this->container->getParameter('profile_page');

        // Mail sender
        $sender = $this->container->getParameter('mailer_user');

        // Deserialize the json into a student object
        $student = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Student', 'json');

        if($repository->checkIfMailExists($student->getMail()))
        {

            return new Response("false");
        }

        // Generate the user => login, password, roles...
            $userGenerator = $this->get('former_dut_students.user');
        $user = $userGenerator->generateUser($student);

        if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
        {
            $student->setValidated(true);

            $message = (new \Swift_Message())
                ->setFrom($sender)
                ->setTo($student->getMail())
                ->setSubject("Bienvenue sur l'annuaire des anciens !");

            // Data for the template
            $params = array('username' => $user->getUsername(),
                'password' => $user->getPassword(),
                'page' => $page,
                'id' => $student->getId()
            );

            $content = $this->renderView('FormerDUTStudentsBundle:Emails:welcome.html.twig', $params);

            $message->setBody($content, 'text/html');

            $this->get('mailer')->send($message);
        }
        else
        {
            $message = (new \Swift_Message())
                ->setFrom($sender)
                ->setTo($student->getMail())
                ->setSubject("Bienvenue sur l'annuaire des anciens !");

            $content = $this->renderView('FormerDUTStudentsBundle:Emails:confirmation.html.twig');

            $message->setBody($content, 'text/html');

            $this->get('mailer')->send($message);
        }

        $student->setUser($user);

        // Save
        $em->persist($user);
        $em->flush();

        // Serialize
        $data = $this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }


    /**
     * @param Request $request
     * @return Response
     *
     * Create students from an array
     * The users are automatically validated
     * JSON:
     * {
     *      "students":
     *      [
     *          {
     *              "name": "Younes",
     *              "lastName": "Guarssifi",
     *              "mail": "younes.gua@gmail.com",
     *
     *              "mail2": "younes@gmail.com"
     *              "phone": "0612345678",
     *              "company": "GuarssifiInc",
     *              "job": "CEO"
     *          },
     *          {
     *              "name": "Jane",
     *              "lastName": "Doe",
     *              "mail": "jane.doe@gmail.com",
     *
     *              "mail2": "jane@gmail.com"
     *              "phone": "0612345678",
     *              "company": "DoeInc",
     *              "job": "CEO"
     *          }
     *      ]
     * }
     *
     * Parameters from mail2 to job are optionnal
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * /students/import POST
     */
    public function addStudentsAction(Request $request)
    {
        // Student already in db
        // Determined on mail
        $alreadyExists = 0;

        // Student added in db
        $addedStudent = 0;

        // Path to the profile page
        $page = $this->container->getParameter('profile_page');

        // Mail sender
        $sender = $this->container->getParameter('mailer_user');

        // Path to IUT logo
        $pathToIUTLogo = $this->container->getParameter('path_to_IUT_logo');

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FormerDUTStudentsBundle:Student');
        $userGenerator = $this->get('former_dut_students.user');

        // Get the json
        $data = $request->getContent();

        // Get an array of students
        $students = json_decode($data, true)["students"];

        foreach($students as $studentArray)
        {
            if($repository->checkIfMailExists($studentArray["mail"]))
            {
                $alreadyExists++;
                continue;
            }

            $student = new Student($studentArray["name"], $studentArray["lastName"], $studentArray["mail"], $studentArray["mail2"], $studentArray["phone"], $studentArray["company"], $studentArray["job"]);
            $student->setValidated(true);

            // Generate the user => login, password, roles...
            $user = $userGenerator->generateUser($student);
            $student->setUser($user);

            // Save
            $em->persist($user);
            $addedStudent++;

            $em->flush();

            $message = (new \Swift_Message())
                ->setFrom($sender)
                ->setTo($student->getMail())
                ->setSubject("Bienvenue sur l'annuaire des anciens !");

            // Data for the template
            $params = array('username' => $user->getUsername(),
                'password' => $user->getPassword(),
                'page' => $page,
                'id' => $student->getId(),
                'img_src' => $pathToIUTLogo
            );

            $content = $this->renderView('FormerDUTStudentsBundle:Emails:welcome.html.twig', $params);

            $message->setBody($content, 'text/html');

            $this->get('mailer')->send($message);
        }

        $data = array(
            "alreadyExists" => $alreadyExists,
            "addedStudents" => $addedStudent,
        );
        $data = $this->get('jms_serializer')->serialize($data, 'json');

        return new Response($data);
    }

    /**
     * @param Request $request
     * @param int $id
     * Id of the student we want to delete
     *
     * @return Response
     *
     * Delete one student
     * @Security("has_role('ROLE_ADMIN')")
     *
     * /students/{id} DELETE
     */
    public function deleteStudentAction(Request $request, $id)
    {
        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // This method will delete student but also the related user
        // No need to flush
        $studentRepository->deleteStudentById($id);

        return new Response("true");
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Delete several students from an array of IDs
     * JSON:
     * {
     *      "students": [12, 2]
     * }
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * /students DELETE
     */
    public function deleteStudentsAction(Request $request)
    {
        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get an array of student's IDs
        $students = json_decode($request->getContent(), true)["students"];

        // This method will delete student but also the related user
        // No need to flush
        $studentRepository->deleteStudents($students);

        return new Response("true");
    }

    /**
     * @param Request $request
     * @param $id
     * Id of the student we want to update
     *
     * @return Response
     *
     * Update a student's information
     * JSON:
     * {
     *      "name": "Younes",
     *      "lastName": "Guarssifi",
     *      "mail": "younes.gua@gmail.com",
     *      "mail2": "younes@gmail.com",
     *      "phone": 0612345678,
     *      "company": "IUT",
     *      "job": "Student"
     * }
     *
     * All properties are optional
     *
     * /students/{id} PUT
     */
    public function editStudentAction(Request $request, $id)
    {
        // Check if this student id is ours, or if we are admin
        // If not we are not authorized to remove formations from a student
        if($this->getUser()->getStudent()->getId() != $id && !($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')))
        {
            return new Response("You are not authorized");
        }

        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get the student we want to edit
        $student = $studentRepository->findOneById($id);

        // Get the body of the request
        $data = $request->getContent();

        // Deserialize the json into an object
        $newStudent = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Student', 'json');

        // If the value of a parameter is send in the json, we replace the old parameter by this one
        // Else we don't change it
        if($newStudent->getName() != null) $student->setName($newStudent->getName());
        if($newStudent->getLastName() != null) $student->setLastName($newStudent->getLastName());
        if($newStudent->getMail() != null) $student->setMail($newStudent->getMail());
        $student->setMail2($newStudent->getMail2());
        $student->setPhone($newStudent->getPhone());
        $student->setCompany($newStudent->getCompany());
        $student->setJob($newStudent->getJob());

        $this->getDoctrine()
            ->getManager()
            ->flush();

        return new Response($this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }

    /**
     * @param Request $request
     * @param int $id
     * ID of the student we want to add formations to
     *
     * @return Response
     *
     * Add formations to a student by giving an array of formation IDs
     * JSON:
     * {
     *      "formations": [1, 2, 3],
     *      "graduationYears': [2011, 2012, 2013]
     * }
     * graduationYear[0] is the graduation year of formation[0]
     * graduationYear[1] is the graduation year of formation[1]...
     *
     * /students/{id}/formations PUT
     */
    public function addFormationsToStudentAction(Request $request, $id)
    {
        // Check if this student id is ours, or if we are admin
        // If not we are not authorized to remove formations from a student
        if($this->getUser()->getStudent()->getId() != $id && !($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) return new Response("You are not authorized");

        // Get an array of formation's IDs and an array of graduation years
        $data = json_decode($request->getContent(),true);

        // Get information from the json
        $formations = $data["formations"];
        $graduationYear = $data["graduationYears"];

        // Getting the Entity Manager and the Repositories to manage objects
        $em = $this->getDoctrine()->getManager();
        $formationRepository = $em->getRepository('FormerDUTStudentsBundle:Formation');
        $studentRepository = $em->getRepository('FormerDUTStudentsBundle:Student');

        // Get the student we want to remove formations from
        $student = $studentRepository->find($id);

        // Get the formations we want to remove from the student
        $formations = $formationRepository->findFormations($formations);

        // For each formation, we create a studentFormation
        for($i=0; $i< count($formations); $i++)
        {
            $studentFormations = new StudentFormation($graduationYear[$i]);
            $studentFormations->setFormation($formations[$i]);
            $studentFormations->setStudent($student);

            // Save
            $em->persist($studentFormations);
        }

        // Save
        $em->flush();

        return new Response("trues");
    }

    /**
     * @param Request $request
     * @param int $id
     * ID of the student we want to remove formations from
     *
     * @return Response
     *
     * JSON  :
     * {
     *      "formations": [10, 5]
     * }
     *
     * Remove formations from a student by giving an array of formations IDs
     *
     * /students/{id}/formations DELETE
     */
    public function removeFormationsFromStudentAction(Request $request, $id)
    {
        // Check if this student id is ours, or if we are admin
        // If not we are not authorized to remove formations from a student
        if($this->getUser()->getStudent()->getId() != $id && !($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))) return new Response("You are not authorized");

        // Get an array of formation's IDs from the JSON
        $ids =  json_decode($request->getContent(), true)["formations"];

        // Getting the Entity Manager and the Repositories to manage objects
        $em = $this->getDoctrine()->getManager();
        $formationRepository = $em->getRepository('FormerDUTStudentsBundle:Formation');
        $studentRepository = $em->getRepository('FormerDUTStudentsBundle:Student');
        $repository = $em->getRepository('FormerDUTStudentsBundle:StudentFormation');

        // Get the student we want to remove formations from
        $student = $studentRepository->find($id);

        // Get the formations we want to remove from the student
        $formations = $formationRepository->findFormations($ids);

        // For each formation, we delete the studentFormation
        foreach ($formations as $formation)
        {
            $studentFormation = $repository->findOneby(array('student' => $student, 'formation' => $formation));

            $em->remove($studentFormation);
        }

        // Save the modifications
        $em->flush();

        return new Response("true");
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Return the current student, the connected one
     * Only use it when connected with student
     *
     * /self GET
     */
    public function selfAction(Request $request)
    {
        // Get the current user
        $user = $this->getUser();

        // Serialize the user into a json with the "toSerialize" Group
        $data = $this->get('jms_serializer')->serialize($user, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }


    /**
     * @param Request $request
     * @param $id
     * @return Response
     *
     * @Security("has_role('ROLE_ADMIN')")
     *
     * /students/validate GET
     */
    public function validateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $repository = $em->getRepository('FormerDUTStudentsBundle:Student');

        // Path to the profile page
        $page = $this->container->getParameter('profile_page');

        // Mail sender
        $sender = $this->container->getParameter('mailer_user');

        // Get student
        $student = $repository->find($id);

        $user = $student->getUser();

        // Validate the student
        $student->setValidated(true);

        $message = (new \Swift_Message())
            ->setFrom($sender)
            ->setTo($student->getMail())
            ->setSubject("Bienvenue sur l'annuaire des anciens !");

        // Data for the template
        $params = array('username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'page' => $page,
            'id' => $student->getId()
        );

        $content = $this->renderView('FormerDUTStudentsBundle:Emails:welcome.html.twig', $params);

        $message->setBody($content, 'text/html');

        $this->get('mailer')->send($message);

        // Serialize the student into a json with the "toSerialize" Group
        $data = $this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Use this class if you want to test API calls
     */
    public function testAction(Request $request, $id)
    {
        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        $students = json_decode($request->getContent(), true);

        $student = $studentRepository->find($id);

        return new Response("true");
    }



}
