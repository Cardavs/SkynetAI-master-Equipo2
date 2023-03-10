<?php
    require_once('conectar.php');
    //recibiendo datos

    $correo = $_POST['Correo'];
    $contra = $_POST['txtPassword'];

    if ($stmt = $connection->prepare('SELECT * FROM usuario WHERE Usuario=?')) {
        $stmt->bind_param("s",$correo);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
            $stmt->free_result();
            if ($sql = $connection->prepare("INSERT INTO usuario (Usuario, Contra) VALUES (?,?)")) {
        
                $sql->bind_param("ss",$correo,$contra);
        
                $sql->execute();
                header('Location: /SkynetAI-master-Equipo2/login.html ');
                exit;
            }
            
        }else {
            //si hay un usuario con el mismo rfc o correo
            echo '<script language="javascript">alert("El Correo proporcionados ya estan en uso ");</script>';
            header('Location: /SkynetAI-master-Equipo2/sign.html ');
                exit;
        }
        //Si falla la conexion de la consulta
    }

?>

