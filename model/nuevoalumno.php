<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $nombre = htmlspecialchars($_POST["nombre"]);
    $ap = htmlspecialchars($_POST["ap"]);
    $id = htmlspecialchars($_POST["id"]);
    $pwd = htmlspecialchars($_POST["password"]);
    

    $sql = 'INSERT INTO `alumno`(`idalumno`, `nombre`, `apellido`, `contrasena`) 
            VALUES ( "'.$id.'",  "'.$nombre.'", "'.$ap.'", "'.$pwd.'" )';
    
    $try = mysqli_query($db,$sql);
    
    if($try === true) echo "<script>alert('Alumno creado exitosamente'); location.href='../index.php';</script>";
    else echo "<script>alert('Error al registrar, intenta de nuevo'); location.href='../index.php';</script>";
    
}

?>