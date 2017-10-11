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
 * Class CredentialsFController
 * @package FormerDUTStudentsBundle\Controller
 *
 * Edit password
 *
 * @Security("is_granted('ROLE_STUDENT')")
 */
class UserController extends Controller
{

    /**
     * @param Request $request
     * @param $id
     * Id of user we want to edit password
     *
     * @return Response
     *
     * Be careful, That's the USER's id and not the STUDENT's
     *
     * Edit a user password
     * JSON:
     * {
     *      "password": "newpassword"
     * }
     *
     */
    public function editPasswordAction(Request $request, $id)
    {
        // Check if this student id is ours, or if we are admin
        // If not we are not authorized to remove formations from a student
        if($this->getUser()->getStudent()->getId() != $id && !($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')))
        {
            return new Response("You are not authorized");
        }

        // Deserialize the json into an array
        $data = json_decode($request->getContent(), true);
        $password = $data["password"];

        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('FormerDUTStudentsBundle:User');

        $user = $repository->find($id);
        $user->setPassword($password);

        // Save
        $em->flush();

        return new Response("true");
    }
}