@php
    /* @var \Illuminate\View\ComponentAttributeBag $attributes */
@endphp

<tr {{ $attributes->merge(['class' => $activeClasses]) }}>
    @if($sn !== null)
        <td>{{ $sn }}</td>
    @endif
    {{ $slot }}
</tr>
