<?php

namespace FormerDUTStudentsBundle\Entity;

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
     * @ORM\OneToOne(targetEntity="FormerDUTStudentsBundle\Entity\User", cascade={"persist", "remove"}, inversedBy="student")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

    /**
     * @ORM\ManyToMany(targetEntity="FormerDUTStudentsBundle\Entity\Formation", cascade={"persist"}, inversedBy="students")
     */
    private $formations;

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
     * @var \DateTime
     *
     * @ORM\Column(name="graduation_year", type="integer")
     *
     * @Serializer\Groups({"toSerialize"})
     * @Serializer\SerializedName("graduationYear")
     */
    private $graduationYear;

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


    public function __construct($name, $lastName, $mail, $graduationYear, $phone, $company, $job)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->mail = $mail;
        $this->graduationYear = $graduationYear;
        $this->phone = $phone;
        $this->company = $company;
        $this->job = $job;
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
     * Set graduationYear
     *
     * @param \DateTime $graduationYear
     *
     * @return Student
     */
    public function setGraduationYear($graduationYear)
    {
        $this->graduationYear = $graduationYear;

        return $this;
    }

    /**
     * Get graduationYear
     *
     * @return \DateTime
     */
    public function getGraduationYear()
    {
        return $this->graduationYear;
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
     * Add formation
     *
     * @param \FormerDUTStudentsBundle\Entity\Formation $formation
     *
     * @return Student
     */
    public function addFormation(Formation $formation)
    {
        $this->formations[] = $formation;

        $formation->addStudent($this);

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \FormerDUTStudentsBundle\Entity\Formation $formation
     */
    public function removeFormation(Formation $formation)
    {
        $this->formations->removeElement($formation);

        $formation->removeStudent($this);
    }

    /**
     * Get formations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormations()
    {
        return $this->formations;
    }
}
