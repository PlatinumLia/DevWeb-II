<?php
class Weakness{
    private ?int $id;
    private ?string $tipoWk;

    //métodos
    public function encurtaTipo(){
        if($this->tipoWk == 'Physical'){
            return "Phys";
        }

        if($this->tipoWk == 'Electricity'){
            return "Elec";
        }

        if($this->tipoWk == 'Psychokinesis'){
            return "Psy";
        }

        if($this->tipoWk == 'Múltipla absorção'){
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

    /* Get e Set do tipo de fraqueza */
    public function getTipoWk(): ?string
    {
        return $this->tipoWk;
    }
    public function setTipoWk(?string $tipoWk): self
    {
        $this->tipoWk = $tipoWk;
        return $this;
    }
}
?>