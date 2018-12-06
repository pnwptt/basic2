<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=btdb01;dbname=hr',
    'username' => 'client',
    'password' => 'inmylife7',
    'charset' => 'utf8',
    'schemaMap' => [
    	'pgsql'=> [
    		'class'=>'yii\db\pgsql\Schema',
    			'defaultSchema' =>'public'
    		]
    		],
];