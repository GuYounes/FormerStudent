<?php
/**
 * Created by PhpStorm.
 * User: younes
 * Date: 06/10/2017
 * Time: 13:47
 */

namespace FormerDUTStudentsBundle\Model;


class Mail
{
    /**
     * @var string
     *
     * Sender's mail address
     */
    private $sender;

    /**
     * @var \Swift_Mailer
     *
     * Used to send a mail
     */
    private $mailer;

    /**
     * Mail constructor.
     * @param \Swift_Mailer $mailer
     * @param $sender
     */
    public function __construct(\Swift_Mailer $mailer, $sender)
    {
        $this->mailer = $mailer;
        $this->sender = $sender;
    }

    /**
     * @param array $targets
     * Array of the mail addresses to send mail to
     *
     * @param string $subject
     * Subject of the mail
     *
     * @param string $content
     * Content of the mail
     *
     * Send a mail to targets
     */
    public function send($targets, $subject, $content)
    {
        $message = \Swift_Message::newInstance()
            ->setFrom($this->sender)
            ->setTo($targets)
            ->setSubject($subject)
            ->setBody($content);

        $this->mailer->send($message);
    }

}