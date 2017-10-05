<?php

namespace FormerDUTStudentsBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param string $username
     * @return array
     *
     * Get all users who have $username in the beginning of their username
     * Used to create new usernames without redundancies
     */
    public function usernameBeginWith($username)
    {
        $qb = $this->createQueryBuilder('u');

        $qb
            ->where('u.username like :username')
            ->setParameter('username', $username . '%');

        return $qb
            ->getQuery()
            ->getResult();

    }

}
