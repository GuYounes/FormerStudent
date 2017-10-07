<?php

namespace FormerDUTStudentsBundle\Model;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use FormerDUTStudentsBundle\Entity\Student;

/**
 * Class Credentials
 * @package FormerDUTStudentsBundle\Model
 *
 * Create credentials for a student
 */
class Credentials
{

    /**
     * @var EntityManager
     *
     * Help to get a repository to do requests in db
     */
    private $entityManager;

    /**
     * Credentials constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return string
     *
     * Generate a 12 characters password
     */
    public function generatePassword()
    {
        $password_length = 12;
        $password = "";

        $caracters = "abcdefghjkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ0123456789+@!$%?&";
        $length = strlen($caracters);

        for($i = 1; $i <= $password_length; $i++)
        {
            $index = mt_rand(0,($length-1));
            $password = $password.$caracters[$index];
        }

        return $password;
    }

    /**
     * @param Student $student
     * @return string
     *
     * Generate a username from a student's first name and last name
     */
    public function generateUsername(Student $student)
    {
        $repository = $this->entityManager->getRepository('FormerDUTStudentsBundle:User');

        $name = $student->getName();
        $lastName = $student->getLastName();

        // Username = first letter of first name + last name
        // E.g Younes Guarssifi => yguarssifi
        $username = strtolower(substr($name, 0, 1) . $lastName);

        // Take the last user with that username
        $user = $repository->usernameBeginWith($username);

        // If there is not, give this username to the student
        if(empty($user) === true) return $username;

        // If there is only one student with that username, we add "1" to the username
        // E.g Jane Doe => jdoe ; Jerry Doe => jdoe1
        if(strlen(end($user)->getUsername) == strlen($username)) return $username . "1";

        // If there is already several students with that username (jdoe, jdoe1, jdoe2...)
        // We take the number a the end of his username and add 1 to it
        $lastNumber = (int)substr(end($user)->getUsername, strlen($username));
        $lastNumber++;

        return $username . $lastNumber;
    }
}