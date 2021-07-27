<?php

return [
    'db_sqlsrv' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'sqlsrv:Server=192.168.252.250;Database=RS_AASimrs',
        'username' => 'sa',
        'password' => 'data_123',
        'charset' => 'utf8',
        'tablePrefix' => 'dbo.',
    ],
];
