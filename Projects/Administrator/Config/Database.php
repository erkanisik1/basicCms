<?php return
[
   

    'migration' =>
    [
        'table' => 'migrations'
    ],

  
    'database' =>
    [
         'driver'      => 'pdo',
        'host'        => 'localhost',
        'database'    => 'basicCMS',
        'user'        => 'root',
        'password'    => '12345678',
        'dsn'         => '',
        'server'      => '',
        'port'        => '',
        'cacheDriver' => 'file',
        'queryLog'    => false,
        'pconnect'    => false,
        'encode'      => false,
        'prefix'      => '',
        'charset'     => 'utf8',
        'collation'   => 'utf8_general_ci',
        'differentConnection' => []
    ],

  
    'mongodb' =>
    [
        'database' => 'test',
        'dns'      => 'localhost',
        'options'  => []
    ]
];