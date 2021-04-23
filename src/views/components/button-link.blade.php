@php
    /* @var \Illuminate\View\ComponentAttributeBag $attributes */
@endphp
<a {{ $attributes->merge(['class' => "btn btn-{$color}", 'href' => $link]) }}>{{ $name }}</a>
