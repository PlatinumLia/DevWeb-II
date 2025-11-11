<?php
class Absorb{
    //atributos
    private ?int $id;
    private ?string $tipoAbs;

    //métodos
    public function encurtaTipo(){
        if($this->tipoAbs == 'Physical'){
            return "Phys";
        }

        if($this->tipoAbs == 'Electricity'){
            return "Elec";
        }

        if($this->tipoAbs == 'Psychokinesis'){
            return "Psy";
        }

        if($this->tipoAbs == 'Múltipla absorção'){
            return "M.Abs";
        }
    }

    //Getters e Setters
    /* Get e Set */
    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /* Get e Set do tipo de absroção */
    public function getTipoAbs(): ?string
    {
        return $this->tipoAbs;
    }
    public function setTipoAbs(?string $tipoAbs): self
    {
        $this->tipoAbs = $tipoAbs;
        return $this;
    }
}
?>