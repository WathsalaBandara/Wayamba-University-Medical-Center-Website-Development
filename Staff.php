<?php 
include "connection.php";

//write the query to get data from users table

$sql = "SELECT * FROM medical_recipt ORDER BY Recipt_No DESC ";

//execute the query

$result = $connection->query($sql);


?>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Welcome Staff</title>
        <link rel="stylesheet" href="staff.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="sample.css?v=<?php echo time(); ?>">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style>
    body{  
    margin: 0;
    padding: 0;
    font-family: 'Noto Serif', serif;
    overflow-x: hidden;
    
    }
    
</style> 
    </head>
    <body>
    <section class="A">
        <nav>
            
              
        <img src="WUSL_White_Logo.png" style="width:5cm;margin-left: -0.5cm;">
            
            <div class="nav-links" id="navLinks">
                
                <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="Medical News.php">Medical News</a></li>
                <li><a href="StaffUploadform.php">News Upload</a></li>
                <li><button class="btn"><a href="logout.php">Log Out</a></button></li>
               
                </ul>
            </div>
            <div class="text-box">
                <h1>Stay Safe,Stay Healthy.</h1> 
            </div>
        
        </nav>
</section>
        <div class="table-responsive-xxl">
		<h2>&nbsp;Medical Reports Requesed of Students</h2>
        <br>
        <br>
        <table class="table">
	<thead>
		<tr>
        <th>Recipt No</th>
		<th>Name</th>
		<th>Index No</th>
		<th>Email</th>
		<th>Gender</th>
        <th>Faculty</th>
        <th>Level</th>
        <th>Reason</th>
        <th>DateFrom</th>
        <th>DateTo</th>
        <th>Mobile</th>
        <th>Attachment</th>
		
    
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['Recipt_No']; ?></td>
					<td><?php echo $row['S_Name']; ?></td>
                    <td><?php echo $row['S_id']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Gender']; ?></td>
                    <td><?php echo $row['Faculty']; ?></td>
                    <td><?php echo $row['Level']; ?></td>
                    <td><?php echo $row['Reason']; ?></td>
                    <td><?php echo $row['DateFrom']; ?></td>
                    <td><?php echo $row['DateTo']; ?></td>
                    <td><?php echo $row['Mobile']; ?></td>
                    <td><?php echo $row['Attachment']; ?></td>
                    
                    </tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
</div>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!--footer-->
<footer class="footer1" style="height:min-content;margin-bottom: 0;">
    <div class="container">
    
    <div class="row"><!-- row -->
            <img src="logo1.png" style="width: 150px;margin-top: -0.5cm;margin-right: 80cm;margin-left:-4.5cm;">
                    <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                
                            <ul class="list-unstyled clear-margins"><!-- widgets -->
                                    
                                            <li class="widget-container widget_nav_menu"><!-- widgets list -->
                                
                                            <h1 class="title-widget">Address</h1>
                                            
                                            <ul>
                                                
                                    <li>Medical Center,<br></li>
                                    <li>Wayamba University of Sri Lanka,</li>
                                    <li>Lional Jayathilaka Mawatha,</li>
                                    <li>Dandugamuwa,</li>
                                    <li>60200,</li>
                                    <li>Kuliyapitiya,</li>
                                    <li>Sri Lanka.</li>
                                            </ul>
                                
                                                                    </li>
                                        
                                    </ul>
                                     
                                  
                            </div><!-- widgets column left end -->
                           
                    <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                            
                                <li class="widget-container widget_nav_menu"><!-- widgets list -->
                        
                                    <h1 class="title-widget">Quick links</h1>
                                    
                                    <ul>
              <li><a href="https://www.wyb.ac.lk/" target="_blank">Wayamba University of Sri Lanka.</a></li>
                  <li><a href="http://libsys.wyb.ac.lk/" target="_blank">WUSL Library.</a></li>
                  <li><a href="http://ictk.wyb.ac.lk/" target="_blank">ICT Center.</a></li>
                  <li><a href="https://ugc.ac.lk/" target="_blank">University Grants Commition.</a></li>
                  <li><a href="https://moe.gov.lk/" target="_blank">Ministry of Education.</a></li>
    
                                        
      </ul>
                        
                                </li>
                                
                            </ul>
                             
                          
                    </div><!-- widgets column left end -->
                     <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                
                                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                                            
                                                    <li class="widget-container widget_nav_menu"><!-- widgets list -->
                                        
                                                    <h1 class="title-widget">Location</h1>
                                                    
                                                   <div id="googleMap" style="width:50px;height:50px;">
                                
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.98891158382!2d80.01807861459623!3d7.466474994613832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2d9900fdf0d17%3A0x6eb00e7bdf3d2190!2sWayamba%20University%20Medical%20Center!5e0!3m2!1sen!2slk!4v1645071358501!5m2!1sen!2slk" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    <br> 
                                
                            </div>
                                            </li>
                                                
                                            </ul>
                                             
                                          
                                    </div><!-- widgets column left end -->
                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                    
                       
                        
                            <ul class="list-unstyled clear-margins"><!-- widgets -->
                            
                                <li class="widget-container widget_recent_news"><!-- widgets list -->
                        
                                    <h1 class="title-widget">Contact</h1>
                                    
                                    <div class="footerp"> 
                                    
                                   <li>
                            <span><i class="fa fa-phone"></i> &nbsp; Telephone<br> &nbsp; &nbsp;&nbsp; 0452231049</span><br>
                            <span><i class="fa fa-fax"></i>&nbsp; Fax<br> &nbsp;&nbsp;&nbsp; +(94)372281663</span><br>
                            <span><i class="fa fa-envelope"></i>&nbsp; Email<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;medicalcenter@wyb.ac.lk</span><br>
                       
                        
                    </li>
                                    </div>
    </div>
                                    
                                    <div class="social-icons">
                                    
                                        <ul class="nomargin">
                                        
                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                        
                                        </ul>
                                    </div>
    <p style="text-align:center;">&#169;All Rights Reserved</p>
                                </li>
                              </ul>
                           </div>
                    </div>
    </div>

</body>
    </html>