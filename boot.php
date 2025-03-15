<?php
session_start();

function pdo(){
    static $pdo;
    $config = array(
      'db_name' => 'c96598f9_fiksiki',
      'db_host' => 'localhost',
      'db_user' => 'c96598f9_fiksiki',
      'db_pass' => 'g7GEr%%L',
    );    

    if (!$pdo) {
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}