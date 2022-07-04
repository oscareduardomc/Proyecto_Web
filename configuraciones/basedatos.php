<?php

class BaseDatos {
    private $host;
    private $db;
    private $usuario;
    private $contrasena;
    private $caracteres;

    public function __construct(){
        $this->host= 'desofiw.xyz';
        $this->db= 'sigresdesarrollo';
        $this->usuario= 'autenticacion';
        $this->contrasena= 'Autenticacion1@';
        $this->caracteres= 'utf8';
    }
    function conectar(){
        try {
            $conexion = "mysql:host=" . $this->host . ";port=4306;dbname=" . $this->db . "" . ";charset=" . $this->caracteres;
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($conexion, $this->usuario, $this->contrasena, $opciones);
            return $pdo;
        } catch (PDOException $e) {
            print_r('Error de conexion: ' . $e->getMessage());
        }
    }
}

?>