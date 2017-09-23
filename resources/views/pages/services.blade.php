@extends('canvas::frontend.layout')

@section('content')
<div class="row">
    <p class="col-sm-8 col-sm-offset-2 lead text-info text-center">
       As I am a being of many disiplines you will need to choose your desire.
    </p>
</div>

<div class="row">
    <p class="page-menu-links-container mgn-btm-lg col-sm-8 col-sm-offset-2">
        @include('parts.service-links')
    </p>
</div>

@stop