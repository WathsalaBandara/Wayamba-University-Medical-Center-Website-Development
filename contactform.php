<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
    <link rel="stylesheet" href="contactform.css">
</head>
<body>
    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;">
            <h3>Contact Email</h3>
           <input type="text" id="name" placeholder="Your Name" require>
           <input type="email" id="email" placeholder="Email Id" require>
           <textarea id="message" cols="30" rows="10" placeholder="Now I am Consider the your request."></textarea>
          <button class="submit">Sent</button>



        </form>
    </div>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            print("@");
        mail.send({
              Host : "smtp.gmail.com",
              Username : "wathsalabandara118@gmail.com",
              Password : "password",
              To : 'wathsalabandara118@gmail.com',
              From : document.getElementById("email").value,
              Subject : "This is the subject",
              Body : "And this is the body"
        }).then(
              message => alert(message)
    );
        }
    </script>
</body>
</html>