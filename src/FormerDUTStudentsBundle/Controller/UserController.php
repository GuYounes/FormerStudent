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
     * @param int $id
     * Id of user we want to edit password
     * Be careful, That's the USER id and not the STUDENT
     *
     * Edit a user password
     */
    public function editPasswordAction(Request $request, $id)
    {
        // Get the body of the request
        $data = $request->getContent();

        // Deserialize the json into a User entity and get the new password
        $newPassword = $this->get('jms_serializer')->deserialize($data, 'FormerDUTStudentsBundle\Entity\Student', 'json')->getPassword();

        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('FormerDUTStudentsBundle:User');

        $user = $repository->find($id);
        $user->setPassword($newPassword);

        $em->flush();
    }
}