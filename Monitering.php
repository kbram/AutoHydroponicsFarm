<?php
session_start();
if (isset($_SESSION['login'])) {
	if(isset($_GET['userName'])){
?>
<!DOCTYPE html>
 <html lang="en"> 
    <head>
        <meta charset="utf-8">
        <!--meta http-equiv="refresh" content="20"-->
        <title>Monitering</title>
        <!-- Mobile Specific Meta -->
        <link rel="icon" type="image/png" href="images/icons/login.png"/>
        <meta name="viewport" content="width=device-width; initial-scale=1 maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="custom-font/fonts.css" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />	
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
		<!--menu style-->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
		<!--===============================================================================================-->    
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="css/util.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  
    </head>
    <body style="background-color:#DCDCDC">
        <!-- Preloader -->
        <!--
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                    <div class="object"></div>
                </div>
            </div>
        </div>

        End off Preloader -->
        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="#"><span class="fa fa-phone"></span> 076 - 7000249 </a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span> nkbram95@gmail.com</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 19:00</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-behance"></span></a></li>
                        <li><a href=""><span class="fa fa-dribbble"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-youtube"></span></a></li>
                    </ul>			
                </div>
            </div><!-- Top Navbar end -->

            <!-- Navbar -->
            <nav class="navbar bootsnav ">
                <!-- Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <!-- Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>
                    <!-- Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href=""><img class="logo" src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse link-effect-8" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="http://www.autohydroponicsfarm.com?id=1 && <?php echo $_GET['userName']; ?>">Home</a></li>                    
                            <li><a href="http://www.autohydroponicsfarm.com?id=1&& <?php echo $_GET['userName']; ?> #about">About Us</a></li>
                            <li><a href="http://www.autohydroponicsfarm.com?id=1 && <?php echo $_GET['userName']; ?> #services">Services</a></li>
                            <li><a href="http://www.autohydroponicsfarm.com?id=1 && <?php echo $_GET['userName']; ?> #portfolio">Portfolio</a></li>
                            <li><a href="http://www.autohydroponicsfarm.com?id=1 && <?php echo $_GET['userName']; ?> #contact_form" >Contact Us</a></li>
							<li style="height:90px;border-top: 5px solid #fff;border-bottom: 5px solid #fff;"><a href="loginBro.php" style="color: #77B3D7;font-weight: bold;">Monitering</a></li>
                            <li><a href="logOutBro.php" style="color: #F75658;font-weight: bold;">LogOut</a></li>
                            
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
			
        </header><!-- Header end -->

          <?php
         
define('SERVER','localhost');
define('USER','autohydr_Ram');
define('PASSWORD','vivekAs:THROUGHOUT>7');
define('DB','autohydr_ahf');

$conn=mysqli_connect(SERVER,USER,PASSWORD,DB);
if(!$conn){
		die("Error,Connection failed".mysqli_connect_error($conn));
		
}else{
		$query="select * from InSideTempHum";
		$query1="select * from OutSideTempHum";
		$query2="select * from SoilSideTempHum";
		$query3="select * from LoginStatus where id=1";
		$result=mysqli_query($conn,$query);
		$result1=mysqli_query($conn,$query1);
		$result2=mysqli_query($conn,$query2);
		$result3=mysqli_query($conn,$query3);
		if($result3){
			$num_of_rows=mysqli_num_rows($result3);
			if($num_of_rows>0){
				while($row=mysqli_fetch_array($result3,MYSQLI_NUM)){
				    if($row[1]==1){
				        header('location: login.php');
				    }else{
				        continue;
				    }
				}
				mysqli_free_result($result3);
			}else{
				echo "No result found1";
			}
		}else{
		    die("Error :<br>".mysqli_error($conn));
	    }
		$x=0;
		$i=9;
		$temp = array("0","0","0","0","0","0","0","0","0","0");
		$humidi = array("0","0","0","0","0","0","0","0","0","0");
		$time=array("0","0","0","0","0","0","0","0","0","0");
		if($result){
			$num_of_rows=mysqli_num_rows($result);
			if($num_of_rows>0){
				while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
				    $x++;
				    if($x>$num_of_rows-10){
    					if($row[1]!="nan" && $row[1]!="0"){
    				    	$temp[$i]= $row[2];
    				    	$humidi[$i]= $row[1];
    				    	$time[$i]=$row[5];
    					    $i--;
    					}else{
    					    $temp[$i]= 0;
    				    	$humidi[$i]= 0;
    				    	$time[$i]=$row[5];
    					    $i--;
    					}
				    }
				}
				mysqli_free_result($result);
			}else{
				echo "No result found2";
			}
		}else{
		    die("Error :<br>".mysqli_error($conn));
	    }
		$x1=0;
		$i1=9;
		$temp1 = array("0","0","0","0","0","0","0","0","0","0");
		$humidi1 = array("0","0","0","0","0","0","0","0","0","0");
		
		if($result1){
			$num_of_rows1=mysqli_num_rows($result1);
			if($num_of_rows1>0){
				while($row1=mysqli_fetch_array($result1,MYSQLI_NUM)){
				    $x1++;
				    if($x1>$num_of_rows1-10){
    					if($row1[1]!="nan" && $row1[1]!="0"){
    				    	$temp1[$i1]= $row1[2];
    				    	$humidi1[$i1]= $row1[1];
    				    	$time1[$i1]=$row1[5];
    					    $i1--;
    					}else{
    					    $temp1[$i1]= 0;
    				    	$humidi1[$i1]= 0;
    				    	$time1[$i1]=$row1[5];
    					    $i1--;
    					}
				    }
				}
				mysqli_free_result($result1);
			}else{
				echo "No result found";
			}
		}else{
		    die("Error :<br>".mysqli_error($conn));
	    }
		$x2=0;
		$i2=9;
		$temp2 = array("0","0","0","0","0","0","0","0","0","0");
		$humidi2 = array("0","0","0","0","0","0","0","0","0","0");
		$time2=array("0","0","0","0","0","0","0","0","0","0");
		if($result2){
			$num_of_rows2=mysqli_num_rows($result2);
			if($num_of_rows2>0){
				while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){
				    $x2++;
				    if($x2>$num_of_rows2-10){
    					if($row2[1]!="nan" && $row2[1]!="0"){
    				    	$temp2[$i2]= $row2[2];
    				    	$humidi2[$i2]= $row2[1];
    				    	$time2[$i2]=$row2[5];
    					    $i2--;
    					}else{
    					    $temp2[$i2]= 0;
    				    	$humidi2[$i2]= 0;
    				    	$time2[$i2]=$row2[5];
    					    $i2--;
    					}
				    }
				}
				mysqli_free_result($result2);
			}else{
				echo "No result found";
			}
	    }else{
		    die("Error :<br>".mysqli_error($conn));
	    }
		
	mysqli_close($conn);
    }
