<?php

session_start();

include 'db_connection.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Kingdom | Postres Temáticos</title>
    
    <link rel="stylesheet" href="/paginaWeb_projecte_ZambranoAlejandro/css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <header class="main-header">
        <div class="logo-container">
            <a href="index.php">
                <img src="/paginaWeb_projecte_ZambranoAlejandro/assets/imagenes/logo_header.png" alt="Sweet Kingdom Logo" class="logo">
            </a>
        </div>

        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="products.php">Productos</a></li>
                <li><a href="#">Temas</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <a href="#">👤</a> 
            <a href="cart.php" class="cart-icon">🛒</a>
            </div>
    </header>