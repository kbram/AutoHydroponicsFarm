<html>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="10">
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
    <body style="background-color:#DCDCDC">
        <br><br>
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
		$date="1995-11-25";
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
    				    	$date=$row[4];
    					    $i--;
    					}else{
    					    $temp[$i]= 0;
    				    	$humidi[$i]= 0;
    				    	$time[$i]=$row[5];
    				    	$date=$row[4];
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
    				    	$date1=$row[4];
    					    $i1--;
    					}else{
    					    $temp1[$i1]= 0;
    				    	$humidi1[$i1]= 0;
    				    	$time1[$i1]=$row1[5];
    				    	$date1=$row[4];
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
		$x="1";
		if($result2){
			$num_of_rows2=mysqli_num_rows($result2);
			
			if($num_of_rows2>0){
				while($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){
				    $x2++;
				    if($x2>$num_of_rows2-10){
    					if($row2[1]!="nan" && $row2[1]!="0"){
    				    	$temp2[$i2]= $row2[2];
    				    	$humidi2[$i2]= $row2[1];
    				    	$x=$row2[1];
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
			if($x=="-0.1"){
			    $message = "Check Soil Humidity sensor whether it is in soil.";
                echo "<script type='text/javascript'>alert('$message');</script>";
			}
	    }else{
		    die("Error :<br>".mysqli_error($conn));
	    }
		
	mysqli_close($conn);
    }
?>

<div class="container">

<div class="row">
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
            </div>
            <br>
            <div class="row">
		        <div class="col-lg-2 " align="center">
                    <H3>History</H3>
                </div>
                <div class="col-lg-10 " align="left">
                    <button type="button" class="btn btn-success" onclick="myFunction()" >In Side</button>
                    <button type="button" class="btn btn-success" onclick="myFunction1()">Out Side</button>
                    <button type="button" class="btn btn-success" onclick="myFunction2()">Soil</button>
                </div>
            </div>
            
            </div>
            <script>
            function myFunction() {
                  location.replace("http://www.autohydroponicsfarm.com/check/view.php")
            }
            function myFunction1() {
                  location.replace("http://www.autohydroponicsfarm.com/check/view1.php")
            }
            function myFunction2() {
                  location.replace("http://www.autohydroponicsfarm.com/check/view2.php")
            }
            
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
                              text:'                Temperature                 <?php echo $date; ?>',
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
                              text:'                Humidity                  <?php echo $date; ?>',
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