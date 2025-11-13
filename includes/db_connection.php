<?php
/**
 * Archivo: db_connection.php
 * Propósito: Establecer la conexión a la base de datos 'sweet_kingdom' usando PDO.
 * -------------------------------------------------------------------------
 * NOTA IMPORTANTE: 
 * Para que este código funcione, DEBES tener el servidor Apache y MySQL
 * de tu XAMPP/WAMP/MAMP encendidos.
 * -------------------------------------------------------------------------
 */

// 1. CREDENCIALES DE LA BASE DE DATOS LOCAL
$servername = "localhost"; // Servidor local
$username = "root";       // Usuario por defecto de XAMPP/WAMP
$password = "";           // Contraseña por defecto (vacía) de XAMPP/WAMP
$dbname = "sweet_kingdom"; // El nombre de la base de datos

// 2. ESTABLECER LA CONEXIÓN (Manejo de Errores con try-catch)
try {
    // Cadena de conexión (DSN)
    $dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";
    
    // Crear la instancia de PDO (conexión)
    $conn = new PDO($dsn, $username, $password);
    
    // Configurar el modo de error de PDO a excepción
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opcional: Si quieres un mensaje en consola si hay errores de sintaxis en SQL
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
    // Si la conexión falla, detiene el script y muestra un mensaje de error detallado
    die("Error de Conexión a la Base de Datos: " . $e->getMessage());
}

// La variable $conn contiene la conexión a la base de datos.
// Este archivo se debe incluir en cualquier otro archivo PHP que necesite datos.
?>