<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $id = htmlspecialchars($_POST["idt"]);
    $metal = htmlspecialchars($_POST["calif"]);
    $nac = htmlspecialchars($_POST["com"]);
    
    $sql = 'UPDATE `califiacion`
            SET `califiacion` =  "'.$metal.'"
            WHERE idtrabajo = '.$id.';';
    $try = mysqli_query($db,$sql);
    #echo $sql;
    #echo mysqli_error($db);
    if($try === true) echo "<script>alert('Trabajo evaluado exitosamente'); location.href='../view/dashboardprofesor.php';</script>";
    else echo "<script>alert('Error al evaluar archivo, intenta de nuevo'); location.href='../view/dashboardprofesor.php';</script>";
    
}

?>