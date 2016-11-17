<?php
include('dbconnect.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $id = htmlspecialchars($_POST["idt"]);
    $metal = htmlspecialchars($_POST["calif"]);
    $nac = htmlspecialchars($_POST["com"]);
    $al = htmlspecialchars($_POST["ida"]);
    
    if($metal === "E") {
        $nac = $nac . ". Excelente trabajo, sigue asi.";
    } elseif ($metal === "M") {
        
        $nac = $nac . ". El trabajo cumple lo esperado. Para alcanzar la excelencia debes cumplir lo siguiente:";
        
        $sql2 = 'SELECT descripcion FROM `e` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - E:" . $row[0];
        }
        
    } elseif ($metal === "R") {
        
        $nac = $nac . ". Trabajo regular. Para mejorar debes cumplir los siguientes niveles:";
        
        $sql2 = 'SELECT descripcion FROM `e` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - E:" . $row[0];
        }
        
        $sql2 = 'SELECT descripcion FROM `m` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - M:" . $row[0];
        }
        
    } elseif ($metal === "F") {
        $nac = $nac . ". Trabajo muy deficiente. Para mejorar debes cumplir los siguientes niveles:";
        
        $sql2 = 'SELECT descripcion FROM `e` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - E:" . $row[0];
        }
        
        $sql2 = 'SELECT descripcion FROM `m` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - M:" . $row[0];
        }
        
        $sql2 = 'SELECT descripcion FROM `r` WHERE idtrabajo ="'.$id.'";';
        $result = mysqli_query($db,$sql2);

        while ($row = mysqli_fetch_array($result)) {
            if ($row[0] !== "") $nac = $nac . " - R:" . $row[0];
        }
        
    }
    
    
    $sql = 'UPDATE `califiacion`
            SET `califiacion` =  "'.$metal.'", `retro` = "'.$nac.'"
            WHERE idtrabajo = '.$id.' AND idalumno = "'.$al.'";';
    $try = mysqli_query($db,$sql);
    #echo $sql;
    #echo mysqli_error($db);
    if($try === true) echo "<script>alert('Trabajo evaluado exitosamente'); location.href='../view/dashboardprofesor.php';</script>";
    else echo "<script>alert('Error al evaluar archivo, intenta de nuevo'); location.href='../view/dashboardprofesor.php';</script>";
    
}

?>