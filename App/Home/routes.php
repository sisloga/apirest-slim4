<?php
    require __DIR__ . '/home_controller.php';
    $app->get('/', \App\Home\HomeController::class.':inicio')->setName('');
    $app->get('/testdb', \App\Home\HomeController::class.':testdb')->setName('testdb');
?>