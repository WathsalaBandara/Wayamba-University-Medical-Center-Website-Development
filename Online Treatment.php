<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:Studentlog.php");
}


?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Reports</title>
    <link rel="stylesheet" href="Online Treatment.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="sample.css?v=<?php echo time(); ?>">
    
    <style>
    body{
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
                    <li><a href="online treatment history.php">History</a></li>
		                <li><button class="btn"><a href="logout.php">Log out</a></button></li>
                   
                    </ul>
                </div>
                
            
            </nav>
</section>
<h1 style="text-align:center;margin-top:2cm;">&nbsp;&nbsp;&nbsp;&nbsp; Online Treatment Form</h1>
        <div class="cont">
            <form action="treatment.php" method="post" enctype="multipart/form-data">
               
                    <div class="row">
                        <div class="col-25">
                            <label for="faculty"> Faculty</label>

                        </div>
                        <div class="col-75">

                        <select name="Faculty" id="Faculty">  
                                <option>             </option>
                                <option>Applied Sciences</option>
                                <option>Faculty of Business Studies and Finance</option>
                                <option>Faculty of Technology</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="level"> Level</label>

                        </div>
                        <div class="col-75">
                            
                            <select name="level" id="level" style="width: 150px;" required>
                               <option>             </option>
                                <option>Level 1</option>
                                <option>Level 2</option>
                                <option>Level 3</option>
                                <option>Level 4</option>
                            </select>
                        
                        </div>
                    </div>
                       
                    <div class="row">
    <div class="col-25">
      <label for="name">Student Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="name" required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="indexno">Student Index No  </label>
    </div>
    <div class="col-75">
      <input type='text' name="Indexno" class='input-field' required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="email">Email  </label>
    </div>
    <div class="col-75">
      <input type='text' name="Email" class='input-field' required>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="indexno">  Gender </label>
    </div>
    <div class="col-75">
    <span id="genderArea" style="">
    <input type="radio" id="one" name="gender" value="Male" checked>
        <label>Male</label> &nbsp; &nbsp; &nbsp; &nbsp;
        <input type="radio" id="one" name="gender" value="Female">
        <label>Female</label>
       
        </span>
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="indexno">  Contact </label>
    </div>
    <div class="col-75">
    <input type='text' name="Contact" style="width: 200px;"  class='input-field' required>
    </div>
  </div>
  
  <div class="row">
  <div class="col-25">
      <label for="indexno"> Date  </label>
    </div>
    <div class="col-75">
    <input type='date' name="date" id="time period" required >
    </div>
  </div>
  <div class="row">
  <div class="col-25">
      <label for="indexno"> Time  </label>
    </div>
    <div class="col-75">
    <input type='time' name="time" id="time period" required >
    </div>
  </div>  
  <div class="row">
  <div class="col-25">
      <label for="indexno"> Comment  </label>
    </div>
    <div class="col-75">
    <textarea name="Comment" class='input-field'></textarea>
    </div>
  </div>       
              
        <div class="row">
                         <input type='submit' class='submit-btn' name="submit" value="Submit">
                         <input type='reset' class='submit-btn' name="submit" value="Reset">

                         </div>
        </form>
</div>
<br>
<br>
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
                                    
                                                <h1 class="title-widget">Location</h1>
                                                
                                               <div id="googleMap" style="width:50px;height:50px;">
                            
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.98891158382!2d80.01807861459623!3d7.466474994613832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2d9900fdf0d17%3A0x6eb00e7bdf3d2190!2sWayamba%20University%20Medical%20Center!5e0!3m2!1sen!2slk!4v1645071358501!5m2!1sen!2slk" width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <br> 
                            
                        </div>
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
                
                
                
                
                
                
                
                
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contact</h1>
                                
                                <div class="footerp"> 
                                
                               <li>
                                <b>
                        <span><i class="fa fa-phone"></i> &nbsp; Telephone<br> &nbsp; &nbsp;&nbsp; 0372281663</span><br>
                        <span><i class="fa fa-fax"></i>&nbsp; Fax<br> &nbsp;&nbsp;&nbsp; +(94)372281663</span><br>
                        <span><i class="fa fa-envelope"></i>&nbsp; Email<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;medicalcenter@wyb.ac.lk</span><br>
                                </b>
                    
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