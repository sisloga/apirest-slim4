<?php 
namespace App\Usuarios;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController {
    public function inicio (Request $request, Response $response) {
        $response->getBody()->write('SISLOGA - PLANTILLA API REST EN SLIM 4');
        return $response;
    }
}
?>