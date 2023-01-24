@extends('layouts.app')

@section('title', 'Edit an ingredient origin')

@section('content')
<form action="{{ route('origins.update', ['origin' => $origin->id]) }}" method="post">
    @csrf
    @method('PUT')
    @include('admin.origins.partials.form')
    <div class="mt-1">
        <input class="btn btn-warning btn-block col-12 mt-2"type="submit" name="submit" value="Update"/>
        <p style="display: inline">or <a href="{{ route("origins.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
