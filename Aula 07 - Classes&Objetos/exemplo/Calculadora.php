<?php
/* Classe */
class Calculadora{
    /* Atributos */
    private int $num1;
    private int $num2;

    //Construtor:
    public function __construct($num1=0, $num2=0){ //definido valores padrões para não precisar declarar parâmetros
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    /* Métodos */
    public function somar(){
        $soma = $this->num1 + $this->num2; //o "this->" é obrgatório para acessar os atributos dentro da classe
        return $soma;
    }

    /* Getters e Setters */
    //Get do valor num1
    public function getNum1(): int
    {
        return $this->num1;
    }
    //Set do valor num1
    public function setNum1(int $num1): self
    {
        $this->num1 = $num1;

        return $this;
    }

    //Get do valor num2
    public function getNum2(): int
    {
        return $this->num2;
    }
    //Set do valor num2
    public function setNum2(int $num2): self
    {
        $this->num2 = $num2;

        return $this;
    }
}
?>