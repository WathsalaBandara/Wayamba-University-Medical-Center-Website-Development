<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    
    $status=$_POST['status'];
    $comment=$_POST['comment'];
    $D_id=$_SESSION['d_id'];
    $T_id=$_GET['T_id'];   

    $query="INSERT INTO `appoinment_check` (`D_Id`,`T_Id`,`Status`,`Comments`) VALUES ('$D_id', '$T_id','$status','$comment')";

    $result=mysqli_query($connection, $query);
    
}


?>