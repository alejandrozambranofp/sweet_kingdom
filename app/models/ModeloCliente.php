<?php
require_once 'BaseDeDatos.php';

class ModeloCliente{
    private $db;
    public function __construct(){
        $this->db = BaseDeDatos::obtenerConexion();
    }
    public function obtenerClientePorEmail($email){
        try{
            $sql = "SELECT id_cliente, nombre, email, password FROM cliente WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email',$email, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt-> fetch(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            error_log("Error al buscar cliente: " . $e->getMessage());
            return null;
        }
    }
}
?>