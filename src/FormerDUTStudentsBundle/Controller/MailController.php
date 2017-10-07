<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 06/10/2017
 * Time: 13:34
 */

namespace FormerDUTStudentsBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MailController
 * @package FormerDUTStudentsBundle\Controller
 *
 * Send mails
 */
class MailController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     *
     * Send mail to one or several students
     * Need JSON with :
     *  - Array of mail addresses to send mail to
     *  - A subject
     *  - A content
     */
    public function sendMailAction(Request $request) {
        $data = json_decode($request->getContent(), true);

        $mailer = $this->get("former_dut_students.mail");
        $mailer.send($data["mails"], $data["subject"], $data["body"]);

        return new Response("true");
    }

}