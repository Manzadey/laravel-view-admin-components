@php
    /* @var \Illuminate\View\ComponentAttributeBag $attributes */
@endphp

<tr {{ $attributes->merge(['class' => $activeClasses]) }}>
    @if($sn !== null)
        <td style="width:1%">{{ $sn }}</td>
    @endif
    {{ $slot }}
</tr>
