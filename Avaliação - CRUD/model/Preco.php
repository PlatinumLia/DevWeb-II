<?php
class Preco{
    //atributos
    private ?int $id;
    private ?float $valor;

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

    /* Get e Set do valor */
    public function getValor(): ?float
    {
        return $this->valor;
    }
    public function setValor(?float $valor): self
    {
        $this->valor = $valor;
        return $this;
    }
}
?>