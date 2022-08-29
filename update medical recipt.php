<?php 
include "connection.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
	$name=$_POST['Name'];
    $email=$_POST['Email'];
    $indexno=$_POST['Indexno'];
    $contact=$_POST['Contact'];
    $level=$_POST['Level'];
    $faculty=$_POST['Faculty'];
    $gender=$_POST['gender'];
    $from=$_POST['From'];
    $to=$_POST['To'];
    $reason=$_POST['Reason'];
    $file=$_POST['file'];
    $Recipt_No=$_POST['Recipt_No'];
        
    $title = $_POST["title"];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $uploads_dir = 'uploads';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

		// write the update query
		$sql = "UPDATE medical_recipt SET 'S_Name'='$firstname','S_Id'='$indexno','Email'='$email','Gender'='$gender','Faculty'='$faculty','Level'='$level','Reason'='$reason','DateFrom'='$from','DateTo'='$to','Mobile'='$contact','Attachment'='$file' WHERE 'Recipt_No'=$Recipt_No ";

		// execute the query
		$result = $connection->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $connection->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['Recipt_No'])) {
	$Recipt_No=$_GET['Recipt_No'];

	// write SQL to get user data
	$sql = "SELECT * FROM medical_recipt WHERE 'Recipt_No'=$Recipt_No ";

	//Execute the sql
	$result = $connection->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {

            $name=$row['Name'];
            $email=$row['Email'];
            $indexno=$row['Indexno'];
            $contact=$row['Contact'];
            $level=$row['Level'];
            $faculty=$row['Faculty'];
            $gender=$row['gender'];
            $from=$row['From'];
            $to=$row['To'];
            $reason=$_POST['Reason'];
            $file=$row['file'];
            
        
        
            $title = $row["title"];
            $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
            $tname = $_FILES["file"]["tmp_name"];
            $uploads_dir = 'uploads';
            move_uploaded_file($tname, $uploads_dir.'/'.$pname);
		}

	?>
		<h2>User Update Form</h2>
        <div class="first">
            <form action="" method="post">
                <table>
                    <tr>
                        <td> &nbsp; &nbsp; Faculty       </td>
                        <td>
                            <select name="Faculty" required value="<?php echo $faculty; ?>">  
                                <option>             </option>
                                <option>Applied Sciences</option>
                                <option>Faculty of Business Studies and Finance</option>
                                <option>Faculty of Technology</option>
                            </select>
                        </td>
                       
                    </tr>
               
                    <tr>
                        <br>
                        <td>&nbsp; &nbsp; Level </td>
                        <td>
                            <select name="Level" style="width: 100px;" value="<?php echo $level; ?>" >  
                                <option>             </option>
                                <option>Level 1</option>
                                <option>Level 2</option>
                                <option>Level 3</option>
                                <option>Level 4</option>
                               
                            </select>
                        </td>
                    </tr>
            
            
                <tr>
                    <td>&nbsp; &nbsp; Student Name       </td>
                    <td><input type="text" name="Name" class="input-field" size="50" required value="<?php echo $name; ?>"></td>
                </tr>
                <tr>
                    <br>
                    <td>&nbsp; &nbsp; Student Index No     </td>
                    <td><input type='text' name="Indexno" class='input-field'required value="<?php echo $indexno; ?>"></td>
                </tr>
                <tr>
                    <br>
                    <td>&nbsp; &nbsp; Email      </td>
                    <td><input type='text' name="Email" class='input-field' size="50" required value="<?php echo $email; ?>"></td>
                </tr>
                <tr>
                    <br>
                    <td>&nbsp; &nbsp; Gender </td>
                    <td><input type="radio" class="radio" name="gender"  value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> checked>Male &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" class="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?> > Female </td>
                </tr>
                <tr>
                    <td>&nbsp; &nbsp; Contact </td>
                    <td><input type='text' name="Contact" class='input-field'required value="<?php echo $contact; ?>"></td>
                </tr>
                <tr>
                    <br>
                    <td>&nbsp; &nbsp; Reason </td>
                    <td><input type="radio" name="Reason" class="radio" value="For Examination Purpose." <?php if($reason == 'For Examination Purpose'){ echo "checked";} ?> checked> For Examination Purpose. &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="radio" name="Reason" class="radio" value="For Mahapola/Bursary Purpose." <?php if($reason == 'For Mahapola/Bursary Purpose.'){ echo "checked";} ?>> For Mahapola/Bursary Purpose. </td>
                </tr>
             
                <tr>
                    <br>
                   <td>&nbsp; &nbsp; Duration </td>
                   <td>From <input type="date" id="time period" name="From" value="<?php echo $from; ?>">&nbsp; &nbsp; &nbsp; &nbsp;
                   To <input type="date" id="time period" name="To" value="<?php echo $to; ?>"></td>
               </tr>
           
                <tr>
                    <td>&nbsp; &nbsp;  Attachment </td>
                    <td>
                        <input type="file" name="file" value="<?php echo $file; ?>">
                    </td>
                </tr>
                <tr>
                    <td align="right">
                    <input type="submit" value="Update" name="update">

                    </td>
                </tr>
            </table> 
        </form>
</div>
		</body>
		</html>




	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: medical report history.php');
	}

}
?>