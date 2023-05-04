<?php
$container->set('db_settings',function(){
    return [
        'DB_HOST'=>'localhost',
        'DB_DSN'=>'pgsql',
        'DB_NAME'=>'nombre_bd',
        'DB_USER'=>'postgres',
        'DB_PASSWORD'=>'clave_conexion',
        'DB_PORT'=>'5432'
    ];
});
?>