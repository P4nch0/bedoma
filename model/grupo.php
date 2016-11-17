<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $nombre = htmlspecialchars($_POST["ida"]);
    $ap = htmlspecialchars($_POST["idm"]);
    

    $sql = 'INSERT INTO `atiende`(`idatiende`, `idalumno`, `idmateria`) 
            VALUES ( "",  "'.$nombre.'", "'.$ap.'")';
    
    $try = mysqli_query($db,$sql);
    
    if($try === true) echo "<script>alert('Alumno agregado exitosamente'); location.href='../view/materia.php';</script>";
    else echo "<script>alert('Error al agregar, intenta de nuevo'); location.href='../view/materia.php';</script>";
    
}

?>