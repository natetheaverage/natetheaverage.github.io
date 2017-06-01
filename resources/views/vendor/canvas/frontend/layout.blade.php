<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
      <div id="app-container">
        @include('canvas::frontend.shared.partials.header')
        @yield('content')
        @yield('unique-js')
        @include('canvas::frontend.shared.partials.user-generated-js')
        @include('canvas::frontend.shared.partials.footer')
      </div>
    </body>
</html>
