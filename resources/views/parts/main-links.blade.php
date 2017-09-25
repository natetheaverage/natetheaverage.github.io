@if( ! Request::is('/'))
<a href="{!! route('nta.welcome') !!}" class="page-menu-links">Home</a>
@endif
@if( Request::is('store'))
<a href="{!! route('nta.store') !!}" class="page-menu-links active">Shop</a>
@else
<a href="{!! route('nta.store') !!}" class="page-menu-links ">Shop</a>
@endif
@if( Request::is('services') || Request::is('services/*'))
<a href="{!! route('nta.services') !!}" class="page-menu-links active">Services</a>
@else
<a href="{!! route('nta.services') !!}" class="page-menu-links">Services</a>
@endif
@if( Request::is('details'))
<a href="{!! route('nta.details') !!}" class="page-menu-links active">Details</a>
@else
<a href="{!! route('nta.details') !!}" class="page-menu-links">Details</a>
@endif
@if( Request::is('fun'))
<a href="{!! route('nta.fun') !!}" class="page-menu-links active">Fun</a>
@else
<a href="{!! route('nta.fun') !!}" class="page-menu-links">Fun</a>
@endif
@if( Request::is('services'))
<div class="container-fluid" id="head-c">
    <div class="row">
        <p class="page-menu-links-container mgn-btm-lg col-sm-8 col-sm-offset-2">
            @include('parts.service-links')
        </p>
    </div>
</div>
@endif