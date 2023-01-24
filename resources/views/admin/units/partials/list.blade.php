<ul>
    @foreach($name as $n)
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-4">
                    <li>{{ $n->name }}</li>
                </div>
                <div class="col-lg-8">
                    <a href="{{ route('units.edit', ['unit' => $n->id]) }}" class="btn btn-outline-warning p-1">Edit</a>
                    {{-- <a href="{{ route('units.destroy', ['name' => $n->id]) }}" class="link-danger">Delete</a> --}}
                    <form class="d-inline" action="{{ route('units.destroy', ['unit' => $n->id]) }}" method="POST">
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
