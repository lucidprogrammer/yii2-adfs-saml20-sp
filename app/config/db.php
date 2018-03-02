<?php

extract(parse_url(getenv("DATABASE_URL")));
$dbname= substr($path, 1);
$dbtype=getenv('DBTYPE') ? getenv('DBTYPE') : 'pgsql';



return [
    'class' => 'yii\db\Connection',
    'dsn' => $dbtype.':host='.$host. ';dbname='.$dbname,
    'username' => $user,
    'password' => $pass,
    'charset' => 'utf8',
];
