{{-- production --}}

@extends('canvas::frontend.layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Listings of products available</p>
                @include('canvas::frontend.blog.partials.tag')
                {{-- @include('canvas::frontend.blog.partials.posts') --}}
                {{-- @include('canvas::frontend.blog.partials.paginate-index') --}}
            </div>
        </div>
    </div>
@stop