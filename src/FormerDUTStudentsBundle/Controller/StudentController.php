<?php

namespace FormerDUTStudentsBundle\Controller;

use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class StudentController
 * @package FormerDUTStudentsBundle\Controller\Student
 *
 * CRUD on students
 *
 * @Security("is_granted('ROLE_STUDENT')")
 */
class StudentController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     *
     * Get all students
     */
    public function getStudentsAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        $students = $repository->findAll();

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
     */
    public function getStudentAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        $student = $repository->find($id);

        $data = $this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Add a new student
     * Generate the user
     */
    public function addStudentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $request->getContent();
        $student = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Student', 'json');

        $userGenerator = $this->get('former_dut_students.user');
        $user = $userGenerator->generateUser($student);
        $student->setUser($user);

        $em->persist($user);
        $em->flush();

        return new Response("true");
    }

    /**
     * @param Request $request
     * @param int $id
     * Id of the student we want to delete
     *
     * @return Response
     *
     * Delete one student
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
     */
    public function deleteStudentsAction(Request $request)
    {
        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        // Get an array of student's IDs
        $students = json_decode($request->getContent(), true);

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
     */
    public function editStudentAction(Request $request, $id)
    {
        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        $student = $studentRepository->findOneById($id);

        // Get the body of the request
        $data = $request->getContent();

        // Deserialize the json into an object
        $newStudent = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Student', 'json');

        if($newStudent->getName() != null) $student->setName($newStudent->getName());
        if($newStudent->getLastName() != null) $student->setLastName($newStudent->getLastName());
        if($newStudent->getMail() != null) $student->setMail($newStudent->getMail());
        if($newStudent->getGraduationYear() != null) $student->setGraduationYear($newStudent->getGraduationYear());
        if($newStudent->getPhone() != null) $student->setPhone($newStudent->getPhone());
        if($newStudent->getCompany() != null) $student->setCompany($newStudent->getCompany());
        if($newStudent->getJob() != null) $student->setJob($newStudent->getJob());

        $this->getDoctrine()
            ->getManager()
            ->flush();

        return new Response($this->get('jms_serializer')->serialize($student, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }

    /**
     * @param Request $request
     * @param int $id
     *
     * Add formations to a student by giving an array of formation IDs
     */
    public function addFormationsToStudentAction(Request $request, $id)
    {
        // Get an array of formation's IDs
        $ids =  json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager();
        $formationRepository = $em->getRepository('FormerDUTStudentsBundle:Formation');
        $studentRepository = $em->getRepository('FormerDUTStudentsBundle:Student');

        $student = $studentRepository->find($id);
        $formations = $formationRepository->findFormations($ids);

        foreach($formations as $formation)
        {
            $student->addFormation($formation);
        }

        $em->flush();
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Return the current student, the connected one
     * Only use it when connected with student
     */
    public function selfAction(Request $request)
    {
        $user = $this->getUser();

        $data = $this->get('jms_serializer')->serialize($user, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

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
