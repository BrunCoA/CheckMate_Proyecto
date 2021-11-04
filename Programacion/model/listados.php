<?php
include_once("conexion.php");

class Listados_Model extends Conexion
{
    private $cedula;
    
    private $conexion;
    
    public function getCedula()
    {
        return $this->ci;
    }

    public function setCedula($cedula)
    {
        $this->ci = $cedula;
    }
 

    public function __construct()
    {
        $this->conexion = new Conexion();
    }

    public static function Listar_Alumno()
    {
        $resultado = null;
        try {
            $con = new Conexion();
            $consulta = "SELECT usuario.ci, p_nom, s_nom, 
            p_ape, s_ape, pass FROM usuario, alumno WHERE usuario.ci=alumno.ci";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $resultado;
    }
    
    public static function Listar_Asignatura()
    {
        $resultado = null;
        try {
            $con = new Conexion();
            $consulta = "SELECT id_asig, nom_asig FROM asignatura";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $resultado;
    }
    
    public static function Listar_Docente()
    {
        $resultado = null;
        try {
            $con = new Conexion();
            $consulta = "SELECT usuario.ci, p_nom, s_nom, 
            p_ape, s_ape, pass FROM usuario, docente WHERE usuario.ci=docente.ci";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $resultado;
    }
    
    public static function Listar_Grupo()
    {
        $resultado = null;
        try {
            $con = new Conexion();
            $consulta = "SELECT id_gr, nom_gr FROM grupo";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return $resultado;
    }
    
    public static function Listar_Orientacion()
    {
        $resultado = null;
        try {
            $con = new Conexion();
            $consulta = "SELECT id_or, nom_or FROM orientacion";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $resultado;
    }

    public static function Listar_Por_Cedula($cedula)
    {
        $resultado = null;
        try {

            $con = new Conexion();
            $consulta = "SELECT * FROM usuario WHERE ci = '$cedula'";
            $resultado = $con->query($consulta)->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $resultado;
    }

    public static function Agregar_Usuario_Static($cedula, $n1, $n2, $a1, $a2, $pass)
    {

        $con = new Conexion();
        $sql = "INSERT INTO usuario (
            ci, 
            p_nom, 
            s_nom, 
            p_ape, 
            s_ape, 
            pass) VALUES (?,?,?,?,?,?)";
        $insert = $con->prepare($sql);
        $arrData = array($cedula, $n1, $n2, $a1, $a2, $pass);
        $insert->execute($arrData);
        $idInsert = $con->lastInsertId();
        return $idInsert;
    }

    public static function Modificar_Usuario_Static($cedula, $n1, $n2, $a1, $a2, $pass)
    {
        $con = new Conexion();
        $sql = "UPDATE persona SET 
            ci = :cedula,
            p_nom = :n1, 
            s_nom = :n2, 
            p_ape = :a1, 
            s_ape = :a2, 
            pass = :pass
            WHERE ci = :ci";

        $update = $con->prepare($sql);

        $update->bindParam(':cedula', $cedula, PDO::PARAM_INT);
        $update->bindParam(':n1', $n1, PDO::PARAM_STR, 64);
        $update->bindParam(':n2', $n2, PDO::PARAM_STR, 64);
        $update->bindParam(':a1', $a1, PDO::PARAM_STR, 64);
        $update->bindParam(':a2', $a2, PDO::PARAM_STR, 64);
        $update->bindParam(':pass', $pass, PDO::PARAM_STR, 64);

        return $update->execute();
    }

    public static function Eliminar_Usuario_Static($cedula)
    {
        $con = new Conexion();
        $sql = "DELETE FROM `usuario` WHERE `ci`= :ci";
        $update = $con->prepare($sql);
        $update->bindParam(':ci', $cedula, PDO::PARAM_INT);
        $respuesta = false;
        if ($update->execute())
            $respuesta = true;
        return $respuesta;
    }
}
