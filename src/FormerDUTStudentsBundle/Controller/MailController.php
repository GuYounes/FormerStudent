<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 06/10/2017
 * Time: 13:34
 */

namespace FormerDUTStudentsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class MailController
 * @package FormerDUTStudentsBundle\Controller
 *
 * Send mails
 *
 * /mail POST
 */
class MailController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * Send mail to one or several students
     * JSON:
     * {
     *      "mails": ["younes.gua@gmail.com", "younes@gmail.com"],
     *      "subject": "Hello",
     *      "body": "Hello Sir, How are you"
     * }
     */
    public function sendMailAction(Request $request) {
        $data = json_decode($request->getContent(), true);

        $mailer = $this->get("former_dut_students.mail");
        $mailer->send($data["mails"], $data["subject"], $data["body"]);

        return new Response("true");
    }

}