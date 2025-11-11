<?php
include_once(__DIR__ . "/Absorb.php");
include_once(__DIR__ . "/Arcana.php");
include_once(__DIR__ . "/Nullifies.php");
include_once(__DIR__ . "/Resistence.php");
include_once(__DIR__ . "/Weakness.php");

class Demon{
    //atributos
    private ?int $id;
    private ?string $nome;
    private ?Absorb $absorb;
    private ?Arcana $arcana;
    private ?Nullifies $null;
    private ?Resistence $res;
    private ?Weakness $weakness;

    //Getters e Setters
    /* Get e Set do id */
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /* Get e Set do nome */
    public function getNome(): ?string
    {
        return $this->nome;
    }
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /* Get e Set da absorção*/
    public function getAbsorb(): ?Absorb
    {
        return $this->absorb;
    }
    public function setAbsorb(?Absorb $absorb): self
    {
        $this->absorb = $absorb;
        return $this;
    }

    /* Get e Set da Arcana */
    public function getArcana(): ?Arcana
    {
        return $this->arcana;
    }
    public function setArcana(?Arcana $arcana): self
    {
        $this->arcana = $arcana;
        return $this;
    }

    /* Get e Set da nulificação */
    public function getNull(): ?Nullifies
    {
        return $this->null;
    }
    public function setNull(?Nullifies $null): self
    {
        $this->null = $null;
        return $this;
    }

    /* Get e Set da resistência */
    public function getRes(): ?Resistence
    {
        return $this->res;
    }
    public function setRes(?Resistence $res): self
    {
        $this->res = $res;
        return $this;
    }

    /* Get e Set da fraqueza */
    public function getWeakness(): ?Weakness
    {
        return $this->weakness;
    }
    public function setWeakness(?Weakness $weakness): self
    {
        $this->weakness = $weakness;
        return $this;
    }
} 
?>