@if($collection instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
    <div class="d-flex justify-content-center">
        {{ $collection->appends(request()->query())->links() }}
    </div>
@endif
