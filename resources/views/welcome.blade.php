<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
    {{-- {!! dd($posts) !!} --}}
      <div id="app-container">
        <div class="container-fluid">
            <div>
              <a href="{!! route('canvas.blog.post.index') !!}" class="btn pull-right">Full Directory</a>
            </div>
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
        <div class="video-player">
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
      <main-menu></main-menu>
            
    
        
        
       
        
        
      </div>
      @include('canvas::frontend.shared.partials.footer')
      
      <script type="text/javascript" src="js/app.js"></script>
      {{-- <script src="http://vjs.zencdn.net/5.19.2/video.js"></script> --}}
      {{-- <script src="../node_modules/video.js/dist/video.js"></script>
      <script src="../dist/Youtube.js"></script> --}}
    </body>
   
</html>
