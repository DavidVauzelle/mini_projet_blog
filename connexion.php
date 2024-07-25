<?php
// Paramètre de connexion en local
$dbname = 'mini_projet_blog';
$host = '127.0.0.1';
// $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
$user = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Paramètre de connexion en ligne
// $dbname = 'vauzelle-david_blog_series';
// $host = 'mysql-vauzelle-david.alwaysdata.net';
// // $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
// $user = '370443';
// $password = 'HpZi34E6JsKeHp@';
// $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// $dbh = new PDO($dsn, $user, $password, $options);

// Version avec des variables pour pouvoir gérer les paramètres de connexion dynamiquement
$bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $options);