@php
    /* @var \Illuminate\Support\HtmlString $slot */
@endphp

<div class="alert alert-{{ $type }} text-center">{{ $slot->isNotEmpty() ? $slot->toHtml() : __('Данные отсутствуют') }}</div>
