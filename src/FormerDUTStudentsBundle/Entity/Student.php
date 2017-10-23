<?php

namespace FormerDUTStudentsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;


/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="FormerDUTStudentsBundle\Repository\StudentRepository")
 */
class Student
{
    /**
     * @ORM\OneToMany(targetEntity="FormerDUTStudentsBundle\Entity\StudentFormation", cascade={"persist", "remove"}, mappedBy="student")
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("studentFormations")
     */
    private $studentFormations;

    /**
     * @ORM\OneToOne(targetEntity="FormerDUTStudentsBundle\Entity\User", cascade={"persist", "remove"}, inversedBy="student")
     */
    private $user;

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
     * @ORM\Column(name="name", type="string", length=255)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("lastName")
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", unique = true, length=255)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="mail2", type="string", length=255, nullable=true)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $mail2;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255, nullable=true)
     *
     * @Serializer\Groups({"toSerialize"})
     */
    private $job;

    /**
     * @var boolean
     *
     * @ORM\Column(name="validated", type="boolean")
     *
     * @Serializer\Groups({"toSerialize", "withoutStudent"})
     */
    private $validated;


    public function __construct($name, $lastName, $mail, $mail2, $phone, $company, $job)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->mail = $mail;
        $this->mail2 = $mail2;
        $this->phone = $phone;
        $this->company = $company;
        $this->job = $job;
        $this->studentFormations = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Student
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Student
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
 * Set mail
 *
 * @param string $mail
 *
 * @return Student
 */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set mail2
     *
     * @param string $mail2
     *
     * @return Student
     */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;

        return $this;
    }

    /**
     * Get mail2
     *
     * @return string
     */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Student
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Student
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Student
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }


    /**
     * Set user
     *
     * @param \FormerDUTStudentsBundle\Entity\User $user
     *
     * @return Student
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        $user->setStudent($this);

        return $this;
    }

    /**
     * Get user
     *
     * @return \FormerDUTStudentsBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add studentFormation
     *
     * @param \FormerDUTStudentsBundle\Entity\StudentFormation $studentFormation
     *
     * @return Student
     */
    public function addStudentFormation(StudentFormation $studentFormation)
    {
        $this->studentFormations[] = $studentFormation;

        return $this;
    }

    /**
     * Remove studentFormation
     *
     * @param \FormerDUTStudentsBundle\Entity\StudentFormation $studentFormation
     */
    public function removeStudentFormation(StudentFormation $studentFormation)
    {
        $this->studentFormations->removeElement($studentFormation);
    }

    /**
     * Get studentFormations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentFormations()
    {
        return $this->studentFormations;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return User
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }
}
