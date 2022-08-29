<?php
session_start();
include("connection.php");



        if(isset($_POST['log_submit'])){
        $staffusername=$_POST['staffusername'];
        $staffpassword=$_POST['staffpassword'];

        $mysqli=mysqli_query($connection, "SELECT * FROM staff WHERE User_Name='$staffusername' AND Password='$staffpassword' ") ;
        
        $row=mysqli_fetch_assoc($mysqli);
        if(!empty($row)){
             header("location:Staff.php?err=loginsuccessfuly");
        }
        else {
             header("location:Stafflog.php?err=checkusernameorpassword");
        }
    }

    
        ?>