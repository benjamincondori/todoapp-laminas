<?php
return [
   'db' => [
       'driver' => 'Pdo_Mysql',
       'dsn' => 'mysql:dbname=todoapp;host=localhost;charset=utf8',
       'driver_options' => [
           PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
       ],
   ],
   'service-manager' => [
       'factories' => [
           'Laminas\Db\Adapter\Adapter' => 'Laminas\Db\Adapter\AdapterServiceFactory'
       ]
   ]
];
