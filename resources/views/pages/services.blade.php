@extends('canvas::frontend.layout')

@section('content')
   
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a name="performer"><h2>Preformance Art</h2></a>
                @include('pages.performance.performer')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a name="costumery"><h2>Costume Design</h2></a>
                @include('pages.costume.costumery')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a name="prototype"><h2>Prototyping</h2></a>
                @include('pages.technology.prototype')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a name="puppetry"><h2>Puppet Design</h2></a>
                @include('pages.costume.puppetry')
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <a name="education"><h2>Education Services</h2></a>
                @include('pages.performance.education')
            </div>
        </div>
    

@stop