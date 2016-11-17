<?php
   include("../model/dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form in post method
        
      $myusername = mysqli_real_escape_string($db,$_POST['id']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
       $_SESSION['user'] = $myusername;

      $sql = "SELECT idalumno FROM alumno WHERE idalumno = '$myusername' and contrasena = '$mypassword'";
      
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $alumno = mysqli_num_rows($result);
       
      $sql = "SELECT idprofesor FROM profesor WHERE idprofesor = '$myusername' and contrasena = '$mypassword'";
      
      $result2 = mysqli_query($db,$sql);
      $row2 = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active2 = $row2['active'];
      $profesor = mysqli_num_rows($result2);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($alumno == 1) {
			
        // session_register("myusername");
         	echo "2   ";
         $_SESSION['login_user'] = $myusername;
         $_SESSION['pid']=$row['idalumno'];

         
         	echo "\n3";
         header("location: ../view/dashboardalumno.php");
      }elseif ($profesor == 1) {
          // session_register("myusername");
         	echo "2   ";
         $_SESSION['login_user'] = $myusername;
         $_SESSION['pid']=$row2['idprofesor'];

         
         	echo "\n3";
                    
         header("location: ../view/dashboardprofesor.php");
                  
      }else{

         echo "<script>alert('Your password or username is incorrect!'); location.href='../index.php';</script>";
	          $error = "Your Login Name or Password is invalid";
      
      }
   }

?>