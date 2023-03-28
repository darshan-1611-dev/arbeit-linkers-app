@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('images/logo-black-svg.svg') }}" class="logo" alt="ArbeitLinkers Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
