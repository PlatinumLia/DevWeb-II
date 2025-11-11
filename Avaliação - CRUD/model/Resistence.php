<?php
class Resistence{
    //atributos
    private ?int $id;
    private ?string $tipoRes;
    
    //métodos
    public function encurtaTipo(){
        if($this->tipoRes == 'Physical'){
            return "Phys";
        }

        if($this->tipoRes == 'Electricity'){
            return "Elec";
        }

        if($this->tipoRes == 'Psychokinesis'){
            return "Psy";
        }

        if($this->tipoRes == 'Múltipla absorção'){
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

    /* Get e Set do tipo de resistência */
    public function getTipoRes(): ?string
    {
        return $this->tipoRes;
    }
    public function setTipoRes(?string $tipoRes): self
    {
        $this->tipoRes = $tipoRes;
        return $this;
    }
}
?>