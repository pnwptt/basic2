<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=bnndbms;dbname=MRP',
    'username' => 'postgres',
    'password' => 'inmylife7',
    'charset' => 'utf8',
    'schemaMap' => [
    	'pgsql'=> [
    		'class'=>'yii\db\pgsql\Schema',
    			'defaultSchema' =>'public'
    		]
    		],
];
