<?php
require_once 'BaseDeDatos.php';

class ModeloProducto {
    private $db;

    public function __construct() {
        $this->db = BaseDeDatos::obtenerConexion();
    }

    public function obtenerProductosDestacados($limite = 8) {
        try {
            $sql = "SELECT id_producto, nombre, precio FROM productos WHERE disponible = 1 LIMIT :limite";
            
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':limite', $limite, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            return [];
        }
    }
}
?>