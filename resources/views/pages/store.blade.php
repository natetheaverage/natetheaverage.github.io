@extends('canvas::frontend.layout')

@section('content')
<div class="container-fluid" id="post">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <etsy-store></etsy-store>
        </div>
    </div>
</div>

@stop

@section('unique-js')
  <script type="text/javascript" src="js/app.js"></script>
@endsection
