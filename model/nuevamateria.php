<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $nombre = htmlspecialchars($_POST["nombre"]);
    $ap = htmlspecialchars($_POST["idp"]);
    $grupo = htmlspecialchars($_POST["grupo"]);
    

    $sql = 'INSERT INTO `materia`(`idmateria`, `nombre`, `idprofesor`) 
            VALUES ( "",  "'.$nombre.' Grupo ('.$grupo.')" , "'.$ap.'")';
    
    $try = mysqli_query($db,$sql);
    
    if($try === true) echo "<script>alert('Profesor creado exitosamente'); location.href='../view/dashboardprofesor.php';</script>";
    else echo "<script>alert('Error al registrar, intenta de nuevo'); location.href='../view/materia.php';</script>";
    
}

?>