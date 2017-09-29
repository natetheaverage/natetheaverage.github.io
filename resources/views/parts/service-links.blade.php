@if(Request::is('services/for-hire'))
<a href="{!! route('nta.for-hire') !!}" class="page-sub-menu-links active">Performance Art</a>
@else
<a href="{!! route('nta.for-hire') !!}" class="page-sub-menu-links">Performance Art</a>
@endif
@if(Request::is('services/costumery'))
<a href="{!! route('nta.costumery') !!}" class="page-sub-menu-links actve">Costume Design</a>
@else
<a href="{!! route('nta.costumery') !!}" class="page-sub-menu-links">Costume Design</a>
@endif
@if(Request::is('services/prototyping'))
<a href="{!! route('nta.prototyping') !!}" class="page-sub-menu-links active">Prototyping</a>
@else
<a href="{!! route('nta.prototyping') !!}" class="page-sub-menu-links">Prototyping</a>
@endif
@if(Request::is('services/puppetry'))
<a href="{!! route('nta.puppetry') !!}" class="page-sub-menu-links active">Puppetry</a>
@else 
<a href="{!! route('nta.puppetry') !!}" class="page-sub-menu-links">Puppetry</a>
@endif
@if(Request::is('services/education'))
<a href="{!! route('nta.fun') !!}" class="page-sub-menu-links active">Education</a>
@else
<a href="{!! route('nta.fun') !!}" class="page-sub-menu-links">Education</a>
@endif