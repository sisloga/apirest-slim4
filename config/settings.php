<?php
$container->set('db_settings',function(){
    return [
        'DB_HOST'=>'localhost',
        'DB_DSN'=>'pgsql',
        'DB_NAME'=>'apilumen',
        'DB_USER'=>'postgres',
        'DB_PASSWORD'=>'loporti',
        'DB_PORT'=>'5432'
    ];
});
?>