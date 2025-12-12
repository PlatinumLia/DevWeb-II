<?php
use App\Controller\DemonController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

use Slim\Exception\HttpNotFoundException;

require_once(__DIR__ . "/vendor/autoload.php");

$app = AppFactory::create();
$app->setBasePath("/Avaliação-SLIM_API"); //nome da pasta do projeto. Usado para criar o caminho base

//parse json, form data and xml
$app->addBodyParsingMiddleware(); 
//$app->addRoutingMiddleware(); //Serve para adicionar tratamentos padrões para erros retornados pelos ENDPoints
$app->addErrorMiddleware(true, true, true); //Retorna um erro do Framework caso não tratado

//rotas:
/* $app->get('/', function (Request $resquest, Response $response, array $args) {
        $response->getBody()->write("teste");
        return $response;
    } 
); //rota de teste para  ver se o Slim API está funcionando
*/

$app->get('/demons', DemonController::class . ":listar");
$app->post('/demons', DemonController::class . ":inserir");
$app->delete('/demons/{id}', DemonController::class . ":excluir");

/* TO DO:
    Em outro momento: 
        criar a rota de alterar; 
        Alterar o Mapper para enviar JSON como matriz para criar o Objeto;    
*/

//trantando rotas não encontradas
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    throw new HttpNotFoundException($request);
});

$app->run();
?>