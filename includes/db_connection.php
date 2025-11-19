<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sweet_kingdom";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
    
    $conn = new PDO($dsn, $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
    die("Error de Conexión a la Base de Datos: " . $e->getMessage());
}

?>