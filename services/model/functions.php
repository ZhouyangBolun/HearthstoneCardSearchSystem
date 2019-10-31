<?php

define('DB_DATABASE', 'teamGdb');
define('DB_USERNAME', 'teamGdbuser');
define('DB_PASSWORD', 'teamGdbuser');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

function getPDO()
{
    static $pdo;
    if (!isset($pdo)) {
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        $pdo->setattribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $pdo->setattribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    return $pdo;
}

function cook($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

