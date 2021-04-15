<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Ordinazioni
 * @ApiResource()
 * @ORM\Table(name="ordinazioni")
 * @ORM\Entity(repositoryClass="App\Repository\ClassNameRepository")
 */
class Ordinazioni
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classe", type="string", length=1, nullable=true, options={"fixed"=true})
     */
    private $classe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sede", type="string", length=50, nullable=true)
     */
    private $sede;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prodotto", type="string", length=255, nullable=true)
     */
    private $prodotto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numeroOrdinazioni", type="integer", nullable=true)
     */
    private $numeroordinazioni;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(?\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->classe;
    }

    public function setClasse(?string $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getSede(): ?string
    {
        return $this->sede;
    }

    public function setSede(?string $sede): self
    {
        $this->sede = $sede;

        return $this;
    }

    public function getProdotto(): ?string
    {
        return $this->prodotto;
    }

    public function setProdotto(?string $prodotto): self
    {
        $this->prodotto = $prodotto;

        return $this;
    }

    public function getNumeroordinazioni(): ?int
    {
        return $this->numeroordinazioni;
    }

    public function setNumeroordinazioni(?int $numeroordinazioni): self
    {
        $this->numeroordinazioni = $numeroordinazioni;

        return $this;
    }
}
