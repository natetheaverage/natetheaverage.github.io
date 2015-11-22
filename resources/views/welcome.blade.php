<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
    </head>
    <body data-spy="scroll">
    <!-- Preloader -->
        <div id="preloader">           
            <div id="status">
                <div class="loadicon icon-moustache wow tada infinite" data-wow-duration="8s"></div>
            </div>
        </div>
        <div class="header">
            
            <header>               
                <!-- ===========================
                HERO AREA
                =========================== -->
                <div id="hero">           
                    <div class="container herocontent">         
                        <h2 class="title wow fadeIndown" data-wow-duration="2s">NateTheAverage is...</h2>
                    </div>
                    
                    <!-- Featured image on the Hero area -->
                    <img class="heroshot wow bounceInUp" data-wow-duration="4s" src="img/hero-img.png" alt="Featured Work">            
                </div><!--HERO AREA END-->        
                 
                <!-- ===========================
                 NAVBAR START
                 =========================== -->
                  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                       <div class="container">
                           
                              <div class="navbar-header">
                               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                   <span class="sr-only">Toggle navigation</span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                   <span class="icon-bar"></span>
                                </button>
                                
                                   <a class="navbar-brand" href="#hero">
                                    <!-- Replace Drifolio Bootstrap with your Site Name and remove icon-grid to remove the placeholder icon -->
                                    <span class="brandicon icon-grid"></span>
                                    <span class="brandname">NTA</span>
                                </a>
                            </div>

                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                                <li><a href="#about"><span class="btnicon icon-user"></span>About</a></li>
                                <li><a href="#services"><span class="btnicon icon-cup"></span>Services</a></li>
                                <li><a href="#portfolio"><span class="btnicon icon-rocket"></span>Portfolio</a></li>
                                <li><a href="#testimonials"><span class="btnicon icon-bubble"></span>Testimonials</a></li>
                                
                                <!--don't forget to replace my email address below with yours-->
                                <li><a href="mailto:natetheaveage@gmail.com"><span class="btnicon icon-envelope-open"></span>Contact</a></li>
                                {{-- <li class="active"><a href=""><span class="btnicon icon-cloud-download"></span>Download CV</a></li> --}}
                            </ul>
                        
                        </div><!--.nav-collapse -->
                    </div>
                </nav><!--navbar end-->        
             </header><!--header end-->  
        </div>
        <div class="container">
            <div class="content">
                  

    <!-- ===========================
    FEATURED CLIENTS SECTION START
    =========================== -->
     <div id="clients">
         <div class="container">
             <div class="col-sm-2">
                 <h4>Some clients:</h4>
             </div>
             <div class="col-sm-10">
                 <ul><!--CLIENTS LOGO-->
                    <li><img src="img/dn-logo.png" alt="Payoneer"></li>
                    <li><img src="img/gofast.png" alt="Amazon"></li>
                    <li><img src="img/comcast_logo.png" alt="Elance-oDesk"></li>
                    <li><img src="img/NCM-200-500.jpg" alt="Curb Envy"></li>                     
                    <li><img src="img/Visit_Denver_450x450.png" alt="Curb Envy"></li>
                    <li><img src="img/ultra.png" alt="Payoneer"></li>
                    <li><img src="img/thebox.png" alt="Amazon"></li>
                    <li><img src="img/The-Act-300x150.png" alt="Elance-oDesk"></li>
                    <li><img src="img/insomniac.png" alt="Curb Envy"></li>                     
                    <li><img src="img/tiff-vs-sundance.jpg" alt="Curb Envy"></li>

                 </ul><!--CLIENTS LOGO END-->
             </div>
         </div>
         <hr><!-- SECTION SEPARETOR LINE -->
     </div><!--FEATURED CLIENTS SECTION END-->
     
    
    <!-- ===========================
    ABOUT SECTION START
    =========================== -->
     <div id="about" class="container">
        
        <!-- LEFT PART OF THE ABOUT SECTION -->
         <div class="col-md-8">
            <div class="row">
             <h2 class="wow fadeInDown" data-wow-duration="2s">Nathan Leite of Denver Colorado</h2>

             <h4 class="wow fadeInUp" data-wow-duration="3s">A Full-Stack LAMP Developer and  Theatrical Director!</h4>
             
             <p class="wow fadeInDown" data-wow-duration="3s">HTML – CSS - PHP – JS – MYSQL - LARAVEL – VUE – FLASH - MOTION – UX – GRAPHIC – WIREFRAME – BACKEND - LOGO - INOVATION – RESTFULL – AGILE – SOLID </p>
             <p class="wow fadeInDown" data-wow-duration="3s">COSTUME – SCRIPT - DIRECTION – DANCE – VARIATY ARTS - SPECIAL FX MAKEUP –  MASKS – INSTALATION ART - PROP - DANCE – STILT – IMPROV – SKIT – CIRCUS - ATMOSPHEARIC</p>
             <p class="wow fadeInDown" data-wow-duration="3s">UNIQUE SOLUTIONS – PATIENCS – DRIVE – KEEP BOUNCING</p>
             <!-- RIGHT PART OF THE ABOUT SECTION -->
            <div class="wow slideInLeft" data-wow-duration="1s">
                <img src="img/softwares.png" alt="Software Nate uses">
            </div><!-- RIGHT PART OF THE ABOUT SECTION END -->  
             <a class="dribbble-follow-button" href="#"></a>
             </div> <!-- ABOUT INFO END -->
             
            
            <div class="myapps row">
                
            </div>
         </div><!-- LEFT PART OF THE ABOUT SECTION END -->
        <!--Left part end-->
         
         <!-- RIGHT PART OF THE ABOUT SECTION -->
         <div class="col-md-4 wow fadeInUp myphoto" data-wow-duration="4s">
             <img src="img/user.png" alt="Nathan Leite">
         </div><!-- RIGHT PART OF THE ABOUT SECTION END -->        
     </div><!-- ABOUT SECTION END -->
        
    <hr><!-- SECTION SEPARETOR LINE -->
        
    <!-- ===========================
    SERVICE SECTION START
    =========================== -->
    <div id="services" class="container">
       
        <!-- SERVICE SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <span class="bigicon icon-diamond"></span>
            <h3>Stuff I do, and could for you</h3>
            <hr class="separetor">
         </div><!--SERVICE SECTION HEADING END-->
         
        <!-- SERVICE ITEMS START -->
        <div class="row">
               <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s1.png" alt="">
                   <h4>Full-Stack Web Development</h4>
                   <p>From sketch to launch I can take your concept and get it online for you.  </p>
                </div> <!-- ITEM END -->

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s2.png" alt="">
                   <h4>Live Entertainment Direction</h4>
                   <p>Interested in a wonderfuly unique performance peice for your event? Got you covered!</p>
                </div> <!-- ITEM END -->

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s3.png" alt="">
                   <h4>Web Maintinace</h4>
                   <p>Someone else built you something and is unable to continue work on it. No problem I can get right in there and keep it up.</p>
                </div> <!-- ITEM END -->

               <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s4.png" alt="">
                   <h4>Character Creation & Performance</h4>
                   <p>Mascots, Collaberations, Themed Groups. I particulaly love an opperyunity to do some mask sculpting.</p>
                </div> <!-- ITEM END -->

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s5.png" alt="">
                   <h4>Add Me to Your Team </h4>
                   <p>Looking for just one piece of the puzzle? I play well with others.</p>
                </div> <!-- ITEM END -->

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-duration="3s">
                   <img src="img/s6.png" alt="">
                   <h4>Performance Guide</h4>
                   <p>Let me train you and your crew in some improv skills and help you to brainstorm out of the box performance concepts.</p>
                </div> <!-- ITEM END -->
        </div><!-- SERVICE ITEMS END-->
    </div><!-- SERVICE SECTION END -->
    
    <!-- ===========================
    PORTFOLIO SECTION START
    =========================== -->
    <div id="portfolio">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
          <span class="bigicon icon-rocket"></span>
           <h3>A few recent works</h3>
           <hr class="separetor">            
        </div><!-- PORTFOLIO SECTION HEAD END -->   
        
        <!-- PORTFOLIO ITEMS START -->
        <div class="portfolioitems container">
            <ul><div id="shotsByPlayerId"> </div></ul><!--REFER TO THE js/drifolio.js-->
        </div><!-- PORTFOLIO ITEMS END -->
        
        <!--Replace the URL below with your dribbble profile URL-->
        <a class="btn btn-default wow fadeInUp" href="http://dribbble.com/srizon" role="button">
            <span class="btnicon icon-social-dribbble"></span>
            <span class="button_text">View all items</span>
        </a> 
    </div><!-- PORTFOLIO SECTION END -->

    <!-- ===========================
    TESTIMONIAL SECTION START
    =========================== -->
    <div id="testimonials" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <span class="bigicon icon-bubbles"></span>
           <h3>Stuff said about me</h3>
           <h4>Get yourself a cup of tea and have a seat next to a cozy fire, settle in for this next chapter.</h4>
           <hr class="separetor">            
        </div><!-- TESTIMONIAL SECTIONHEAD END -->
        
        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <img src="img/dan.jpg" alt="Dan">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>He has a great sense of creativity and passion for his craft. Nathan was always willing to put in the time and effort to complete his projects under tight and ever-changing deadlines.  He is always up-to-date with the latest technologies and trends in design and development. He exhibited great patience when it came to working with the non-technical members of our team.  He was able to communicate with them in a manner in which they could relate. </p>                        
                    </blockquote>
                    <h5>Julie Lavorine</h5>
                    <p>Manager of Training & Development, DISH Network</p>
                </div>                
            </div><!-- 1ST TESTIMONIAL ITEM END -->
            
            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/bill.jpg" alt="Bill">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>Upon his arrival at Lion, Nathan bonded with our team almost immediately and quickly became an asset and key player in the work flow of our group.  We soon discovered that Nathan is a dedicated and adept problem solver.  Many times someone in our group came to him with a problem that they were stuck on and time and time again he came up with timely, inventive solutions.  His Flash skills are top notch; having seen him work on dozens of projects, each with very specific and challenging specifications, I don’t believe that there is anything Nathan can’t accomplish with Flash. Over the time he worked under me, he became my “go-to guy” when I needed a difficult task done. </p>
                    </blockquote>
                    <h5>Brady Fossenbell</h5>
                    <p>Team Lead at Lion Mortgage Technology Solutions Inc.</p>
                </div>                
            </div><!-- 2ND TESTIMONIAL ITEM END -->
            
            <!-- 3RD TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/eric.png" alt="Eric">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>He brings to the table a formidable skill set: he is a talented designer and has worked hard to become very skilled with Flash. He was also extremely forthright in sharing his extensive knowledge with the team. Nathan is calm under fire and was very helpful in relieving the team of many projects when they were heavily burdened.  </p>                        
                    </blockquote>
                    <h5>Marianne Manthey</h5>
                    <p>Manager UI Designer, Dice</p>
                </div>                
            </div><!-- 3RD TESTIMONIAL ITEM END -->
            
            <!-- 4TH TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <img src="img/ramil.jpg" alt="Ramil">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>"Mirror Man exactly what he sounds like, and a festival staple."</p>               
                    </blockquote>
                    <h5>Rolling Stone Magazine</h5>
                    <p>In 2012 article covering EDC Music festival</p>
                </div>                
            </div><!-- 4TH TESTIMONIAL ITEM END -->
        </div>        
    </div><!-- TESTIMONIAL SECTION END -->
       
            </div>
        </div>
        <div class="footer">
            @include('includes.footer')
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/befolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script> 
    </body>
</html>
