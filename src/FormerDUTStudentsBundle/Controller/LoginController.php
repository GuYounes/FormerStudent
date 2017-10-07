<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 02/10/2017
 * Time: 13:51
 */

namespace FormerDUTStudentsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LoginController
 * @package FormerDUTStudentsBundle\Controller\Security
 *
 * Get informations on the connection of the user
 * If connected or not per example
 */
class LoginController extends Controller
{

    /**
     * @param Request $request
     * @return Response
     *
     * Used to sign in if not connected
     * !!!!!!!!!! NOT USED !!!!!!!!!!!!!!!
     * Since we work only via API calls and AJAX, this action is useless
     * But obligatory
     */
    public function loginAction(Request $request)
    {
        $user = $this->getUser();

        if($user === null) return new Response($this->get('templating')->render('FormerDUTStudentsBundle:Default:formulaire.html.twig'));
        else return ($this->get('jms_serializer')->serialize($user, 'json', SerializationContext::create()->setGroups(array('toSerialize'))));
    }

    /**
     * @param Request $request
     * @return Reponse|Response
     *
     * If the user connected return his inforrmations, else return false
     */
    public function isLoggedAction(Request $request)
    {
        $user = $this->getUser();

        if($user === null) return new Response("false");

        // Serialize the user to send it
        $data = $this->get('jms_serializer')->serialize($users, 'json', SerializationContext::create()->setGroups(array('toSerialize')));
        return new Reponse($data);

    }

}