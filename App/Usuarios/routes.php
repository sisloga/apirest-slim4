<?php
    require __DIR__ . '/usuario.php';
    $app->get('/', \App\Usuarios\Usuario::class.':inicio')->setName('home');
    
?>