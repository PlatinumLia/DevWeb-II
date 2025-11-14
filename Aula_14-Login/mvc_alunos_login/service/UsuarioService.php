<?php
#Arquivo com a declaração da classe service para Usuario

class UsuarioService {
    //constantes
    private const SESSION_ID = "sessaoId";
    private const SESSION_NOME = "sessaoNome";

    public function validarDadosLogin(string $login, string $senha) {
        $erros = array();

        //Validar login
        if(! $login){
            array_push($erros, "O campo [Login] é obrigatório.");
        }
        //Validar senha
        if(! $senha){
            array_push($erros, "O campo [Senha] é obrigatório.");
        }
        return $erros;
    }

    public function salvarUsuarioSessao(Usuario $usuario){
        //habilitando os recursos de sessão
        $this->iniciarSessao();

        $_SESSION[UsuarioService::SESSION_ID] = $usuario->getId();
        $_SESSION[UsuarioService::SESSION_NOME] = $usuario->getNome();
    }

    public function removerUsuarioSessao(){
        $this->iniciarSessao(); //habilitando os recursos de session
        session_unset(); //removendo os dados da sessão
        session_destroy(); 
    }

    public function existeUsuarioSessao(): bool{
        $this->iniciarSessao(); //recursos de session habilitados

        if(isset($_SESSION[UsuarioService::SESSION_ID])){
            return true;
        }
        return false; //não há necessidade do "else", pois se existir um login, já retorna true

        /* pode ser feito assim também:
            return isset($_SESSION[UsuarioService::SESSION_ID]);     
        */
    }

    public function getNomeUsuarioLogado(): String{
        if($this->existeUsuarioSessao()){
            return $_SESSION[UsuarioService::SESSION_NOME];
        }
        return "(não logado)";
    }

    //método seguro para iniciar a session
    private function iniciarSessao(){
        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }
}
?>