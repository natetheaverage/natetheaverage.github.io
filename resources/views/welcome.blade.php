<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
{{-- @include('og-title', \Canvas\Models\Settings::blogTitle()) --}}
{{-- @include('twitter-title', \Canvas\Models\Settings::blogTitle()) --}}
{{-- @include('og-description', \Canvas\Models\Settings::blogDescription()) --}}
{{-- @include('twitter-description', \Canvas\Models\Settings::blogDescription()) --}}
      <div id="app-container">
        <div class="container-fluid">
            {{-- @include('includes.loginlinks') --}}
            <div class="row">
                <div class="logo">
                    @include('parts.svg-logo')
                </div>
            </div>
          </div>
          <div class="body-content container-flui text-center">
                <div class="row text-center ">
                    <div class="pre-title ">
                    Hi I'm Nathan Leite
                    </div>
                    <div class="pre-title">
                        AKA
                    </div>
                    <div class="title text-center">
                        NateTheAverage
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
              <video
                id="my-player"
                class="video-js"
                controls
                preload="auto"
                poster="//vjs.zencdn.net/v/oceans.png"
                data-setup='{}'>
              <source src="storage/video/stunt.mp4" type="video/mp4"></source>
              {{-- <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
              <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
              <p class="vjs-no-js"> --}}
                To view this video please enable JavaScript, and consider upgrading to a
                web browser that
                <a href="http://videojs.com/html5-video-support/" target="_blank">
                  supports HTML5 video
                </a>
              </p>
            </video>
            <div class="container-fluid">

            <main-menu></main-menu>
            
    
        
        
       
        @include('canvas::frontend.shared.partials.footer')
        <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
        <script type="text/javascript" src="js/app.js"></script>
      </div>
    </body>
   
</html>
