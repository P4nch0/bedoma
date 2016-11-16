<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $plastico = htmlspecialchars($_POST["plastico"]);
    $metal = htmlspecialchars($_POST["metal"]);
    $nac = htmlspecialchars($_POST["nac"]);
    $arch = $_FILES['userfile']['name'];
    
    $uploaddir = '../trabajos/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    $sql = 'INSERT INTO `trabajo`(`ID`, `IDALUMNO`, `IDMATERIA`, `ARCHIVO`, `EVALUADO`, `FECHA`, `FECHAENTREGA`, `COMENTRARIOS`, `CALIFICACION`)
            VALUES ( "", "'.$plastico.'",  "'.$metal.'", "'.$arch.'", "", "'.$nac.'", "", "", "PENDIENTE" )';
    
    
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        $try = mysqli_query($db,$sql);
        if($try === true) echo "<script>alert('Archivo subido exitosamente'); location.href='../view/dashboardalumno.php';</script>";
    } else {
        echo "<script>alert('Error al subir archivo, intenta de nuevo'); location.href='../view/entrega.php';</script>";
    }
    
}

?>