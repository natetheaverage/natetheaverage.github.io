<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
      <div id="app-container">
        @include('canvas::frontend.shared.partials.header')
        @yield('content')
 
      </div>
        @yield('unique-js')
        @include('canvas::frontend.shared.partials.user-generated-js')
        @include('canvas::frontend.shared.partials.footer')
      
    </body>
</html>
