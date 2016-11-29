<?php
include('dbconnect.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    //define variables with POST values
    $nombre = htmlspecialchars($_POST["nombre"]);
    $ap = htmlspecialchars($_POST["idm"]);
    $desc = htmlspecialchars($_POST["desc"]);
    
    $e1 = htmlspecialchars($_POST["e1"]);
    $e2 = htmlspecialchars($_POST["e2"]);
    $e3 = htmlspecialchars($_POST["e3"]);
    
    $m1 = htmlspecialchars($_POST["m1"]);
    $m2 = htmlspecialchars($_POST["m2"]);
    $m3 = htmlspecialchars($_POST["m3"]);
    
    $r1 = htmlspecialchars($_POST["r1"]);
    $r2 = htmlspecialchars($_POST["r2"]);
    $r3 = htmlspecialchars($_POST["r3"]);
    
    $f1 = htmlspecialchars($_POST["f1"]);
    $f2 = htmlspecialchars($_POST["f2"]);
    $f3 = htmlspecialchars($_POST["f3"]);
    

    $sql = 'INSERT INTO `trabajo`(`idtrabajo`, `nombre`, `descripcion`, `idmateria`) 
            VALUES ( "",  "'.$nombre.'", "'.$desc.'", "'.$ap.'")';
    
    $try = mysqli_query($db,$sql);
    
    if($try === true) {
        $sql2 = 'SELECT idtrabajo FROM `trabajo` WHERE nombre ="'.$nombre.'" AND idmateria ="'.$ap.'" ;';
        $result = mysqli_query($db,$sql2);
        $row = mysqli_fetch_array($result);
   
        $id=$row['idtrabajo'];
        
        $sqle = 'INSERT INTO `e`(`idE`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$e1.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        $sqle = 'INSERT INTO `e`(`idE`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$e2.'", "'.$id.'");';
        mysqli_query($db,$sqle);   
        $sqle = 'INSERT INTO `e`(`idE`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$e3.'", "'.$id.'");';
        mysqli_query($db,$sqle);

        
        $sqle = 'INSERT INTO `m`(`idM`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$m1.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        $sqle = 'INSERT INTO `m`(`idM`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$m2.'", "'.$id.'");';
        mysqli_query($db,$sqle);   
        $sqle = 'INSERT INTO `m`(`idM`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$m3.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        
        $sqle = 'INSERT INTO `r`(`idR`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$r1.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        $sqle = 'INSERT INTO `r`(`idR`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$r2.'", "'.$id.'");';
        mysqli_query($db,$sqle);   
        $sqle = 'INSERT INTO `r`(`idR`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$r3.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        
        $sqle = 'INSERT INTO `f`(`idF`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$f1.'", "'.$id.'");';
        mysqli_query($db,$sqle);
        $sqle = 'INSERT INTO `f`(`idF`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$f2.'", "'.$id.'");';
        mysqli_query($db,$sqle);   
        $sqle = 'INSERT INTO `f`(`idF`, `descripcion`, `idtrabajo`) 
            VALUES ( "", "'.$f3.'", "'.$id.'");';
        mysqli_query($db,$sqle);

    }
    
    if($try === true) echo "<script>alert('Trabajo creado exitosamente'); location.href='../view/dashboardprofesor.php';</script>";
    else echo "<script>alert('Error al agregar, intenta de nuevo'); location.href='../view/trabajo.php';</script>";
    
}

?>