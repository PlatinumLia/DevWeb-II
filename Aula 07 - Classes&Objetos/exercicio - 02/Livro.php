<?php
class Livro{
    private string $titulo;
    private string $autor;
    private string $genero;
    private int $qtdPags;
    
    //construtor
    public function __construct($titulo="", $autor="", $genero="", $qtdPags=0){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->genero = $genero;
        $this->qtdPags = $qtdPags;
    }

    //Get the value of titulo
    public function getTitulo(): string
    {
        return $this->titulo;
    }
    //Set the value of titulo
    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }

    //Get the value of autor
    public function getAutor(): string
    {
        return $this->autor;
    }
    //Set the value of autor
    public function setAutor(string $autor): self
    {
        $this->autor = $autor;
        return $this;
    }

    //Get the value of genero
    public function getGenero(): string
    {
        return $this->genero;
    }

    //Set the value of genero
    public function setGenero(string $genero): self
    {
        $this->genero = $genero;
        return $this;
    }
    //Get the value of qtdPags
    public function getQtdPags(): int
    {
        return $this->qtdPags;
    }
    //Set the value of qtdPags
    public function setQtdPags(int $qtdPags): self
    {
        $this->qtdPags = $qtdPags;
        return $this;
    }
}
?>