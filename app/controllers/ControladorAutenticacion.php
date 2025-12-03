<?php
require_once dirname(__DIR__) . '/models/ModeloCliente.php';

class ControladorAutenticacion{
    private $modeloCliente;
    private $ruta_base_vistas;

    public function __construct(){
        $this->modeloCliente = new ModeloCliente();
        $this->ruta_base_vistas = dirname(__DIR__) . '/views';
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

    public function mostrarLogin(){
        $view = "login.php";
        require_once $this->ruta_base_vistas . 'inicio.php';
    }

    public function login(){
        if(!isset($_POST['email']) || !isset($_POST['password'])){
            $_SESSION['error_login'] = "Faltan datos de inicio de sesion.";
            header('Location: index.php?controlador=Autenticacion&accion=mostrarLogin');
            exit;
        }
    }
}
?>