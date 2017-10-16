<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 15/10/2017
 * Time: 16:16
 */

namespace FormerDUTStudentsBundle\Controller;

use FormerDUTStudentsBundle\Entity\StudentFormation;
use FormerDUTStudentsBundle\Entity\Student;
use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class StudentController
 * @package FormerDUTStudentsBundle\Controller\Student
 *
 * Edit graduationYear
 *
 * @Security("is_granted('ROLE_STUDENT')")
 */
class StudentFormationController extends Controller
{

    /**
     * @param Request $request
     *
     * @return Response
     *
     * Update a studentformation's graduation year
     * JSON:
     * {
     *      "studentId": 9,
     *      "formationId": 3,
     *      "graduationYear": 2017
     * }
     *
     * /studentFormations PUT
     */
    public function editAction(Request $request)
    {
        // Get an array of formation's IDs and an array of graduation years
        $data = json_decode($request->getContent(),true);

        // Check if this student id is ours, or if we are admin
        // If not we are not authorized to remove formations from a student
        if($this->getUser()->getStudent()->getId() != $data["studentId"] && !($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')))
        {
            return new Response("You are not authorized");
        }

        $studentFormationRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:StudentFormation');

        $formationRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        $studentRepository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Student');

        $formation = $formationRepository->find($data["formationId"]);
        $student = $studentRepository->find($data["studentId"]);

        $studentFormation = $studentFormationRepository->findOneBy(array('formation' => $formation, 'student' => $student));

        $studentFormation->setGraduationYear($data["graduationYear"]);

        $this->getDoctrine()
            ->getManager()
            ->flush();

        return new Response($this->get('jms_serializer')->serialize($studentFormation, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }

}
