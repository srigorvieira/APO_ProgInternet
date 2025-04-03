<?php
$host = 'localhost';       
$db   = 'GESPRO';        
$user = 'root';           
$pass = '';                

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Conexão bem-sucedida!";
} catch (\PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
