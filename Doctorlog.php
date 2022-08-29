<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="doctorstaff.css">
        
        
    </head>
    <body>
    <div class="first">
    <div id='login-form' class='login-page'>
        <div class="form-box">
        <form id='login' class='input-group-login' action="doctortemp.php" method="POST">
            
            <input type='text' name="username" class='input-field' placeholder='User Name' required >
            <input type='password' name="password" class='input-field' placeholder='Password' required>
            <input type='checkbox' name='re-check' class='check-box'><span>Remember Password</span>
            <button type='submit' name="log_submit" class='submit-btn'>Log in</button>
         </form>
         
         <?php
         if(isset($_GET["err"])){
 if($_GET["err"]=="checkusernameorpassword"){
    echo "<p style='color: white;'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User name or Password incorrect.Try again! </p>";
}
else if($_GET["err"]=="loginsuccessfuly"){
    echo "<p style='color: white;> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are successfuly Login! </p>";
}
}
?>
    
</div>
    </div>
    </div>


</body>
    </html>