<?php 
include("connection.php");
include("validation.php");



     // If user clicks the login button
     if(isset($_POST["log_submit"])){
        // Get form input data
        $indexno = $_POST["username"];
        $password = $_POST["password"];
        $remember = $_POST["re-check"];



        loginUser($connection, $indexno, $password, $remember);
        //input validation
        /*if(inputsInvalid($connection,$indexno,$password)){
            header("location:login.php?err=inputsInvalid");

        }
        else{
            // If all inputs are error free
            loginUser($connection, $indexno, $password, $remember);
        }*/
     }
    else{
        header("location:login.php");
        exit();
    }



    // Function for login
    function loginUser($connection, $indexno, $password, $remember){
        // Query
        $sql = "SELECT * FROM register WHERE indexno = ?;";
        // Initialize the prepared statement
        $stmt = mysqli_stmt_init($connection);


        // Bind the statement with the query and check errors
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:login.php?err=failedstmt");
        }
        else{
            // Bind data with the statement
            mysqli_stmt_bind_param($stmt, "s", $indexno);
            // Execute the statement
            mysqli_stmt_execute($stmt);
            // Save results if available
            $data = mysqli_stmt_get_result($stmt);
            // Check if there is at least one result
            if($row = mysqli_fetch_assoc($data)){
                // Get encrypted password
                $passHashed = $row["password"];
                // Verify password
                $isPassOk = password_verify($password, $passHashed);
                if($isPassOk){
                    // Setup session variables
                    session_start();
                    $_SESSION["full_name"] = $row["fullname"];
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
                    header("location:login.php?err=loginfailedpass");
                    exit();
                }
            }
            else{
                header("location:login.php?err=loginfailedusername");
                exit();
            }
        }
        // Close the statement
        mysqli_stmt_close($stmt);
    }




    
   

    ?>
