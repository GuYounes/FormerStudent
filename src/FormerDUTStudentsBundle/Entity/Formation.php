<?php

namespace FormerDUTStudentsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;


/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity(repositoryClass="FormerDUTStudentsBundle\Repository\FormationRepository")
 */
class Formation
{
    /**
     * @ORM\ManyToMany(targetEntity="FormerDUTStudentsBundle\Entity\Student", cascade={"persist"}, mappedBy="formations")
     */
    private $students;

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", unique = true, length=255)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="creation_date", type="integer")
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("creationDate")
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="closing_date", type="integer", nullable=true)
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("closingDate")
     */
    private $closingDate;


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
     * Set name
     *
     * @param string $name
     *
     * @return Formation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set creationDate
     *
     * @param integer $creationDate
     *
     * @return Formation
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set closingDate
     *
     * @param integer $closingDate
     *
     * @return Formation
     */
    public function setClosingDate($closingDate)
    {
        $this->closingDate = $closingDate;

        return $this;
    }

    /**
     * Get closingDate
     *
     * @return int
     */
    public function getClosingDate()
    {
        return $this->closingDate;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->students = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add student
     *
     * @param \FormerDUTStudentsBundle\Entity\Student $student
     *
     * @return Formation
     */
    public function addStudent(Student $student)
    {
        $this->students[] = $student;

        return $this;
    }

    /**
     * Remove student
     *
     * @param \FormerDUTStudentsBundle\Entity\Student $student
     */
    public function removeStudent(Student $student)
    {
        $this->students->removeElement($student);
    }

    /**
     * Get students
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudents()
    {
        return $this->students;
    }
}
