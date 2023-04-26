<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
       
         $insert = mysqli_query($conn,"INSERT INTO users
         (username,email,password)   VALUES ('$username' , '$email' , '$password')");
 
         if(!$insert)
         {
             echo "Error";
             header("Location: ../index.php?username=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?username=success");
         }
     
    }
        
?>