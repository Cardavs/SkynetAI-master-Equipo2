<?php
require_once('conectar.php');
//recibiendo datos

$correo = $_POST['Correo'];
$contra = $_POST['txtPassword'];

if ($stmt = $connection->prepare('SELECT * FROM usuario WHERE Usuario=? AND Contra=?')) {
    $stmt->bind_param("ss",$correo,$contra);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->free_result();
    
            header('Location: /SkynetAI-master-Equipo2/chatbots.html');
            exit;
        
    }else {
        //si hay un usuario con el mismo rfc o correo
        echo '<script language="javascript">alert("Datos Incorrectos");</script>';
        header('Location: /SkynetAI-master-Equipo2/login.html ');
            exit;
    }
    //Si falla la conexion de la consulta
}

?>