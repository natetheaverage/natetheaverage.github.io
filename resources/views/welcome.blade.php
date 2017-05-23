<!doctype html>
<html lang="en">
    @include('includes.head')
    <body>
        <div id="app-container" class="container-fluid">
            @include('includes.loginlinks')
            <div class="row">
                <div class="logo">
                    @include('parts.svg-logo')
                </div>
            </div>
            <div class="body-content text-center">
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
                <div class="row">
                    {{-- <video
                        id="my-player"
                        class="video-js"
                        controls
                        preload="auto"
                        poster="//vjs.zencdn.net/v/oceans.png"
                        data-setup='{}'>
                    <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>
                    <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
                    <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
                    <p class="vjs-no-js">
                        To view this video please enable JavaScript, and consider upgrading to a
                        web browser that
                        <a href="http://videojs.com/html5-video-support/" target="_blank">
                        supports HTML5 video
                        </a>
                    </p>
                    </video> --}}
                </div>
                
                <div class="row ">
                <main-menu></main-menu>
                    {{-- @include('includes.menu') --}}
                </div>
            </div>

           <!--  <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> -->
        
        
        </div>
        
        <script type="text/javascript" src="js/app.js"></script>
        
    </body>
   
</html>
