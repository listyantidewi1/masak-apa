<ul>
@foreach($origin as $or)
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <li>{{ $or->origin }}</li>
            </div>
            <div class="col-lg-8">
                <a href="{{ route('origins.edit', ['origin' => $or->id]) }}" class="btn btn-outline-warning p-1">Edit</a>
                {{-- <a href="{{ route('origins.destroy', ['origin' => $or->id]) }}" class="link-danger">Delete</a> --}}
                <form class="d-inline" action="{{ route('origins.destroy', ['origin' => $or->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input onclick="return deleteConfirm()" class="btn btn-outline-danger p-1" type="submit" value="Delete!"/>
                </form>
            </div>
        </div>
    </div>
@endforeach
</ul>

<script>
    function deleteConfirm() {
        if(!confirm("Are you sure?"))
        event.preventDefault();
    }
</script>
