<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $id = htmlspecialchars($_POST["idt"]);
    $metal = htmlspecialchars($_POST["calif"]);
    $nac = htmlspecialchars($_POST["com"]);


    $sql = 'UPDATE `trabajo`
            SET `EVALUADO` = 1, `COMENTRARIOS` = "'.$nac.'", `CALIFICACION` = "'.$metal.'"
            WHERE ID = '.$id.';';
    $try = mysqli_query($db,$sql);
    
    if($try === true) echo "<script>alert('Trabajo evaluado exitosamente'); location.href='../view/dashboardprofesor.php';</script>";
    else echo "<script>alert('Error al evaluar archivo, intenta de nuevo'); location.href='../view/dashboardprofesor.php';</script>";
    
}

?>