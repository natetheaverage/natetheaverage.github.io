@extends('canvas::frontend.layout')

@section('content')

<div class="row">
    <p class="page-sub-menu-links-container mgn-btm-lg col-sm-8 col-sm-offset-2">
        @include('parts.service-links')
    </p>
</div>

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <p >
            Puppet Building
            Muppets start at $500 for basic human replica
            Chineese dragons start at $1,500 for a basic model
            Animatronics start $2,500 
        </p>
    </div>
</div>
@stop