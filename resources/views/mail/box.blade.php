<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.header')
    </head>
    <body data-spy="scroll" style="padding:150px 60px">
    {{-- Preloader  --}}
        <div id="preloader">           
            <div id="status">
                <div class="loadicon icon-moustache wow tada infinite" data-wow-duration="8s"></div>
            </div>
        </div>
        <div class="header">
            <header>

                @include('includes.navbar')        
                 
            </header>{{--header end --}}  
        </div>
        <div class="container">
            <div class="content">
              
              {!! $from !!}
              {!! $to !!}
              {!! $subject !!}
              {!! $content !!}

            </div>
        </div>
        <div class="footer">
            {{-- @include('includes.footer') --}}
        </div>

    {{-- jQuery (necessary for Bootstrap's JavaScript plugins)  --}}
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    {{-- Include all compiled plugins (below), or include individual files as needed  --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    {{--Other necessary scripts --}}
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/befolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script> 
    </body>
</html>
