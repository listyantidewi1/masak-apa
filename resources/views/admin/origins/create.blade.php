@extends('layouts.app')

@section('title', 'Add a new ingredient origin')

@section('content')
<form action="{{ route('origins.store') }}" method="post">
    @csrf
    @include('admin.origins.partials.form')
    <div>
        <input class="btn btn-primary btn-block col-12 mt-2" type="submit" name="submit" value="Add"/>
        <p style="display: inline">or <a href="{{ route("origins.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
