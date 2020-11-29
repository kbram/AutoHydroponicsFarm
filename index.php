<!DOCTYPE html>
 <html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>AHF</title>
        <meta name="description" content="Hydroponics Farm">
        <meta name="keywords" content="Hydroponics,Farm,Auto,Bavaram,Vavuniya Campus,Jaffna University,new,technology,Thangathurai Kartheeswaran,Karunaaharan Bavaram,Bavaram Karunaaharan">
        <meta name="author" content="Karunaaharan Bavaram">
        <!-- Mobile Specific Meta -->
        <link rel="icon" type="image/png" href="images/icons/logotitle.png"/>
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
		<script data-ad-client="ca-pub-2997037429536695" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    </head>
    <body>
        <!-- Preloader -->
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

        <!--End off Preloader -->
        <!-- Header -->
        <header>
            <!-- Top Navbar -->
            <div class="top_nav">
                <div class="container">
                    <ul class="list-inline info">
                        <li><a href="#"><span class="fa fa-phone"></span> 076 - 7000249 </a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span> nkbram95@gmail.com</a></li>
                        <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 am - 6:00 pm</a></li>
                    </ul>
                    <ul class="list-inline social_icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100016278948855"><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-behance"></span></a></li>
                        <li><a href=""><span class="fa fa-dribbble"></span></a></li>
                        <li><a href="https://www.linkedin.com/in/bavaram-karunaaharan-9130a1135"><span class="fa fa-linkedin"></span></a></li>
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
                        <a class="navbar-brand" href=""><img class="logo"  src="images/logo.png" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse link-effect-8" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="">Home</a></li>                    
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Portfolio</a></li>
                            <li><a href="#contact_form" >Contact Us</a></li>
							<li><a href="Monitering.php?userName='<?php echo $_GET['userName'];?>'" style="color: #77B3D7;font-weight: bold;">Monitering</a></li>
							<?php
						    if(isset($_GET['id'])){
    							if ($_GET['id']==1){	
    							   
    								echo "<li><a href='logOutBro.php' style='color: #F75658;font-weight: bold;'>LogOut</a></li>";
    							}else{
    							    echo "<li><a href='logOutBro.php' style='color: #F75658;font-weight: bold;'>LogOut</a></li>";
    							}
						    }else{
						        echo "<li><a href='login.php' style='color: #F75658;font-weight: bold;'>LogIn</a></li>";
						    }
							?>
                            
                        </ul>
                    </div>
                </div>   
            </nav><!-- Navbar end -->
			
        </header><!-- Header end -->

            <!-- Carousel -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel-inner -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/slider_img.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Undergraduates</h3>
                                <h1>Farming Services</h1>
                                <h1 class="second_heading">Innovative & Profession</h1>
                                <p>Domestic Farming systems for your home exist
                                to make soiless gardening easy for any level of gardener, with any weather condition and less man power.</p>
                                <a href="https://www.dezeen.com/2016/05/03/ikea-indoor-gardening-hydroponic-kit-krydda-vaxer" class="btn know_btn">know more</a>
                                <a  class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img2.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Undergraduates</h3>
                                <h1>Farming Services</h1>
                                <h1 class="second_heading" >Innovative & Profession</h1>
                                <p>Domestic Farming systems for your home exist
                                to make soiless gardening easy for any level of gardener, with any weather condition and less man power.</p>
                                <a  href="https://www.dezeen.com/2016/05/03/ikea-indoor-gardening-hydroponic-kit-krydda-vaxer" class="btn know_btn">know more</a>
                                <a  class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/slider_img3.jpg" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>We are Undergraduates</h3>
                                <h1>Farming Services</h1>
                                <h1 class="second_heading">Innovative & Profession</h1>
                                <p>Domestic Farming systems for your home exist
                                to make soiless gardening easy for any level of gardener, with any weather condition and less man power.</p>
                                <a href="https://www.dezeen.com/2016/05/03/ikea-indoor-gardening-hydroponic-kit-krydda-vaxer" class="btn know_btn">know more</a>
                                <a  class="btn know_btn">view project</a>
                            </div>					
                        </div>
                    </div>
                </div><!-- Carousel-inner end -->



                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- Carousel end-->

        


        <!-- About -->
        <section id="about">
            <div class="container about_bg">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="about_content">
                            <h2>Welcome to Our Company</h2>
                            <h3>A mini vertical farm for your home </h3>
                            <p>Throughtout is the easiest way to go the biggest, freshes and healthiest produce in the least time possible.</p>
                            <p>Throughtout is an intelligent indoor garden that lets you grow pesticide-free food all year round.</p>
                            <a  href="http://blog.zipgrow.com/indoor-hydroponic-farming-costs-profits" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-1">
                        <div class="about_banner">
                            <img src="images/man.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->
        <!-- video -->
        <div class="container-fluid">
        <div class="row" >
        <div class="col-lg-3">
        </div>   
        <div  class="col-lg-6">
                    <div class="video" style="transform:translate(4%,3%);">
                         <iframe align="center" width="90%" height="300px" src="images/green.mp4" frameborder="0" allowfullscreen="" style="border: 25px inset #313131;"></iframe>
                    </div>      
        </div>  
        </div><!-- end video -->
        <div class="row" >
                <div class="col-lg-6" style="border-right: 15px inset #313131;">
                    <div class="form-group">
                        &nbsp;
                    </div>
                </div>  
        </div>  
        <!-- Leave -->
        <div class="row" >
                <div class="col-lg-6" align="center" style="border-right: 15px inset #313131;">
                    <div class="row">
                        <img src="images/leave1.png" class="img-fluid" alt="Responsive image" style="width:70%;height:200px">
                    </div>
                    <div class="row">
                        <img src="images/leave1comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>
                
                <div class="col-lg-5" align="center" >
                    <div class="row">
                        <img src="images/leave2.png" class="img-fluid" alt="Responsive image" style="width:70%;height:200px;">
                    </div>
                    <div class="row">
                        <img src="images/leave2comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>  
                
            </div>
            <div class="row" >
                <div class="col-lg-6" align="center" style="border-right: 15px inset #313131;">
                    <div class="form-group">
                        &nbsp;
                    </div>
                </div>  
            </div> 
            <div class="row" >
                <div class="col-lg-6" align="center" style="border-right: 15px inset #313131;">
                    <div class="row">
                        <img src="images/leave3.png" class="img-fluid" alt="Responsive image" style="width:70%;height:200px;">
                    </div>
                    <div class="row">
                        <img src="images/leave3comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>
                <div class="col-lg-5" align="center" >
                    <div class="row">
                        <img src="images/leave4.png" class="img-fluid" alt="Responsive image" style="width:70%;height:200px;">
                    </div>
                    <div class="row">
                        <img src="images/leave4comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>  
            </div>
            <div class="row" >
                <div class="col-lg-6" style="border-right: 15px inset #313131;">
                    <div class="form-group">
                        &nbsp;
                    </div>
                </div>  
            </div> 
            <div class="row" >
                <div class="col-lg-6" align="center" style="border-right: 15px inset #313131;">
                    <div class="row">
                        <img src="images/leave6.png" class="img-fluid" alt="Responsive image" style="width:70%;;height:200px;">
                    </div>
                    <div class="row">
                        <img src="images/leave5comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>
                <div class="col-lg-5" align="center">
                    <div class="row">
                        <img src="images/leave5.png" class="img-fluid" alt="Responsive image" style="width:70%;height:200px;">
                    </div>
                    <div class="row">
                        <img src="images/leave6comment.jpg" class="img-fluid" alt="Responsive image" style="width:70%;height:300px;">
                    </div>
                </div>  
            </div><!-- end Leave -->
            <div class="row" >
                <div class="col-lg-6" style="border-right: 15px inset #313131;">
                    <div class="form-group">
                        &nbsp;
                    </div>
                </div>  
            </div>  
            <div class="row" style="background-color: #313131;">
                <h2 style="color: #FFFFFF;margin-left:20px;"></h2>
            </div>
            </div>
        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>WHY CHOOSE US?</h2>
                            <p>Throughtout uses hydroponics to grow healthy plants by giving them exactly the nutrient they need, when they need it.</p>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-gears"></span>
                            <h4>Climate Control</h4>
                            <p>The system is designed to control temperature, humidity, lighting, fan and vent and much more</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-tasks"></span>
                            <h4>Hydroponics System</h4>
                            <p>The plants take all nutrients they need straight from the water</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-signal"></span>
                            <h4>Connected Devices</h4>
                            <p>Connect your device with your wifi and start your cultivation </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-leaf"></span>
                            <h4>Nutrient Dosing System</h4>
                            <p>For measurements and nutrients formulas, throughtout knows exactly what to do</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
        <section id="services">
            <div class="container">
                <h2>OUR SERVICES</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img1.jpg" alt="Our Services" />
                            <h3>Structure</h3>
                            <p>We provide the the structure with seeds and nutrients.</p>
                            <a href="https://www.diynetwork.com/how-to/outdoors/gardening/how-to-assemble-a-homemade-hydroponic-system" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img2.jpg" alt="Our Services" />
                            <h3>Plant</h3>
                            <p>Plant your first seeds in throughtout's soil free hydroponics base and let throughtout does the rest.</p>
                            <a href="https://dengarden.com/gardening/indoor-hydroponic-garden" class="btn know_btn">know more</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="images/service_img3.jpg" alt="Our Services" />
                            <h3>Architecture</h3>
                            <p>
                                “hydroponic systems” are everywhere, that’s because they are. Hydroponic farming is one efficient way to grow fruits and vegetables in small spaces 
                                without the use of soil. Instead of dirt, plants grow down into water, to which farmers have added the necessary nutrients for plant growth.
                                These are then absorbed, along with water, through a plant’s roots. Light is provided either by the sun or specially designed grow lights, 
                                with many sustainable systems powered by renewable energy sources.
                            </p>
                            <a href="https://inhabitat.com/6-places-where-soil-less-farming-is-changing-how-we-grow-food/" class="btn know_btn">know more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services end -->

        <!-- Portfolio -->
        <section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2>Made with love</h2>
                <p>
                    Hydroponic gardening is a great way to grow your vegetables, fruits, and herbs under totally controlled conditions.
                    You’ll hear many a naturalist extolling the virtues of growing food and perennials in the earth, under the sun.
                    However, many of their arguments are misguided; defying logic and the great results obtained from hydroponic growers all over the world.
	                They take up to 50% less land to grow the same amount of crops: Leaving more land for other uses such as wildlife reserves and also saving trees, which would otherwise be cleared for agricultural purposes.
                    Less water usage: In fact, less than 10% the amount that would be required for growing in soil. The only water lost with hydroponics is through evaporation, or occasional changes to the feeding solution.
                    60% less fertilizer is required: The hydroponic growing solution circulates through the plant’s roots, the plant absorbs what they need, and you never lose anything due to settling or crystallizing in the soil
                </p>

                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".buildings">Buildings</button>
                    <button class="button" data-filter=".interior">Interior Design</button>
                    <button class="button" data-filter=".isolation">Isolation</button>
                    <button class="button" data-filter=".plumbing">Plumbing</button>
                </div>
                <!-- Portfolio grid -->		
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item grid-item--width2 grid-item--height2 buildings plumbing interior">
                        <img alt="" src="images/highligh_img.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/highligh_img.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item buildings interior isolation">
                        <img alt="" src="images/portfolio1.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>   
                    </div>

                    <div class="grid-item interior plumbing isolation">
                        <img alt="" src="images/portfolio2.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item isolation buildings">
                        <img alt="" src="images/portfolio3.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>

                    <div class="grid-item plumbing isolation">
                        <img alt="" src="images/portfolio4.jpg" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="images/portfolio4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                            <a href="#"><span class="fa fa-link"></span></a>
                        </div>  
                    </div>
                </div><!-- Portfolio grid end -->
            </div>
        </section><!-- Portfolio end -->

        <!-- Testimonial -->
        <section id="testimonial">
            <div class="container text-center testimonial_area">
                <h2>Customer Reviews</h2>
                <p>
                    For no one rejects, dislikes, or avoids pleasure itself, because it is pleasure, 
                    but because they do not know how to pursue pleasure rationally encounter consequences that are the sorrows of those who have. 
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <p>Really an impressive work on automation and agriculture binded together. Hydroponic will be an importent technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                            </div>
                            <img src="images/testimonial_img1.png" alt="Testimonial" />
                            <p class="worker_name">Shorubi</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Really an impressive work on automation and agriculture binded together. Hydroponic will be an importent technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                            </div>
                            <img src="images/testimonial_img2.png" alt="Testimonial" />
                            <p class="worker_name">Shyam Ravi</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>Really an impressive work on automation and agriculture binded together. Hydroponic will be an importent technology in bio IT field very soon. The system fullfill neccery requirements for hydroponics. Wish your all the best THROUGHTOUT Into Green team.</p>
                            </div>
                            <img src="images/testimonial_img1.png" alt="Testimonial" />
                            <p class="worker_name">Amri</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Testimonial end -->

        <!-- Contact form -->
        <section id="contact_form">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Do you have any questions?</h2>
                        <h2 class="second_heading">Feel free to contact us!</h2>
                    </div>
                    <form name="" role="form" class="form-inline text-right col-md-6" >
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="msg" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn submit_btn" onclick="">Submit</button>
                    </form>				
                </div>
            </div>
        </section><!-- Contact form end -->
	
        <!-- Footer -->
        <footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-7">
                        <div class="footer_item">
                            <h4>About Company</h4>
                            <a  href="/ram"><img class="logo" style="width:250px;" src="images/throughout.png" alt="Construction" /></a>
                            <p>
                                By providing constant and readily available nutrition, hydroponics allows plants to grow up to 50% faster than they would in soil. 
                                Also, fresh produce can be harvested from a hydroponic garden throughout the year.
                            </p>

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
                                <li><a href="https://www.youtube.com/watch?v=6kUm_I7bLYw"><span class="date">20 <small>AUG</small></span>Describtion for Hydroponics</a></li>
                                <li><a href="https://www.youtube.com/watch?v=V1PcgtWAEnU"><span class="date">12 <small>SEP</small></span>Auto Farm</a></li>
                                <li><a href="https://www.youtube.com/watch?v=q1ieL7x3AMg"><span class="date">27 <small>SEP</small></span>Auto Farm Robots</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-5">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><a href=""><span class="fa fa-map-marker"></span>Vavuniya Campus, University of Jaffna, Park Road, Vavuniya</a></li>
                                <li><a href=""><span class="fa fa-envelope"></span> nkbram95@gmail.com</a></li>
                                <li><a href=""><span class="fa fa-mobile"></span><p>+94 076 7000 249 </a></li>
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
                    <a target="_blank" href="https://www.google.com/search?q=Bavaram+Karunaaharan&oq=Bavaram+Karunaaharan&aqs=chrome.0.69i59l2j69i60j69i61j69i60.4759j1j1&sourceid=chrome&ie=UTF-8">Karunaaharan Bavaram</a> 
                    in 2018. All Rights Reserved
                </p>
            </div><!-- Footer bottom end -->
        </footer><!-- Footer end -->
        <script>
            window.onbeforeunload = function(){
                alert("confirm exit is being called");
            }
           
        </script>
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
    </body>	
</html>	