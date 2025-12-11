<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Dao\DemonDao;
use App\Mapper\DemonMapper;
use App\Service\DemonService;
use App\Util\MensagemErro;

use \PDOException;

class DemonController{
    private DemonDao $demonDao;
    private DemonMapper $demonMapper;
    private DemonService $demonService;

    public function __construct(){
        $this->demonDao = new DemonDao();
        $this->demonMapper = new DemonMapper();
        $this->demonService = new DemonService();
    }

    //métodos
    //listar:
    public function listar(Request $resquest, Response $response, array $args): Response{
        $demons = $this->demonDao->list();

        $json = json_encode($demons, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        $response->getBody()->write($json);
        
        return $response
               ->withHeader('Content-Type', 'application/json')
               ->withStatus(200);
    }

    public function buscarPorID(int $id){
        return $this->demonDao->findById($id);
    }

    //inserir
    public function inserir(Request $resquest, Response $response, array $args): Response{


        return $response
				->withHeader('Content-type', 'application/json')
				->withStatus(201); //quando é criado, retorna "201"
    }

    public function editar(Request $resquest, Response $response, array $args): Response{


        return $response
				->withStatus(200);
    }

    public function excluir(Request $resquest, Response $response, array $args): Response{
        return $response
				->withStatus(200);
    }
}
?>