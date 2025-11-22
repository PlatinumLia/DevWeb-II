<?php
include_once(__DIR__ . "/Arcana.php");
include_once(__DIR__ . "/Tipos.php");

class Demon{
    //atributos
    private ?int $id;
    private ?string $nome;
    private ?float $preco;
    private ?string $fraqueza;
    private ?string $resistencia;
    private ?string $absorcao;
    private ?string $nulificacao;
    private ?Arcana $arcana;
    private ?Tipos $tipos;

    //Getters e Setters
    /* Get e Set do id*/
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /* Get e Set do atributo "nome" */
    public function getNome(): ?string
    {
        return $this->nome;
    }
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /* Get e Set do atributo "preco" */
    public function getPreco(): ?float
    {
        return $this->preco;
    }
    public function setPreco(?float $preco): self
    {
        $this->preco = $preco;
        return $this;
    }

    /* Get e Set da fraqueza */
    public function getFraqueza(): ?string
    {
        return $this->fraqueza;
    }
    public function setFraqueza(?string $fraqueza): self
    {
        $this->fraqueza = $fraqueza;
        return $this;
    }

    /* Get e Set resistencia */
    public function getResistencia(): ?string
    {
        return $this->resistencia;
    }
    public function setResistencia(?string $resistencia): self
    {
        $this->resistencia = $resistencia;
        return $this;
    }

    /* Get e Set da absorcao */
    public function getAbsorcao(): ?string
    {
        return $this->absorcao;
    }
    public function setAbsorcao(?string $absorcao): self
    {
        $this->absorcao = $absorcao;
        return $this;
    }

    /* Get e Set nulificacao */
    public function getNulificacao(): ?string
    {
        return $this->nulificacao;
    }
    public function setNulificacao(?string $nulificacao): self
    {
        $this->nulificacao = $nulificacao;
        return $this;
    }

    /* Get e Set da classe Arcana */
    public function getArcana(): ?Arcana
    {
        return $this->arcana;
    }
    public function setArcana(?Arcana $arcana): self
    {
        $this->arcana = $arcana;
        return $this;
    }

    /* Get e Set da classe Tipos */
    public function getTipos(): ?Tipos
    {
        return $this->tipos;
    }
    public function setTipos(?Tipos $tipos): self
    {
        $this->tipos = $tipos;
        return $this;
    }
} 
?>