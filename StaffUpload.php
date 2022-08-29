<?php 
// Include the database configuration file  
include("connection.php");
 

if (isset($_POST["submit"])){
    $file=$_POST['image'];
    
    
     #retrieve file title
    $title = $_POST["news"];
     
    $pname = rand(1000,10000)."-".$_FILES["image"]["name"];
    $tname = $_FILES["image"]["tmp_name"];
    $uploads_dir ='news';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    #sql query to insert into database
    $sql = "INSERT INTO medical_news(News,images,Date) VALUES('$title','$pname',NOW())" ;
    
    if(mysqli_query($connection,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }

}




?>