<?php
require_once dirname(__DIR__) . '/models/ModeloProducto.php';

class ControladorProducto {
    private $modeloProducto;

    public function __construct() {
        $this->modeloProducto = new ModeloProducto();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index() {
        $productos = $this->modeloProducto->obtenerProductosDestacados(8);

        $ruta_base_vistas = dirname(__DIR__) . '/views/';
        $view = "home.php";
        require_once $ruta_base_vistas . 'inicio.php';
    }
}
?>