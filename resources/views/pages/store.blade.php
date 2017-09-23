@extends('canvas::frontend.layout')

    <p class="page-menu-links-container mgn-btm-lg col-sm-8 col-sm-offset-2">
        @include('parts.main-links')
    </p>

@section('content')

<div class="container-fluid" id="app-container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <etsy-store></etsy-store>
        </div> 
    </div>
</div>

@stop

@section('unique-js')
  <script type="text/javascript" src="js/app.js"></script>
@endsection
