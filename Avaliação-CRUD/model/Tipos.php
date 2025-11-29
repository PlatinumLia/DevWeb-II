<?php 
class Tipos{
    //atributos
    private ?int $id;
    private ?string $tipo;

    //métodos
    public function encurtaTipo(){ //mostra os tipos elementais que o demônio é fraco
        if($this->tipo == 'Nenhuma'){ return "Nenhuma"; }
        if($this->tipo == 'Physical'){ return "Phys"; }
        if($this->tipo == 'Gun'){ return "Gun"; }
        if($this->tipo == 'Fire'){ return "Fire"; }
        if($this->tipo == 'Ice'){ return "Ice"; }
        if($this->tipo == 'Electricity'){ return "Elec"; }
        if($this->tipo == 'Wind'){ return "Wind"; }
        if($this->tipo == 'Psychokinesis'){ return "Psy"; }
        if($this->tipo == 'Nuke'){ return "Nuke"; }
        if($this->tipo == 'Bless'){ return "Bless"; }
        if($this->tipo == 'Curse'){ return "Curse"; }
        if($this->tipo == 'Múltiplo'){ return "M. Weak"; }
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