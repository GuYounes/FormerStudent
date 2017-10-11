<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 06/10/2017
 * Time: 18:38
 */

namespace FormerDUTStudentsBundle\Controller;


use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Class FormationController
 * @package FormerDUTStudentsBundle\Controller
 *
 * CRUD on formations
 * Only available to admin
 *
 * @Security("is_granted('ROLE_ADMIN')")
 */
class FormationController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * Get all formations
     */
    public function getFormationsAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        // Get all formations
        $formations = $repository->findAll();

        // Serialize
        $data = $this->get('jms_serializer')->serialize($formations, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @param $id
     *
     * The formation id
     *
     * @return Response
     *
     * Get a formation from his id
     */
    public function getFormationAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        // Get the formation
        $formation = $repository->find($id);

        // Serialize
        $data = $this->get('jms_serializer')->serialize($formation, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Add a new formation
     * JSON:
     * {
     *      "name": "DUT Informatique"
     *      "creationDate": 2000,
     *      "closingDate": 2017
     * }
     *
     * The parameter "closingDate" is optional
     */
    public function addFormationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Get the json
        $data = $request->getContent();

        // Deserialize the json into an object
        $formation = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Formation', 'json');

        // Save
        $em->persist($formation);
        $em->flush();

        return new Response("true");
    }

    /**
     * @param Request $request
     * @param int $id
     * Id of the formation we want to delete
     *
     * @return Response
     *
     * Delete one formation
     */
    public function deleteFormationAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        // Delete the formation
        $repository->deleteFormationById($id);

        return new Response("true");
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Delete several formations from an array of IDs
     * JSON:
     * {
     *      [3, 5]
     * }
     */
    public function deleteFormationsAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        // Get an array of formation's IDs
        $formations = json_decode($request->getContent(), true);

        // This method will delete formation
        // No need to flush
        $repository->deleteFormations($formations);

        return new Response("true");
    }

    /**
     * @param Request $request
     * @param $id
     * Id of the formation we want to update
     *
     * @return Response
     *
     * Update a formation's information
     * JSON:
     * {
     *      "name": "DUT Informatique"
     *      "creationDate": 2000,
     *      "closingDate": 2017
     * }
     *
     * All parameters are optional
     */
    public function editFormationAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        // Get the formation we want to edit
        $formation = $repository->findOneById($id);

        // Get the body of the request
        $data = $request->getContent();

        // Deserialize the json into an object
        $newFormation = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Formation', 'json');

        // If the value of a parameter is send in the json, we replace the old parameter by this one
        // Else we don't change it
        if($newFormation->getName() != null) $formation->setName($newFormation->getName());
        if($newFormation->getCreationDate() != null) $formation->setCreationDate($newFormation->getCreationDate());
        if($newFormation->getClosingDate() != null) $formation->setClosingDate($newFormation->getClosingDate());

        $this->getDoctrine()
            ->getManager()
            ->flush();

        return new Response($this->get('jms_serializer')->serialize($formation, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }
}