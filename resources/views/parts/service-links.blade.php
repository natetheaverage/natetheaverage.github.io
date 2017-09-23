@if( ! Request::is('services/performance'))
<a href="{!! route('nta.welcome') !!}" class="page-menu-links">Performance Art</a>
@endif
@if( ! Request::is('services/costume'))
<a href="{!! route('nta.store') !!}" class="page-menu-links">Costume Design</a>
@endif
@if( ! Request::is('services/prototyping'))
<a href="{!! route('nta.services') !!}" class="page-menu-links">Prototyping</a>
@endif
@if( ! Request::is('services/puppetry'))
<a href="{!! route('nta.details') !!}" class="page-menu-links">Puppetry</a>
@endif
@if( ! Request::is('services/education'))
<a href="{!! route('nta.fun') !!}" class="page-menu-links">Education</a>
@endif