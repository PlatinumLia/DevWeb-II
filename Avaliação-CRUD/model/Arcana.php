<?php
class Arcana{
    //atributos
    private ?int $id;
    private ?string $nomeArc;
    private ?int $numArcana;

    //métodos
    public function getCarta(){ //concatena o nome e nº da arcana
        return $this->nomeArc . " - " . $this->numArcana;
    }

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

    /* Get e Set do nome da Arcana */
    public function getNomeArc(): ?string
    {
        return $this->nomeArc;
    }
    public function setNomeArc(?string $nomeArc): self
    {
        $this->nomeArc = $nomeArc;
        return $this;
    }

    /* Get e Set do número da Arcana */
    public function getNumArcana(): ?int
    {
        return $this->numArcana;
    }
    public function setNumArcana(?int $numArcana): self
    {
        $this->numArcana = $numArcana;
        return $this;
    }
}
?>