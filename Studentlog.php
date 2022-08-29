
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="stylestudent.css?v=<?php echo time(); ?>">
        
        
    </head>
<body>
   
    <div class="first">
    <div id='login-form' class='login-page' >
        <div class="form-box">
            <div class='button-box' style="height:auto;">
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' action="studenttemp.php" method="POST">
            
            <input type='text' name="username" class='input-field'placeholder='User Name' value="<?php if(isset($_COOKIE["usernamecookie"])){ echo $_COOKIE["usernamecookie"]; } ?>" required >
            <input type='password' name="password" class='input-field'placeholder='Password' value="<?php if(isset($_COOKIE["passwordcookie"])){ echo $_COOKIE["passwordcookie"]; } ?>" required>
            <input type='checkbox' name='re-check' class='check-box' <?php if(isset($_COOKIE["usernamecookie"])){ ?> checked <?php } ?> ><span>Remember Password</span>
            <button type='submit' name="log_submit" class='submit-btn'>Log in</button>
         </form>

<?php
if(isset($_GET["err"])){
 if($_GET["err"]=="checkpassword"){
    echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password incorrect.Try again! </p>";
}
else if($_GET["err"]=="checkusername"){
    echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User name incorrect.Try again! </p>";
}
else if($_GET["err"]=="loginsuccessfuly"){
    echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are successfuly Login! </p>";
}
}
?>

         
      <form id='register' class='input-group-register' action="register.php" method="POST">
       
       <input type='text' name='fullname' class='input-field'  placeholder='Full Name' required>
       <input type='text' name='indexno' class='input-field' placeholder='Index No ' required>
       <input type='email' name='email' class='input-field' placeholder='Email' required>
<br>
<br>
<p>Gender
       <table>
       <tr>
                    <br>
                    
                    <td><input type="radio" class="radio" name="gender"  value="Male" checked>Male &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" class="radio" name="gender" value="Female" > Female </td>
                </tr>
</table></p>
<br>
       <p>Faculty &nbsp;&nbsp;&nbsp;</p>
       <select name="Faculty"  required>  
            
                              <option>         </option>
                              <option>Applied Sciences</option>
                              <option>Faculty of Business Studies and Finance</option>
                              <option>Faculty of Technology</option>
                          </select>

                          <br>
       <br>
       <p>Level &nbsp;&nbsp;&nbsp;</p>
       <select name="Level" style="width: 100px;" required>  
                              <option>      </option>
                              <option>Level 1</option>
                              <option>Level 2</option>
                              <option>Level 3</option>
                              <option>Level 4</option>
                             
                          </select> 
                          <br>
                         
                    <input type='text' name="Contact" class='input-field'placeholder='Contact' required >
                    <input type='text' name="username" class='input-field'placeholder='User Name' required >

       
       <input type='password' name='password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="p1" class='input-field'  placeholder='Password'  required>
       <input type='password' id="p2" name='ConfirmPassword' class='input-field' placeholder='Confirm Password'  required>
      
       <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
              <button type='submit' name="register_submit" onclick="matchPassword()"  class='submit-btn' >Register</button>
       </form>
<?php
if(isset($_GET["err"])){
if($_GET["err"]=="different_pass"){
    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password and Confirm Password does not match! </p>";
}
elseif($_GET["err"]=="available_email"){
    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email already exist! </p>";
}
elseif($_GET["err"]=="available_index"){
    echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Index No already exist! </p>";
}
else if($_GET["err"]=="failedstmt"){
    echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Something went wrong.Try again! </p>";
}
else if($_GET["err"]=="noerrors"){
    echo "<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Successfuly Register! </p>";
}

}
?>
      </div>
  </div>
</div>
<script src="js.js"></script>
</body>
  </html>