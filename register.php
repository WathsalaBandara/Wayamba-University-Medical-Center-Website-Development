<?php
include("connection.php");
include("validation.php");

if(isset($_POST['register_submit'])){

    $fullname=$_POST['fullname'];
    $indexno=$_POST['indexno'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $faculty=$_POST['Faculty'];
    $level=$_POST['Level'];
    $contact=$_POST['Contact'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['ConfirmPassword'];

    //input validation
        if(passNotMatch($password, $confirmpassword)){
            header("location:Studentlog.php?err=different_pass");
        }
        else if(emailAvailable($connection, $email)){
            header("location:Studentlog.php?err=available_email");
        }
        else if(indexAvailable($connection,$indexno)){
            header("location:Studentlog.php?err=available_index");
        }
        else{
            // If all inputs are error free
            registerNewUser($connection, $fullname, $indexno, $email,$gender,$faculty,$level,$contact,$username, $password, $confirmpassword);
        
        }
}
else{
    header("location:Studentlog.php");
    exit();
}



// Function for register a new user
function registerNewUser($connection, $fullname, $indexno, $email,$gender,$faculty,$level,$contact,$username, $password, $confirmpassword ){
    // Password encryption
    $passHashed = password_hash($password, PASSWORD_DEFAULT);
    //$passHashed=md5($password);
    // Query
    //$sql = "INSERT INTO register (fullname,indexno,email,password) VALUES (?, ?, ?, ?);";
    $sql="INSERT INTO student (S_Name,Index_No,Email,Gender,Faculty,Level,Mobile,User_Name,Password) VALUES('$fullname', '$indexno', '$email','$gender','$faculty','$level','$contact','$username','$passHashed')";




    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($connection);
    // Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:Studentlog.php?err=failedstmt");
    }
    else{
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "sssssssss",$fullname,$indexno,$email,$gender,$faculty,$level,$contact,$username,$passHashed);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Close the statement
        mysqli_stmt_close($stmt);

        header("location:Studentlog.php?err=noerrors");
    }
}
?>