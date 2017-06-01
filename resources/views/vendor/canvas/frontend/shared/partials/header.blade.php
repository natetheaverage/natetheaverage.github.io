<div class="container-fluid" id="head-c">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <h1><a href="{!! route('canvas.blog.post.index') !!}">
              <img src="/storage/site-assets/NTA-logo/NTA-sm-blk-120x90.png">
            </a></h1>
            <h3>{!! \Canvas\Models\Settings::blogSubTitle() !!}</h3>

            
        </div>
        <p class="page-menu-links-container mgn-top mgn-btm col-sm-8 col-sm-offset-2">
          @include('parts.main-links')
        </p>
    </div>
</div>
