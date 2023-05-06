<?php 
namespace App\Home;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Container\ContainerInterface;

class HomeController {
    # Constructor, se define 
    public function __construct(ContainerInterface $container) {
        $this->db = $container->get('db');
    }
    # Ruta de presentación
    public function inicio (Request $request, Response $response) {
        $response->getBody()->write('SISLOGA - PLANTILLA API REST EN SLIM 4');
        return $response;
    }
    #Ejemplo de ruta con conexión y consulta
    public function testdb (Request $request, Response $response) {
        $res = $this->db->select(
            "SELECT * FROM terceros"
        );
        $response->getBody()->write(json_encode($res));
        return $response;
    }

}
?>