<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical News Upload</title>
    <link rel="stylesheet" href="uploadcontactform.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container">
        <div class="A">
        <h1>Upload Medical News</h1>
        <br>
        </div>
        <br>  
    <form action="StaffUpload.php" method="post" enctype="multipart/form-data">
    <label><h3>Select Image File:</h3></label>
    <input type="file" name="image">
    <br>
    <label><h3>News</h3></label>
    <textarea name="news" class='input-field'rows="4" cols="50"></textarea>
    <br> 

    <button class="submit" name="submit">Upload</button>
</form>
    </div>

</body>
