<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BelcodeRepository")
 */
class Belcode
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $code;

    /**
     * @ORM\Column(type="float")
     */
    private $xcoordinate;

    /**
     * @ORM\Column(type="float")
     */
    private $ycoordinate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getXcoordinate(): ?float
    {
        return $this->xcoordinate;
    }

    public function setXcoordinate(float $xcoordinate): self
    {
        $this->xcoordinate = $xcoordinate;

        return $this;
    }

    public function getYcoordinate(): ?float
    {
        return $this->ycoordinate;
    }

    public function setYcoordinate(float $ycoordinate): self
    {
        $this->ycoordinate = $ycoordinate;

        return $this;
    }
}
