<?php
namespace App\Model;

use \JsonSerializable;

class Racas implements JsonSerializable{
    private ?int $id;
    private ?string $nome;

    public function __construct(){
        $this->id = 0;
        $this->nome = null;
    }

    public function jsonSerialize(): array{
        return array(
            "id" => $this->id,
            "nome" => $this->nome
        );
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

    /* Get e Set do nome */
    public function getNome(): ?string
    {
        return $this->nome;
    }
    public function setNome(?string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }
}
?>