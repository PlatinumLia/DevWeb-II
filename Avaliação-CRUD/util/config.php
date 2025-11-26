<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "localhost"); //mudar host dependendo de onde se está criando a aplicação web
define("DB_NAME", "demonCompendium");
define("DB_USER", "root");
define("DB_PASSWORD", "bancodedados"); //a senha muda dependendo do dispositivo que você usa para desenvolver a aplicação web 

//configurar a URL do sistema
//define("URL_BASE", "/Lia - 2ºTADS/DevWebII/Avaliação - CRUD");
?>