<?php
include("connection.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $indexno=$_POST['Indexno'];
    $contact=$_POST['Contact'];
    $level=$_POST['level'];
    $faculty=$_POST['Faculty'];
    $gender=$_POST['gender'];
    $from=$_POST['From'];
    $to=$_POST['To'];
    $reason=$_POST['Reason'];
    $file=$_POST['file'];
    


    $title = $_POST["title"];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $uploads_dir = 'uploads';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $query="INSERT INTO medical_recipt (S_Id,S_Name,Email,Gender,Faculty,Level,Reason,DateFrom,DateTo,Mobile,Attachment,Time) VALUES('$indexno','$name','$email','$gender','$faculty','$level','$reason','$from','$to','$contact','$pname',NOW())";
    $result=mysqli_query($connection, $query);
}


?>