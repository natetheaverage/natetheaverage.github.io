<div class="container-fluid">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
    <div style="text-align: center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                <p class="small"><a href="http://natetheaverage.com" target="_blank">NateTheAverage</a> &#183; <a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock"></i> Client Login</a>
                </p>
            </div>
        </div>
    </div>
</div>


@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif