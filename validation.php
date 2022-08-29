<?php
// Check if pass and re_pass aren't similar
function passNotMatch($password, $confirmpassword){
    $value;
    if($password !== $confirmpassword){
        $value = true;
    }
    else{
        $value = false;
    }
    return $value;
}

function inputsInvalid($connection,$username,$password){
    $value;
    // Query
    $sql = "SELECT * FROM student WHERE User_Name ='$username' ;";
    //$sqli="SELECT * FROM register WHERE indexno='$indexno' AND password='$password'" ;

    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($connection);
    // Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:Studentlog.php?err=failedstmt");
        exit();
    }
    else{
        $passHashed = password_hash($password, PASSWORD_DEFAULT);
        $checkpassword=password_verify($password,$passHashed);
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "ss", $username,$checkpassword);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Save results if available
        $data = mysqli_stmt_get_result($stmt);
        // Check if there is at least one result
        if(!mysqli_fetch_assoc($data)){
            $value = false;
        }
        else{
            $value = true;
        }
    }
    // Close the statement
    mysqli_stmt_close($stmt);

    return $value;

}


function indexAvailable($connection,$indexno){
    $value;
    // Query
    $sql = "SELECT * FROM student WHERE Index_No = ? ;";
    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($connection);
    // Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:Studentlog.php?err=failedstmt");
        exit();
    }
    else{
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "s", $indexno);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Save results if available
        //$data = mysqli_stmt_get_result($stmt);
        $data=mysqli_stmt_get_result($stmt);
        // Check if there is at least one result
        if(!mysqli_fetch_assoc($data)){
            $value = false;
        }
        else{
            $value = true;
        }
    }
    // Close the statement
    mysqli_stmt_close($stmt);

    return $value;
}



 // Check if email or mobile available in the system
 function emailAvailable($connection, $email){
    $value;
    // Query
    $sql = "SELECT * FROM student WHERE Email = ? ;";
    // Initialize the prepared statement
    $stmt = mysqli_stmt_init($connection);
    // Bind the statement with the query and check errors
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location:Studentlog.php?err=failedstmt");
        exit();
    }
    else{
        // Bind data with the statement
        mysqli_stmt_bind_param($stmt, "s", $email);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Save results if available
        $data = mysqli_stmt_get_result($stmt);
        // Check if there is at least one result
        if(!mysqli_fetch_assoc($data)){
            $value = false;
        }
        else{
            $value = true;
        }
    }
    // Close the statement
    mysqli_stmt_close($stmt);

    return $value;
}









?>