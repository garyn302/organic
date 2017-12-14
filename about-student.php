<?php
$servername = "localhost";
$username = "root";
$password = "cisco";
$dbname = "organic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$sql = "SELECT * FROM member_students";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOEL | Taipei, Taiwan | Organic Electronic Research Center, MCUT</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Organic Lab</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="about-us.html">Members</a></li>
                        <li><a href="#">Research Areas</a></li>
                        <li><a href="#">Publications</a></li>
                        <li><a href="#">Gallery</a></li> 
                        <li><a href="#">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
		
	<section id="about-us">
        <div class="container">			
			<div class="skill-wrap clearfix">			
				<div class="center wow fadeInDown">
					<h2>Team of <span>Organic Lab</span></h2>
					<p class="lead">Our target is the become the highest level organic lab in all the world. <br> We have the best team in the lab.</p>
				</div>
				<div class="row">		
					<div class="col-sm-4" style="margin-left: 0px;">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin:0px auto;">
							<div class="joomla-skill" onclick="window.location='http://127.0.0.1/organic/about-us.html';">                                   

							</div>
						</div>
					</div>
					
					 <div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" style="margin:0px auto;">
							<div class="html-skill" onclick="window.location='http://127.0.0.1/organic/about-student.php';">                                  

							</div>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" style="margin:0px auto;">
							<div class="css-skill" onclick="window.location='http://127.0.0.1/organic/about-associate.php';">                                    
 									
							</div>
						</div>
					</div>
					
<!-- 					 <div class="col-sm-4">
						<div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
							<div class="wp-skill">
								<p><em>90%</em></p>
								<p>Secrect</p>                                     
							</div>
						</div>
					</div>	 -->				
				</div>	
            </div>
			
			
			<!-- our-team -->
			<div class="team">
				<div class="center wow fadeInDown">
					<h2>Students of <span>Organic Lab.</span></h2>
					<p class="lead">Our target is the become the highest level organic lab in all the world. <br> We have the best students in the lab.</p>
				</div>
			
				<?php
				if ($result->num_rows > 0) {
					$route_count = 1;
				    while($row = $result->fetch_assoc()) {
				?>
				<?php if($route_count==1 || $route_count%2==1){?>
				<div class="row clearfix">
					<?php }?>
					<?php if($route_count==1 || $route_count%4==1){?>
					<div class="col-md-4 col-sm-6">
					<?php }else{?>
						<div class="col-md-4 col-sm-6 col-md-offset-2">	
					<?php  }?>	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<a class="preview" rel="prettyPhoto"><img class="media-object" src="images/students/<?php echo $row['id']; ?>.jpg" alt="" width="145px"></a>
								</div>
								<div class="media-body">
									<h4><?php echo $row['name'];?></h4>
									<h5>Student</h5>
									<ul class="tag clearfix">
										<li class="btn"><a href="#">Scholar</a></li>
										<li class="btn"><a href="mailto:<?php echo $row['email']; ?>">Email</a></li>
									</ul>
									<h5>Ext. #<?php echo $row['conatct']; ?></h5>
									<ul class="social_icons">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li> 
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									</ul>
								</div>
							</div>
							<p style="color: blue; font-size: 16px;"><?php echo $row['education']; ?></p>
							<?php echo $row['work_place']; ?> <?php echo $row['skills']; ?>
						</div>
					</div>
				<?php
				if($route_count%2==0){?>
			</div>
				<div class="row team-bar">
					<div class="first-one-arrow hidden-xs">
						<hr>
					</div>
					<div class="first-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="second-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
					<div class="third-arrow hidden-xs">
						<hr> <i class="fa fa-angle-up"></i>
					</div>
					<div class="fourth-arrow hidden-xs">
						<hr> <i class="fa fa-angle-down"></i>
					</div>
				</div>     
				<?php }
				if($route_count==1 || $route_count%4==1){

				}
				$route_count +=1;
					}
				}
				?>
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	
	<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Ming-Chi UT</h3>
                        <ul>
                            <li><a href="http://www.mcut.edu.tw/">Ming Chi University of Technology</a></li>
<!--                             <li><a href="#">N/A</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>   -->                         
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="http://www.fpg.com.tw/j2fpgs/index_lang.html">Formosa Plastic Group</a></li>
<!--                             <li><a href="http://www.shinematerials.com/index.html">Syskey</a></li>
                            <li><a href="http://www.shinematerials.com/index.html">Shine Materials</a></li>
                            <li><a href="#">晶宜科技股份有限公司</a></li>      -->                     
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <!-- <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">N/A</a></li>
                            <li><a href="#">N/A</a></li>
                            <li><a href="#">N/A</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>
                    </div>    
                </div> -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="http://www.wisechip.com.tw/?lang=1&TTo=zh-tw">WiseChip</a></li>
                            <li><a href="http://www.shinematerials.com/index.html">Syskey</a></li>
                            <li><a href="http://www.shinematerials.com/index.html">Shine Materials</a></li>
                            <li><a href="#">晶宜科技股份有限公司</a></li>                            
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
	
	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2017 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">BuzzLab</a>. All Rights Reserved.
                </div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Gp
                -->
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>