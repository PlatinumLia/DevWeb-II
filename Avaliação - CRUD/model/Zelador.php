<?php
include_once(__DIR__ . "/Equipe.php");
include_once(__DIR__ . "/Jinki.php");

class Zelador{
    //atributos -> usados para os Getters e Setters
    private ?int $id;
    private ?string $nome;
    private ?string $ocupacao;
    private ?int $idade;
    private ?Equipe $equipe;
    private ?Jinki $jinki;

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

    /* Get e Set da ocupacao */
    public function getOcupacao(): ?string
    {
        return $this->ocupacao;
    }
    public function setOcupacao(?string $ocupacao): self
    {
        $this->ocupacao = $ocupacao;
        return $this;
    }

    /* Get e Set da idade */
    public function getIdade(): ?int
    {
        return $this->idade;
    }
    public function setIdade(?int $idade): self
    {
        $this->idade = $idade;
        return $this;
    }

    /* Get e Set da equipe */
    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }
    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;
        return $this;
    }

    /* Get e Set do jinki */
    public function getJinki(): ?Jinki
    {
        return $this->jinki;
    }
    public function setJinki(?Jinki $jinki): self
    {
        $this->jinki = $jinki;
        return $this;
    }
}
?>