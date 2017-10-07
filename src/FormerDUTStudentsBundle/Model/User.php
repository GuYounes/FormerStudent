<?php

namespace FormerDUTStudentsBundle\Model;

use FormerDUTStudentsBundle\Entity\Student;
use FormerDUTStudentsBundle\Entity\User as UserEntity;
use FormerDUTStudentsBundle\Model\Credentials;

/**
 * Class User
 * @package FormerDUTStudentsBundle\Model
 *
 * Class used to generate User Entity Class From a student
 */
class User
{
    /**
     * @var Credentials
     *
     * Used to generate password and username
     */
    private $credentials;

    /**
     * User constructor.
     * @param \FormerDUTStudentsBundle\Model\Credentials $credentials
     */
    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @param Student $student
     * @return UserEntity
     *
     * Generate a user type student
     */
    public function generateUser(Student $student)
    {
        $password = $this->credentials->generatePassword();
        $username = $this->credentials->generateUsername($student);

        $user = new UserEntity("$username", "$password", "", ["ROLE_STUDENT"]);

        return $user;
    }
}