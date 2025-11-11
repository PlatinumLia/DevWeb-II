<?php
class Nullifies{
    //atributos
    private ?int $id;
    private ?string $tipoNull;

    //métodos
    public function encurtaTipo(){
        if($this->tipoNull == 'Physical'){
            return "Phys";
        }

        if($this->tipoNull == 'Electricity'){
            return "Elec";
        }

        if($this->tipoNull == 'Psychokinesis'){
            return "Psy";
        }

        if($this->tipoNull == 'Múltipla absorção'){
            return "M.Null";
        }
    }

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

    /* Get e Set do tipo de nulificação */
    public function getTipoNull(): ?string
    {
        return $this->tipoNull;
    }
    public function setTipoNull(?string $tipoNull): self
    {
        $this->tipoNull = $tipoNull;
        return $this;
    }
}
?>