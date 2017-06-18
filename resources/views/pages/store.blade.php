@extends('canvas::frontend.layout')

@section('content')
<div class="container-fluid" id="post">
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
