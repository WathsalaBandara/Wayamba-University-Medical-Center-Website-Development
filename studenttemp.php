<?php
include("connection.php");
include("validation.php");


/*original code

if(isset($_POST['log_submit'])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="SELECT * FROM student WHERE User_Name='$username'";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['Password']);
        if($verify==1){
            session_start();
            $_SESSION['username']=$username;
            header("location:index.html?err=loginsuccessfuly");
        }
        else{
            header("location:Studentlog.php?err=checkpassword");
        }
    }
    else{
        header("location:Studentlog.php?err=checkusername");
    }
}
*/


if(isset($_POST['log_submit'])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $remember = $_POST["re-check"];

    $sql="SELECT * FROM student WHERE User_Name='$username'";
    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $verify=password_verify($password,$row['Password']);
        if($verify==1){
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;

            if(isset($remember)){
                // Create cookies for email and password
                setcookie("usernamecookie",$username, time() + (3600 * 24 * 7), "/");
                setcookie("passwordcookie", $password, time() + (3600 * 24 * 7), "/");
            }
            else{
                // Destroy cookies value
                if(isset($_COOKIE["usernamecookie"])){
                    setcookie("usernamecookie", "", time() - (3600 * 24 * 7), "/");
                }
                if(isset($_COOKIE["passwordcookie"])){
                    setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
                }
            }
            header("location:index.html?err=loginsuccessfuly");
        }
        else{
            header("location:Studentlog.php?err=checkpassword");
        }
    }
    else{
        header("location:Studentlog.php?err=checkusername");
    }
}





/*
if(isset($_POST['log_submit'])){

    $username=$_POST["username"];
    $password=$_POST["password"];
    $remember = $_POST["re-check"];

    

    if(inputsInvalid($connection,$username,$password)){
        header("location:Studentlog.php?err=checkusernameorpassword");
    }
    else{
        loginuser($connection,$username,$password,$remember);
    }
    

}
else{
    header("location:Studentlog.php");
    exit();
}
  

function loginusers($connection,$username,$password,$remember){
    $sql="SELECT * FROM student WHERE User_Name = ? ;";
    $stmt=mysqli_stmt_init($connection);

    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:Studentlog.php?err=failedstmt");
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if($row = mysqli_fetch_assoc($data)){
                // Get encrypted password
                $passHashed = $row["Password"];
                // Verify password
                $isPassOk = password_verify($password, $passHashed);
                if($isPassOk){
                    // Setup session variables
                    session_start();
                   /* $_SESSION["full_name"] = $row["fullname"];
                    $_SESSION["indexno"] = $row["indexno"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["password"] = $row["password"];



                
                    // If remember me checked
                    if(isset($remember)){
                        // Create cookies for email and password
                        setcookie("indexcookie", $indexno, time() + (3600 * 24 * 7), "/");
                        setcookie("passwordcookie", $password, time() + (3600 * 24 * 7), "/");
                    }
                    else{
                        // Destroy cookies value
                        if(isset($_COOKIE["indexcookie"])){
                            setcookie("indexcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                        if(isset($_COOKIE["passwordcookie"])){
                            setcookie("passwordcookie", "", time() - (3600 * 24 * 7), "/");
                        }
                    }
                    header("location:index.php");
                }
                else{
                    header("location:Studentlogin.php?err=loginfailedpass");
                    exit();
                }
            }
            else{
                header("location:Studentlogin.php?err=loginfailedusername");
                exit();
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    }


*/
    

?>