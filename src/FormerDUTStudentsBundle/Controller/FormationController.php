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
 *
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

        $formations = $repository->findAll();

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

        $formation = $repository->find($id);

        $data = $this->get('jms_serializer')->serialize($formation, 'json', SerializationContext::create()->setGroups(array('toSerialize')));

        return new Response($data);
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Add a new formation
     */
    public function addFormationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $request->getContent();

        $formation = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Formation', 'json');

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

        // This method will delete student but also the related user
        // No need to flush
        $repository->deleteFormationById($id);

        return new Response("true");
    }

    /**
     * @param Request $request
     * @return Response
     *
     * Delete several formations from an array of IDs
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
     */
    public function editFormationAction(Request $request, $id)
    {
        $repository = $this->getDoctrine()
            ->getManager()
            ->getRepository('FormerDUTStudentsBundle:Formation');

        $formation = $repository->findOneById($id);

        // Get the body of the request
        $data = $request->getContent();

        // Deserialize the json into an object
        $newFormation = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Formation', 'json');

        if($newFormation->getName() != null) $formation->setName($newFormation->getName());
        if($newFormation->getCreationDate() != null) $formation->setCreationDate($newFormation->getCreationDate());
        if($newFormation->getClosingDate() != null) $formation->setClosingDate($newFormation->getClosingDate());

        $this->getDoctrine()
            ->getManager()
            ->flush();

        return new Response($this->get('jms_serializer')->serialize($formation, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }
}