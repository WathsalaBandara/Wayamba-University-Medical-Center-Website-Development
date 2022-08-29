<?php 
include "connection.php";

//write the query to get data from users table

$sql = "SELECT * FROM online_treatments";

//execute the query

$result = $connection->query($sql);


?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Doctor</title>
    </head>
    <body>
        <br>
       <div class="">
		<h2>Table of Appoinment Requesed in Student</h2>
        <br>
    
     <table class="">
	<thead>
		<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Index No</th>
		<th>Email</th>
		<th>Gender</th>
        <th>Contact</th>
        <th>Faculty</th>
        <th>Level</th>
        <th>Date</th>
        <th>Time</th>
        <th>Comment</th>
		<th>Action</th>
       
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['T_id']; ?></td>
					<td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Index_No']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Contact']; ?></td>
                    <td><?php echo $row['Faculty']; ?></td>
                    <td><?php echo $row['Level']; ?></td>
                    <td><?php echo $row['Date']; ?></td>
                    <td><?php echo $row['Time']; ?></td>
                    <td><?php echo $row['Comment']; ?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">E-mail</a></td>
                    </tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
</div>


</body>
    </html>