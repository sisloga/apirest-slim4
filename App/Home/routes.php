<?php
    require __DIR__ . '/home_controller.php';
    $app->get('/', \App\Usuarios\HomeControlller::class.':inicio')->setName('home');
?>