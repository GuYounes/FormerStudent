<?php

namespace FormerDUTStudentsBundle\Repository;

/**
 * StudentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StudentRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param array $students
     * Contains the Ids of the students we want to delete
     *
     * @return array
     *
     * Delete several students in once
     * Delete also the user
     */
    public function deleteStudents($students)
    {
        $qb = $this->createQueryBuilder('s');

        $qb->delete('FormerDUTStudentsBundle:Student','s');

        foreach($students as $id)
        {
            $qb->orWhere($qb->expr()->eq('s.id', $id));
        }

        return $qb
            ->getQuery()
            ->getResult();
    }

    /**
     * @param int $id
     * The id of the student we want to delete
     *
     * @return array
     *
     * Delete one student by his Id
     */
    public function deleteStudentById($id)
    {
        $qb = $this->createQueryBuilder('s');

        $qb->delete('FormerDUTStudentsBundle:Student','s');

        $qb->Where($qb->expr()->eq('s.id', $id));

        return $qb
            ->getQuery()
            ->getResult();
    }

    /**
     * @param array $students
     * Array of students IDs
     *
     * @return array
     *
     * Get students with an array of IDs
     */
    public function findStudents($students)
    {
        $qb = $this->createQueryBuilder('s');

        $qb->where($qb->expr()->in('s.id', $students));

        return $qb
            ->getQuery()
            ->getResult();

    }
}
