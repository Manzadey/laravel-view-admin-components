@php
    /* @var \Illuminate\Database\Eloquent\Model $model */
@endphp

@if($show())
    <a href="{{ route("admin.$route.show", $model) }}" class="btn btn-info btn-sm text-white">
        ◯
    </a>
@endif

@if($edit())
    <a href="{{ route("admin.$route.edit", $model) }}" class="btn btn-primary btn-sm">
        ⌗
    </a>
@endif

@if ($destroy())
    <form
        class="d-inline-block"
        action="{{ route("admin.$route.destroy", $model) }}" id="form-model-delete-{{ $model->id }}" onsubmit="return confirm('Удалить?')"
        method="POST"
    >
        <input type="hidden" name="_method" value="DELETE">
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Ⓧ</button>
    </form>
@endif
