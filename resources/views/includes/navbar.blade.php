{{-- ===========================
NAVBAR START
===========================  --}}
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
                  {{-- Replace Drifolio Bootstrap with your Site Name and remove icon-grid to remove the placeholder icon  --}}
                  <span class="brandicon icon-grid"></span>
                  <span class="brandname">NTA</span>
              </a>
          </div>

      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">{{--YOUR NAVIGATION ITEMS STRAT BELOW --}}
              <li><a href="#about"><span class="btnicon icon-user"></span>About</a></li>
              <li><a href="#services"><span class="btnicon icon-cup"></span>Services</a></li>
              <li><a href="#portfolio"><span class="btnicon icon-rocket"></span>Portfolio</a></li>
              <li><a href="#testimonials"><span class="btnicon icon-bubble"></span>Testimonials</a></li>
              
              {{--don't forget to replace my email address below with yours --}}
              <li><a href="mailto:natetheaveage@gmail.com"><span class="btnicon icon-envelope-open"></span>Contact</a></li>
              {{-- <li class="active"><a href=""><span class="btnicon icon-cloud-download"></span>Download CV</a></li> --}}
          </ul>
      
      </div>{{--.nav-collapse  --}}
  </div>
</nav>{{--navbar end --}}  