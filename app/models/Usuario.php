<?php

class Usuario {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function autenticar($email, $password) {
        $sql = "SELECT id, email, password, nombre, rol FROM usuarios WHERE email = :email";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            
            $usuario = $stmt->fetch();

            if ($usuario) {
                if (password_verify($password, $usuario['password'])) {
                    unset($usuario['password']); 
                    return $usuario;
                }
            }
            
            return false; 

        } catch (PDOException $e) {
            error_log("Error en autenticación: " . $e->getMessage());
            return false;
        }
    }
}