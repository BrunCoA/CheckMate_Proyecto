<?php

include_once("../model/conexion.php");

class controller_pdo
{

    public static function ListarPersonas(){
        try {
            $con = new Conexion();
        
            if (!$con) {
                echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
            } else {
                echo "<h3>Conexion Exitosa PHP - MySQL - PDO </h3><hr><br>";
            }
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }

    }
  
}

