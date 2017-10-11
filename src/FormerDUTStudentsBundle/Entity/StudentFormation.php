<?php

namespace FormerDUTStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * StudentFormation
 *
 * @ORM\Table(name="student_formation")
 * @ORM\Entity(repositoryClass="FormerDUTStudentsBundle\Repository\StudentFormationRepository")
 */
class StudentFormation
{
    /**
     * @ORM\ManyToOne(targetEntity="FormerDUTStudentsBundle\Entity\Formation", cascade={"persist", "remove"}, inversedBy="studentFormations")
     * @ORM\JoinColumn(nullable=false)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $formation;

    /**
     * @ORM\ManyToOne(targetEntity="FormerDUTStudentsBundle\Entity\Student", cascade={"persist", "remove"}, inversedBy="studentFormations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $student;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="graduation_year", type="integer")
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("graduationYear")
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $graduationYear;


    public function __construct($graduationYear)
    {
        $this->graduationYear = $graduationYear;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set graduationYear
     *
     * @param integer $graduationYear
     *
     * @return StudentFormation
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return int
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
    }

    /**
     * Set formation
     *
     * @param \FormerDUTStudentsBundle\Entity\Formation $formation
     *
     * @return StudentFormation
     */
    public function setFormation(Formation $formation)
    {
        $this->formation = $formation;

        $formation->addStudentFormation($this);

        return $this;
    }

    /**
     * Get formation
     *
     * @return \FormerDUTStudentsBundle\Entity\Formation
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Set student
     *
     * @param \FormerDUTStudentsBundle\Entity\Student $student
     *
     * @return StudentFormation
     */
    public function setStudent(Student $student)
    {
        $this->student = $student;

        $student->addStudentFormation($this);

        return $this;
    }

    /**
     * Get student
     *
     * @return \FormerDUTStudentsBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }
}
