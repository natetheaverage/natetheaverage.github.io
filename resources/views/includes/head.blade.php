<head>
        <meta charset="utf-8">
        {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> --}}
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
       
        <title>NateTheAverage</title>

        @include('canvas::frontend.shared.partials.meta')
        @include('canvas::frontend.shared.partials.css')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200" rel="stylesheet" type="text/css">

        <!-- js video player -->
        <link href="//vjs.zencdn.net/5.19/video-js.min.css" rel="stylesheet">
        {{-- <script src="//vjs.zencdn.net/5.19/video.min.js"></script> --}}

         <!-- <script type="text/javascript" src=js/svgAnime.js></script> -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/simple-scrollbar.css" rel="stylesheet" type="text/css">
    </head>