?>
       
            
			<div >
             <iframe src="http://www.autohydroponicsfarm.com/LiveGraph.php"  height="430" width="100%"></iframe>
            </div>
            <div class="container">
            
            <!--div class="row">
		        <div class="col-lg-6 " style="padding:0px;padding-right:15px;">
			        <div  style=" width:100%;background:#EBEBEB;border: 15px outset #313131;border-radius: 25px;">
                     <canvas id="myChart"></canvas>
                    </div>
		        </div>
		        <div class="col-lg-6" style="padding:0px;padding-left:15px;">	
			        <div  style="background:#F0F0F0;width:100%;border: 15px outset #313131;border-radius: 25px;" >
                    <canvas id="myChart1"></canvas>
                    </div>
                 </div>
            </div-->
         </div>

        <div class="row" align="center">
            <br>
			<H2 style="color:#57B846; background-color:#DCDCDC">Real Time Control</H2>
		</div>
        <div >
             <iframe src="http://www.autohydroponicsfarm.com/realMo.php" height="450" width="100%"></iframe>
        </div>
        <div align="center" style="background-color:#DCDCDC"">
             <iframe src="https://alfred.camera/webapp2/" align="center" height="350" width="800"></iframe>
        </div>
        
         <br>
         
         <br><br>
					<script>
                        let myChart = document.getElementById('myChart').getContext('2d');
                        let myChart1 = document.getElementById('myChart1').getContext('2d');
                         // Global Options
                         Chart.defaults.global.defaultFontFamily = 'Lato';
                         Chart.defaults.global.defaultFontSize = 18;
                            Chart.defaults.global.defaultFontColor = '#777';
                         let massPopChart = new Chart(myChart, {
                         type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                        data:{
                            labels:['<?php echo $time[9]; ?>', '<?php echo $time[8]; ?>', '<?php echo $time[7]; ?>', '<?php echo $time[6]; ?>', '<?php echo $time[5]; ?>', '<?php echo $time[4]; ?>','<?php echo $time[3]; ?>','<?php echo $time[2]; ?>', '<?php echo $time[1]; ?>','<?php echo $time[0]; ?>'],
                            datasets:[{
                            label:'In Side',
                            data:[
                                <?php echo $temp[9]; ?>,
                                <?php echo $temp[8]; ?>,
                                <?php echo $temp[7]; ?>,
                                <?php echo $temp[6]; ?>,
                                <?php echo $temp[5]; ?>,
                                <?php echo $temp[4]; ?>,
                                <?php echo $temp[3]; ?>,
                                <?php echo $temp[2]; ?>,
                                <?php echo $temp[1]; ?>,
                                <?php echo $temp[0]; ?>
                            ],
                            //backgroundColor:'green',
                             backgroundColor:[
                            'rgba(31, 99, 132, 0.4)'
                            ],
                             borderWidth:2,
                            borderColor:'#3276B1',
                            hoverBorderWidth:3,
                            hoverBorderColor:'#fff'
                            },{
                            label:'Out Side',
                            data:[
                                <?php echo $temp1[9]; ?>,
                                <?php echo $temp1[8]; ?>,
                                <?php echo $temp1[7]; ?>,
                                <?php echo $temp1[6]; ?>,
                                <?php echo $temp1[5]; ?>,
                                <?php echo $temp1[4]; ?>,
                                <?php echo $temp1[3]; ?>,
                                <?php echo $temp1[2]; ?>,
                                <?php echo $temp1[1]; ?>,
                                <?php echo $temp1[0]; ?>
                            ],
                            //backgroundColor:'green',
                            backgroundColor:[
                                'rgba(200, 0, 0, 0.4)'
                            ],
                              borderWidth:2,
                              borderColor:'#FD0000',
                              hoverBorderWidth:3,
                              hoverBorderColor:'#000'
                            },{
                            label:'Soil',
                            data:[
                                <?php echo $temp2[9]; ?>,
                                <?php echo $temp2[8]; ?>,
                                <?php echo $temp2[7]; ?>,
                                <?php echo $temp2[6]; ?>,
                                <?php echo $temp2[5]; ?>,
                                <?php echo $temp2[4]; ?>,
                                <?php echo $temp2[3]; ?>,
                                <?php echo $temp2[2]; ?>,
                                <?php echo $temp2[1]; ?>,
                                <?php echo $temp2[0]; ?>
                            ],
                            //backgroundColor:'green',
                            backgroundColor:[
                                'rgba(0, 200, 0, 0.4)'
                            ],
                              borderWidth:2,
                              borderColor:'#1AA160',
                              hoverBorderWidth:3,
                              hoverBorderColor:'#000'
                            }]
                          },
                          options:{
                            title:{
                              display:true,
                              text:'Temperature',
                              fontSize:25
                            },
                            legend:{
                              display:true,
                              position:'right',
                              labels:{
                                fontColor:'#000'
                              }
                            },
                            layout:{
                              padding:{
                                left:50,
                                right:0,
                                bottom:0,
                                top:0
                              }
                            },
                            tooltips:{
                              enabled:true
                            }
                          }
                        });
                         let massPopChart1 = new Chart(myChart1, {
                         type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
                        data:{
                            labels:['<?php echo $time[9]; ?>', '<?php echo $time[8]; ?>', '<?php echo $time[7]; ?>', '<?php echo $time[6]; ?>', '<?php echo $time[5]; ?>', '<?php echo $time[4]; ?>','<?php echo $time[3]; ?>','<?php echo $time[2]; ?>', '<?php echo $time[1]; ?>','<?php echo $time[0]; ?>'],
                            datasets:[{
                            label:'In Side',
                            data:[
                                <?php echo $humidi[9]; ?>,
                                <?php echo $humidi[8]; ?>,
                                <?php echo $humidi[7]; ?>,
                                <?php echo $humidi[6]; ?>,
                                <?php echo $humidi[5]; ?>,
                                <?php echo $humidi[4]; ?>,
                                <?php echo $humidi[3]; ?>,
                                <?php echo $humidi[2]; ?>,
                                <?php echo $humidi[1]; ?>,
                                <?php echo $humidi[0]; ?>
                            ],
                            //backgroundColor:'green',
                             backgroundColor:[
                            'rgba(31, 99, 132, 0.4)'
                            ],
                             borderWidth:2,
                            borderColor:'#3276B1',
                            hoverBorderWidth:3,
                            hoverBorderColor:'#fff'
                            },{
                            label:'Out Side',
                            data:[
                                <?php echo $humidi1[9]; ?>,
                                <?php echo $humidi1[8]; ?>,
                                <?php echo $humidi1[7]; ?>,
                                <?php echo $humidi1[6]; ?>,
                                <?php echo $humidi1[5]; ?>,
                                <?php echo $humidi1[4]; ?>,
                                <?php echo $humidi1[3]; ?>,
                                <?php echo $humidi1[2]; ?>,
                                <?php echo $humidi1[1]; ?>,
                                <?php echo $humidi1[0]; ?>
                            ],
                            //backgroundColor:'green',
                            backgroundColor:[
                                'rgba(200, 0, 0, 0.4)'
                            ],
                              borderWidth:2,
                              borderColor:'#FD0000',
                              hoverBorderWidth:3,
                              hoverBorderColor:'#000'
                            },{
                            label:'Soil',
                            data:[
                                <?php echo $humidi2[9]; ?>,
                                <?php echo $humidi2[8]; ?>,
                                <?php echo $humidi2[7]; ?>,
                                <?php echo $humidi2[6]; ?>,
                                <?php echo $humidi2[5]; ?>,
                                <?php echo $humidi2[4]; ?>,
                                <?php echo $humidi2[3]; ?>,
                                <?php echo $humidi2[2]; ?>,
                                <?php echo $humidi2[1]; ?>,
                                <?php echo $humidi2[0]; ?>
                            ],
                            //backgroundColor:'green',
                             backgroundColor:[
                            'rgba(0, 200, 0, 0.4)'
                            ],
                             borderWidth:2,
                            borderColor:'#1AA160',
                            hoverBorderWidth:3,
                            hoverBorderColor:'#fff'
                            }]
                          },
                          options:{
                            title:{
                              display:true,
                              text:'Humidity',
                              fontSize:25
                            },
                            legend:{
                              display:true,
                              position:'right',
                              labels:{
                                fontColor:'#000'
                              }
                            },
                            layout:{
                              padding:{
                                left:50,
                                right:0,
                                bottom:0,
                                top:0
                              }
                            },
                            tooltips:{
                              enabled:true
                            }
                          }
                        });
                     </script>
                     
        <!-- Footer -->
        <footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_item">
                            <h4>About Company</h4>
                            <img class="logo" src="images/logo.png" alt="Construction" />
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem</p>

                            <ul class="list-inline footer_social_icon">
                                <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                <li><a href=""><span class="fa fa-twitter"></span></a></li>
                                <li><a href=""><span class="fa fa-youtube"></span></a></li>
                                <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                                <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <div class="footer_item">
                            <h4>Explore link</h4>
                            <ul class="list-unstyled footer_menu">
                                <li><a href=""><span class="fa fa-play"></span> Our services</a>
                                <li><a href=""><span class="fa fa-play"></span> Meet our team</a>
                                <li><a href=""><span class="fa fa-play"></span> Forum</a>
                                <li><a href=""><span class="fa fa-play"></span> Help center</a>
                                <li><a href=""><span class="fa fa-play"></span> Contact Cekas</a>
                                <li><a href=""><span class="fa fa-play"></span> Privacy Policy</a>
                                <li><a href=""><span class="fa fa-play"></span> Cekas terms</a>
                                <li><a href=""><span class="fa fa-play"></span> Site map</a>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-7">
                        <div class="footer_item">
                            <h4>Latest post</h4>
                            <ul class="list-unstyled post">
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                                <li><a href=""><span class="date">20 <small>AUG</small></span>  Luptatum omittantur duo ne mpetus indoctum</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><a href=""><span class="fa fa-map-marker"></span>Vavuniya Campus, University of Jaffna, Park Road, Vavuniya</a></li>
                                <li><a href=""><span class="fa fa-envelope"></span> nkbram95@gmail.com</a></li>
                                <li><a href=""><span class="fa fa-mobile"></span><p>+94 076 7000 249 <br />+44 00 00 1234</p></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Footer top end -->

            <!-- Footer bottom -->
            <div class="footer_bottom text-center">
                <p class="wow fadeInRight">
                    Made with 
                    <i class="fa fa-heart"></i>
                    by Copyright © 
                    <a target="_blank" href="http://www.autohydroponicsfarm.co/">Karunaaharan Bavaram</a> 
                    in 2018. All Rights Reserved
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->

        <!-- JavaScript -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Bootsnav js -->
        <script src="js/bootsnav.js"></script>

        <!-- JS Implementing Plugins -->
        <script src="js/isotope.js"></script>
        <script src="js/isotope-active.js"></script>
        <script src="js/jquery.fancybox.js?v=2.1.5"></script>

        <script src="js/jquery.scrollUp.min.js"></script>

        <script src="js/main.js"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    </body>	
</html>	
<?php
}
}else{
    header('location: login.php');
}
?>
