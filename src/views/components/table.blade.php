@php
    /* @var \Illuminate\View\ComponentAttributeBag $attributes */
@endphp

@if($collection instanceof \Illuminate\Pagination\LengthAwarePaginator)
    @push('mva-paginate')
        <x-mva-paginate :collection="$collection"></x-mva-paginate>
    @endpush
@endif

@stack('mva-paginate')

<div class="table-responsive">
    <table {{ $attributes->merge(['class' => config('view-admin-components.table_classes')]) }}>
        @if($collection->isNotEmpty())
            <caption style="caption-side:top;">
                Всего:
                @if($collection instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
                    {{ $collection->total() }}
                @elseif($collection instanceof \Illuminate\Support\Collection)
                    {{ $collection->count() }}
                @endif
            </caption>
        @endif
        <thead>
        <tr>
            @foreach($headers as $header)
                <th scope="col">{{ $header }}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @if($collection->isNotEmpty())
            {{ $slot }}
        @else
            <tr>
                <td colspan="{{ $countHeaders }}">
                    <x-mva-alert>{{ $alert }}</x-mva-alert>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
</div>

@stack('mva-paginate')
