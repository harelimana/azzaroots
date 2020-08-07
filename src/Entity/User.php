<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @var
     */
    protected $agreetoterms;

    /**
     * @var
     */
    protected $subscribetonewsletter;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Image", cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Belcode", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $belcode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getBelcode(): ?string
    {
        return $this->belcode;
    }

    public function setBelcode(string $belcode): self
    {
        $this->belcode = $belcode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAgreetoterms()
    {
        return $this->agreetoterms;
    }

    /**
     * @param mixed $agreetoterms
     */
    public function setAgreetoterms($agreetoterms): void
    {
        $this->agreetoterms = $agreetoterms;
    }

    /**
     * @return mixed
     */
    public function getSubscribetonewsletter()
    {
        return $this->subscribetonewsletter;
    }

    /**
     * @param mixed $subscribetonewsletter
     */
    public function setSubscribetonewsletter($subscribetonewsletter): void
    {
        $this->subscribetonewsletter = $subscribetonewsletter;
    }
    /**
     * @return string
     */
    public function __toString()
    {
        if (is_null($this->getImage())){
            return 'null';
        }
        return $this->getImage();
    }
}
