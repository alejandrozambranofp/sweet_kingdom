<?php

require_once 'app/models/Usuario.php';

class Auth {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function mostrarLogin() {
        require_once 'app/views/login.php';
    }

    public function login() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            $usuarioModel = new Usuario($this->db);
            
            $usuario = $usuarioModel->autenticar($email, $password);

            if ($usuario) {
                $_SESSION['usuario_logueado'] = $usuario;
                
                header("Location: /paginaWeb_projecte_ZambranoAlejandro/index.php");
                exit();
            } else {
                $_SESSION['error_login'] = "Correo o contraseña incorrectos.";
                header("Location: /paginaWeb_projecte_ZambranoAlejandro/index.php?controlador=Auth&accion=mostrarLogin");
                exit();
            }
        } else {
            header("Location: /paginaWeb_projecte_ZambranoAlejandro/index.php?controlador=Auth&accion=mostrarLogin");
            exit();
        }
    }

    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        session_unset();
        
        session_destroy();
        
        header("Location: /paginaWeb_projecte_ZambranoAlejandro/index.php");
        exit();
    }
}