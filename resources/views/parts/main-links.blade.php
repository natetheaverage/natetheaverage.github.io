@if( ! Request::is('/'))
<a href="{!! route('nta.welcome') !!}" class="page-menu-links">Home</a>
@endif
@if( ! Request::is('store'))
<a href="{!! route('nta.store') !!}" class="page-menu-links">Shop</a>
@endif
@if( ! Request::is('services/*'))
<a href="{!! route('nta.services') !!}" class="page-menu-links">Services</a>
@endif
@if( ! Request::is('details'))
<a href="{!! route('nta.details') !!}" class="page-menu-links">Details</a>
@endif
@if( ! Request::is('fun'))
<a href="{!! route('nta.fun') !!}" class="page-menu-links">Fun</a>
@endif