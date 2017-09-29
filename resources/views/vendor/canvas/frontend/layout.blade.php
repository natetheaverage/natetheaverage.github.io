<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        <div id="app-container">
            <div class="menu-case">
                <main-menu></main-menu>
            </div>
            <div class="content-case">
                @include('canvas::frontend.shared.partials.header')
                @yield('content')
            </div>
        </div>
            @yield('unique-js')
            @include('canvas::frontend.shared.partials.user-generated-js')
            @include('canvas::frontend.shared.partials.footer')
    </body>
</html>
