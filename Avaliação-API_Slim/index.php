<?php
use App\Controller\DemonController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Resquest;
use Slim\Factory\AppFactory;

use Slim\Exception\HttpNotFoundException;

require_once(__DIR__ . "/vendor/autoload.php");

$app = AppFactory::create();
$app->setBasePath("/Avaliação-API_Slim"); //nome da pasta do projeto. Usado para criar o caminho base

//parse json, form data and xml
$app->addBodyParsingMiddleware(); 
//$app->addRoutingMiddleware(); //Serve para adicionar tratamentos padrões para erros retornados pelos ENDPoints
$app->addErrorMiddleware(true, true, true); //Retorna um erro do Framework caso não tratado

//rotas:
$app->get('/demons', DemonController::class . ":listar");

//trantando rotas não encontradas
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});

$app->run();
?>
