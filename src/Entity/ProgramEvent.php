<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\JoinColumn;
use App\Entity\Review;
use App\Entity\Program;
use App\Entity\City;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProgramEventRepository")
 */
class ProgramEvent
{
    /**
     * Many features have one product. This is the owning side.
     * @ManyToOne(targetEntity="City", inversedBy="program_events")
     * @JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $cities;

    /**
     * Many features have one product. This is the owning side.
     * @ManyToOne(targetEntity="Review", inversedBy="program_events")
     * @JoinColumn(name="review_id", referencedColumnName="id")
     */
    private $reviews;

    /**
     * Many features have one product. This is the owning side.
     * @ManyToOne(targetEntity="Program", inversedBy="program_events")
     * @JoinColumn(name="program_id", referencedColumnName="id")
     */
    private $programs;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $program_start;

    /**
     * @ORM\Column(type="date")
     */
    private $program_end;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $program_location;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgramStart(): ?\DateTimeInterface
    {
        return $this->program_start;
    }

    public function setProgramStart(\DateTimeInterface $program_start): self
    {
        $this->program_start = $program_start;

        return $this;
    }

    public function getProgramEnd(): ?\DateTimeInterface
    {
        return $this->program_end;
    }

    public function setProgramEnd(\DateTimeInterface $program_end): self
    {
        $this->program_end = $program_end;

        return $this;
    }

    public function getProgramLocation(): ?string
    {
        return $this->program_location;
    }

    public function setProgramLocation(string $program_location): self
    {
        $this->program_location = $program_location;

        return $this;
    }
}