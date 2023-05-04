<?php 
namespace App\Usuarios;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class Usuario {
    public function inicio (Request $request, Response $response) {
        $response->getBody()->write('API EN SLIM 4');
        return $response;
    }

    
}
?>