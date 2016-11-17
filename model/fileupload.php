<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $plastico = htmlspecialchars($_POST["idalumno"]);
    $metal = htmlspecialchars($_POST["idt"]);
    $nac = htmlspecialchars($_POST["nac"]);
    $arch = $_FILES['userfile']['name'];
    $mnria = htmlspecialchars($_POST["nmria"]);
    
    $uploaddir = '../trabajos/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    
    $sql2 = 'SELECT idmateria FROM `materia` WHERE nombre ="'.$mnria.'";';
        $result = mysqli_query($db,$sql2);
        $row = mysqli_fetch_array($result);
   
        $id=$row['idmateria'];

    $sql = 'INSERT INTO `califiacion`(`idcalificacion`, `idalumno`, `idmateria`, `idtrabajo`, `califiacion`, `archivo`, `fecha`)
            VALUES ( "", "'.$plastico.'",  "'.$id.'", "'.$metal.'", "P" , "'.$arch.'", "'.$nac.'" )';
    print_r($_FILES);
    print_r($_POST);
    
    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        $try = mysqli_query($db,$sql);
        if($try === true) echo "<script>alert('Archivo subido exitosamente'); location.href='../view/dashboardalumno.php';</script>";
    } else {
        # echo "<script>alert('Error al subir archivo, intenta de nuevo'); location.href='../view/dashboardalumno.php';</script>";
        
    }
    
}

?>