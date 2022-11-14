<?php
include_once "modelos/usuario.php";
class usuarioControlador
{
    public function login(string $usuario, string $password){
        if($this->checkUsuario($usuario)){#verificamos que el usuario existe
            $usuarioBD = $this->traerUsuario($usuario);
            $idBD= 0;
            $passwordBD = "";
            foreach ($usuarioBD as $usuarioBD){
                $idBD = $usuarioBD["id"];
                $passwordBD = $usuarioBD["password"];
                $tipoBD = $tipoBD["id"];
                $passwordBD = $usuarioBD["password"];
            }

            if($password == $passwordBD){#si continua se comprueba que la contraseña tambien es lo correcto
                session_start();
                $_SESSION["id"] = $idBD;
                //$_SESSION["tipo"] = "profesor";
                //header("location: pagina1.php");#redirecionamiento
                echo "la usuario y contraseña son correctos";
            }else{
                echo "el susuario y/o contraseña es incorrecto";
            }
        }
    }

    public function checkUsuario(string $username){
        $usuario = new usuario();
        $usuario->setUsername($username);
        $result = $usuario->usuasrioPorUsername();

        $contador = 0;
        foreach ($result as $user){
            $contador++;
        }

        if($contador>0){
            return true;
        }else{
            return false;
        }
    }

    //ya se que hay usuario y estoy extrayendo al informacion que ya hay
    public function traerUsuario(string $username){
        $usuario = new usuario();
        $usuario->setUsername($username);
        return $usuario->usuasrioPorUsername();


    }

}


include_once "Conn.php";
    try{

    $conn = new Conn();
    $conexion = $conn->conectar();
    $sql1 = "SELECT escuela,profesor,semestre,id_curso,nombres,id_estudiante,codigo,dni
    FROM estudiante as e
    JOIN  matricula as m
    ON e.id=m.id
    join curso as c
    on m.id=c.id";

    $resultado = $conexion->query($sql1);
    $conn->cerrar();
    echo "<table border='1'>
            <tr>
                <th>Nombre de curso</th>
                <th>Escuela</th>
                <th>Docente</th>
                <th>ID de Curso</th>
                <th>Nombre de estudiante</th>
                <th>Codigo de Estudiante</th>
                <th>DNI</th>




            </tr>";    
    foreach ($resultado as $matricula){  

        echo "<tr>
            <td>".$matricula["nombre"]."</td>
            <td>".$matricula["escuela"]."</td>
            <td>".$matricula["profesor"]."</td>
            <td>".$matricula["id_curso"]."</td>
            <td>".$matricula["nombres"]."</td>
            <td>".$matricula["codigo"]."</td>
            <td>".$matricula["dni"]."</td>



        </tr>";
    }
    echo "</table>"; 
   //echo "</pre>";

    }catch(PDOexception $e){
        echo " hubo un error".$e->getMessage();
    }
?>