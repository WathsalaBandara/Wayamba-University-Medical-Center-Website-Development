<?php
include "connection.php";
session_start();

$D_id=$_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical News Upload</title>
    <link rel="stylesheet" href="doctorcheck.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="sample.css?v=<?php echo time(); ?>">
</head>

<body>
<section class="A">
            <nav>
                
            <img src="WUSL_White_Logo.png" style="width:5cm;margin-left: -0.5cm;">
                
                <div class="nav-links" id="navLinks">
                    
                    <ul>
                    <li><br><a href="index.html">Home</a></li>
                    <li><a href="doctor.php">View</a></li>
		            <li><button class="btn"><a href="logout.php">Log out</a></button></li>
                   
                    </ul>
                </div>
                
            
            </nav>
</section>



    <div class="cont">
        <div class="B">
        <h1>Check Appoinments</h1>
        <br>
        </div>
        <br>  
    <form action="doctorchecktb.php?T_id=<?=$_GET['T_id']?>" method="post" enctype="multipart/form-data">
    <label><h3>Status</h3></label>
    <span class="genderArea">
    <input type="radio"  name="status" value="Time is Ok." checked>
    <label>Time is Ok.</label> 
    &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp;

    <input type="radio"  name="status" value="This time is busy.">
   <label>
   This time is busy.
   </label>
    <br>
    <br><br>
    </span>
   
    
    <label><h3>Comments</h3></label>
    <textarea name="comment" class='input-field'rows="4" cols="50"></textarea>
    <br> 

    <button class="submit" name="submit">Submit</button>
</form>
    </div>

</body>
