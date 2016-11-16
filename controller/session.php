<?php
   include('../model/dbconnect.php');
   session_start();
   //check that a user is logged in. Therefore send it to another place. 
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id, name, surname  from User where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['name'];
   $surname=$row['surname'];
   $id=$row['id'];
  

   if(!isset($_SESSION['login_user'])){
      header("location:../index.php");
   }

   
?>