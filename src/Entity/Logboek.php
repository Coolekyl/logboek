<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LogboekRepository")
 */
class Logboek
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $brief_nr;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datum;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $chauffeurId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $truckId;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $kubs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $laadplaats;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $vertrektijd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bestemming;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $evenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getBriefNr(): ?int
    {
        return $this->brief_nr;
    }

    public function setBriefNr(?int $brief_nr): self
    {
        $this->brief_nr = $brief_nr;

        return $this;
    }

    public function getDatum(): ?\DateTimeInterface
    {
        return $this->datum;
    }

    public function setDatum(?\DateTimeInterface $datum): self
    {
        $this->datum = $datum;

        return $this;
    }

    public function getChauffeurId(): ?int
    {
        return $this->chauffeurId;
    }

    public function setChauffeurId(?int $chauffeurId): self
    {
        $this->chauffeurId = $chauffeurId;

        return $this;
    }

    public function getTruckId(): ?int
    {
        return $this->truckId;
    }

    public function setTruckId(?int $truckId): self
    {
        $this->truckId = $truckId;

        return $this;
    }

    public function getKubs(): ?string
    {
        return $this->kubs;
    }

    public function setKubs(?string $kubs): self
    {
        $this->kubs = $kubs;

        return $this;
    }

    public function getLaadplaats(): ?string
    {
        return $this->laadplaats;
    }

    public function setLaadplaats(?string $laadplaats): self
    {
        $this->laadplaats = $laadplaats;

        return $this;
    }

    public function getVertrektijd(): ?\DateTimeInterface
    {
        return $this->vertrektijd;
    }

    public function setVertrektijd(?\DateTimeInterface $vertrektijd): self
    {
        $this->vertrektijd = $vertrektijd;

        return $this;
    }

    public function getBestemming(): ?string
    {
        return $this->bestemming;
    }

    public function setBestemming(?string $bestemming): self
    {
        $this->bestemming = $bestemming;

        return $this;
    }

    public function getEvenement(): ?string
    {
        return $this->evenement;
    }

    public function setEvenement(?string $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
