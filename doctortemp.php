<?php
session_start();
include("connection.php");

        if(isset($_POST['log_submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $mysqli=mysqli_query($connection, "SELECT * FROM doctor WHERE User_Name='$username' AND Password='$password' ") ;
        
        $row=mysqli_fetch_assoc($mysqli);
        if(!empty($row)){
            
            $_SESSION['d_id']=$row['D_Id'];
           

            header("location:doctor.php?err=loginsuccessfuly");
            

            
        }
        
        else {
            header("location:doctorlog.php?err=checkusernameorpassword");
        }
    
    }
    
        ?>