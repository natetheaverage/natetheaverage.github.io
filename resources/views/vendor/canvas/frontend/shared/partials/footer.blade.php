<div class="container-fluid">
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
    <div style="text-align:center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <hr>
                <a href="https://www.instagram.com/natetheaverage/" target="_blank" id="social"><i class="fa fa-fw fa-instagram text-muted" style="font-size: 14px"></i></a>
            
                <a href="http://facebook.com/natetheaverage" target="_blank" id="social"><i class="fa fa-fw fa-facebook text-muted" style="font-size: 14px"></i></a>
           
                <a href="http://github.com/natetheaverage" target="_blank" id="social"><i class="fa fa-fw fa-github text-muted" style="font-size: 14px"></i></a>
            
              <a href="http://linkedin.com/in/natetheaverage" target="_blank" id="social"><i class="fa fa-fw fa-linkedin text-muted" style="font-size: 14px"></i></a>

              <a href="http://twitter.com/natetheaverage" target="_blank" id="social"><i class="fa fa-fw fa-twitter text-muted" style="font-size: 14px"></i></a>

              <a href="https://www.etsy.com/shop/natetheaverage/" target="_blank" id="social"><i class="fa fa-fw fa-etsy text-muted" style="font-size: 14px"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <p class="small"><a href="mailto:natetheaverage@gmail.com" target="_blank">NateTheAverage</a> &#183; <a href="{!! route('canvas.admin') !!}"><i class="fa fa-lock"></i> Client Login</a>
                </p>
                
            </div>
        </div>
    </div>
</div>


@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif