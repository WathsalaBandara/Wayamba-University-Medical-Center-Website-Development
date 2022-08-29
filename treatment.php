<?php
include("connection.php");


/*
if(isset($_POST['submit'])){

    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];



    $mysqli->query("INSERT INTO register (firstname,lastname,email,password) VALUES('$firstname','$lastname','$email','$password')") or
    die($mysqli->error);
}

*/
if(isset($_POST['submit'])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $indexno=$_POST['Indexno'];
    $contact=$_POST['Contact'];
    $level=$_POST['level'];
    $faculty=$_POST['Faculty'];
    $gender=$_POST['gender'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $comment=$_POST['Comment'];

   // $mysqli->query("INSERT INTO online_treatments (Name,Index_No,Email,Gender,Contact,Faculty,Level) VALUE ('$name','$indexno','$email','$gender','$contact','$faculty','$level')") or
    //die($mysqli->error);


    $query="INSERT INTO online_treatments (Name,Index_No,Email,Gender,Contact,Faculty,Level,Date,Time,Comment) VALUES('$name','$indexno','$email','$gender','$contact','$faculty','$level','$date','$time','$comment')";
    $result=mysqli_query($connection, $query);
}

















?>