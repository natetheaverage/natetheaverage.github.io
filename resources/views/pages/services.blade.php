@extends('canvas::frontend.layout')

@section('content')
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#performer"><h2>Preformance Art</h2></a>
        <p>
        @include('pages.performance.performer')
        </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#Costumery"><h2>Costume Design</h2></a>
        <p>
        @include('pages.costume.costumery')
        </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#Prototype"><h2>Prototyping</h2></a>
        <p>
        @include('pages.technology.prototype')
        </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#Puppetry"><h2>Puppet Design</h2></a>
        <p>
        @include('pages.costume.puppetry')
        </p>
    </div>
</div>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
    <a href="#education"><h2>Education Services</h2></a>
        <p>
        @include('pages.performance.education')
        </p>
    </div>
</div>
@stop