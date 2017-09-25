<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
      <div id="app-container">
        <div class="container-fluid">
          <div class="top-right">
            @if($user)
              <a href="{!! route('canvas.admin') !!}" class="btn btn-default">Controls</a>
              <a href="{!! route('canvas.blog.post.index') !!}" class="btn btn-default">List All Pages</a>
            @endif
          </div>


        @if (Cookie::get('average_session'))
        <p class="page-menu-links-container mgn-top-md mgn-btm col-sm-8 col-sm-offset-2">
          @include('parts.main-links')
        </p>
        @endif

          <div class="body-content container-fluid text-center col-sm-12">
            @if (Cookie::get('average_session') == "") 
            <div class="row">
                <div class="logo">
                    @include('parts.svg-logo')
                </div>
            </div>
            @endif
            <div class="row pad-top-md text-center ">
                <div class="pre-title ">
                Hi I'm Nathan Leite
                </div>
                <div class="pre-title">
                    AKA
                </div>
                <div class="title text-center">
                    NateTheAverage
                </div>
                <p class="description mgn-top mgn-btm-lg col-sm-8 col-sm-offset-2 ">
                  A <a href="https://wikipedia.org/wiki/Polymath" target="_blank" title="a person whose expertise spans a significant number of different subject areas; such a person is known to draw on complex bodies of knowledge to solve specific problems.">Polymath</a> in training.<br />
                  You have happened upon my professional portfolio. Here you will find documentation of my life experience, items for sale, as well an index of my professional services.
                </p>
                @if (Cookie::get('average_session') == "")
                <p class="page-menu-links-container mgn-btm-lg col-sm-8 col-sm-offset-2">
                  @include('parts.main-links')
                </p>
                @endif
                            
            </div> 
          </div>
          
          <div class="row">
            <div class="container-fluid col-sm-12">
              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                      @include('canvas::frontend.blog.partials.tag')
                      @include('canvas::frontend.blog.partials.posts')
                      @include('canvas::frontend.blog.partials.paginate-index')
                  </div>
              </div>
            </div>
          </div>


          <div class="row video-container">
          <div class="center title">FEATURED VIDEO 
          </div>
            <div class="video-player">
            <div class="pre-title ">
                My Quad Swarm -  
                </div>
                <h4>First Unmaned flight, still handeled by computer sending hand coded xyz cordinates.</h4>
              <video
                id="HomePlayer"
                class="video-js vjs-default-skin"
                height="510"
                controls
                data-setup='{"techOrder": ["youtube"],"sources": [{"type": "video/youtube", "src": "https://www.youtube.com/watch?v=u2WMtua24SY"}]}'
                >
              </video>
            </div>
          </div>
        </div>
      
        

      {{--  removed menu cause it is full of crud   --}}
      {{--  <main-menu></main-menu>  --}}
      </div> 
    </div>
    @include('includes.footer')
    
    <script type="text/javascript" src="js/app.js"></script>
    {{-- <script src="http://vjs.zencdn.net/5.19.2/video.js"></script>
    <script src="../node_modules/video.js/dist/video.min.js"></script>
    <script src="../node_modulesdist/Youtube.min.js"></script>
    <script src="../node_modules/videojs-chromecast/dist/videojs-chromecast.js"></script> --}}

    
  </body>
</html>
