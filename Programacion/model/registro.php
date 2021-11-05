<?php
include_once("conexion.php");

class Registro extends Conexion
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

    public static function Registro_Alumno()
    {
        $imagen = '';
        $ci = $_POST['ciAlumno'];
        $p_nom = $_POST['p_nomAlumno'];
        $s_nom = $_POST['s_nomAlumno'];
        $p_ape = $_POST['p_apeAlumno'];
        $s_ape = $_POST['s_apeAlumno'];
        $apodo = $_POST['apodoAlumno'];
        $grupo = $_POST['grupoAlumno'];
        $pass = $_POST['passAlumno'];
        $verifPass = $_POST['verif_passAlumno'];
        if (isset($_FILES["fotoAlumno"])) {
            $foto = $_FILES["fotoAlumno"];
            $nomfoto = $foto["name"];
            $tipo = $foto["type"];
            $ruta_prov = $foto["tmp_name"];
            $ruta = "../images/";
            if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
                echo '<script>
                alert("El archivo ingresado no es una imagen");
                window.history.go(-1);
                </script>';
            } else {
                $directorio = $ruta . $nomfoto;
                move_uploaded_file($ruta_prov, $directorio);
                $imagen = "../images/" . $nomfoto;
            }
        }
        if (strlen($ci) != 8) {
            echo '<script>
            alert("Cedula no valida");
            window.history.go(-1);
            </script>';
            exit;
        }
        if ($pass != $verifPass) {
            echo '<script>
                alert("La contraseñas no coinciden");
                window.history.go(-1);
                </script>';
            exit;
        }
        $con = new Conexion();
        $cons = "SELECT * FROM usuario WHERE ci = '$ci'";
        $idGr = "SELECT id_gr FROM grupo WHERE nom_gr='$grupo'";
        $resultado1 = $con->query($cons);
        $verificar = $resultado1->fetch();
        if ($verificar > 0) {
            echo '<script>
            alert("La cedula ingresada ya está registrada");
            window.history.go(-1);
            </script>';
            exit;
        }
        $insertar = "INSERT INTO usuario(ci, p_nom, s_nom, p_ape, s_ape, pass) VALUES ('$ci','$p_nom','$s_nom','$p_ape','$s_ape','$pass');
                    INSERT INTO alumno_ingresa_grupo(ci, id_gr) VALUES ('$ci','$idGr');
                    INSERT INTO alumno(ci,apodo,foto) VALUES ('$ci','$apodo','$imagen')";
        $resultado = $con->query($insertar);
        if (!$resultado) {
            echo 'error al registrarse';
        } else {
            header("location: ../view/alumno.php");
        }
    }

    public static function Registro_Docente()
    {
        $imagen = '';
        $ci = $_POST['ciDocente'];
        $p_nom = $_POST['p_nomDocente'];
        $s_nom = $_POST['s_nomDocente'];
        $p_ape = $_POST['p_apeDocente'];
        $s_ape = $_POST['s_apeDocente'];
        $grupo = $_POST['grupoDocente'];
        $pass = $_POST['passDocente'];
        $verifPass = $_POST['verif_passDocente'];
        if (isset($_FILES["fotoDocente"])) {
            $foto = $_FILES["fotoDocente"];
            $nomfoto = $foto["name"];
            $tipo = $foto["type"];
            $ruta_prov = $foto["tmp_name"];
            $ruta = "../images/";
            if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
                echo '<script>
                alert("El archivo ingresado no es una imagen");
                window.history.go(-1);
                </script>';
            } else {
                $directorio = $ruta . $nomfoto;
                move_uploaded_file($ruta_prov, $directorio);
                $imagen = "../images/" . $nomfoto;
            }
        }
        if (strlen($ci) != 8) {
            echo '<script>
            alert("Cedula no valida");
            window.history.go(-1);
            </script>';
            exit;
        }
        if ($pass != $verifPass) {
            echo '<script>
                alert("La contraseñas no coinciden");
                window.history.go(-1);
                </script>';
            exit;
        }
        $con = new Conexion();
        $cons = "SELECT * FROM usuario WHERE ci = '$ci'";
        $resultado1 = $con->query($cons);
        $verificar = $resultado1->fetch();
        if ($verificar > 0) {
            echo '<script>
            alert("La cedula ingresada ya está registrada");
            window.history.go(-1);
            </script>';
            exit;
        }
        $insertar = "INSERT INTO usuario(ci, p_nom, s_nom, p_ape, s_ape, pass, foto) VALUES ('$ci','$p_nom','$s_nom','$p_ape','$s_ape','$pass','$imagen')";
        $resultado = $con->query($insertar);
        if (!$resultado) {
            echo 'error al registrarse';
        } else {
            header("location: ../view/docente.php");
        }
    }
}
