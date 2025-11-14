<?php 
class Tipos{
    //atributos
    private ?int $id;
    private ?string $tipo;

    //métodos
    public function encurtaTipo(){ //encurtar alguns tipos elementais
        if($this->tipo == 'Physical'){
            return "Phys";
        }

        if($this->tipo == 'Electricity' ){
            return "Elec";
        }

        if($this->tipo == 'Psychokinesis'){
            return "Psy";
        }
    }

    public function verificaMultiplo(){ //verifica qual o tipo de múltiplo está sendo escolhido
        if($this->tipo == 'Múltiplo'){
            return "M. Weak";
        }
        if($this->tipo == 'Múltiplo'){
            return "M. Res";
        }
        if($this->tipo == 'Múltiplo'){
            return "M. Abs";
        }
        if($this->tipo == 'Múltiplo'){
            return "M. Null";
        }
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

    /* Get e Set do tipo*/
    public function getTipo(): ?string
    {
        return $this->tipo;
    }
    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;
        return $this;
    }
}
?>