<?php
namespace App\Model;

use App\Model\Arcana;
use App\Model\Tipos;
use App\Model\Racas;

use \JsonSerializable;

class Demon implements JsonSerializable{
    //atributos
    private ?int $id;
    private ?string $nome;
    private ?float $preco;
    private $arcana;
    private $tipos;
    private $racas;

    //métodos
    public function __construct(){
        $this->id = 0;
        $this->nome = null;
        $this->preco = null;
        $this->arcana = null;
        $this->tipos = null;
        $this->racas = null;
    }

    public function jsonSerialize(): array{
        return array(
            "id" => $this->id,
            "nome" => $this->nome,
            "preco" => $this->preco,
            "arcana" => $this->arcana,
            "tipos" => $this->tipos,
            "racas" => $this->racas
        );
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

    /* Get e Set do atributo "nome" */
    public function getNome(): ?string
    {
        return $this->nome;
    }
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /* Get e Set do atributo "preco" */
    public function getPreco(): ?float
    {
        return $this->preco;
    }
    public function setPreco(?float $preco): self
    {
        $this->preco = $preco;
        return $this;
    }

    /* Get e Set da classe Arcana */
    public function getArcana(): ?Arcana
    {
        return $this->arcana;
    }
    public function setArcana(?Arcana $arcana): self
    {
        $this->arcana = $arcana;
        return $this;
    }

    /* Get e Set da classe Tipos */
    public function getTipos(): ?Tipos
    {
        return $this->tipos;
    }
    public function setTipos(?Tipos $tipos): self
    {
        $this->tipos = $tipos;
        return $this;
    }

    /* Get e Set da raça*/
    public function getRacas(): ?Racas
    {
        return $this->racas;
    }
    public function setRacas(?Racas $racas): self
    {
        $this->racas = $racas;
        return $this;
    }
} 
?>