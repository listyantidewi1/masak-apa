@extends('layouts.app')

@section('title', 'Add a new ingredient category')

@section('content')
<form action="{{ route('categories.store') }}" method="post">
    @csrf
    @include('admin.categories.partials.form')
    <div>
        <input class="btn btn-primary btn-block col-12 mt-2" type="submit" name="submit" value="Add"/>
        <p style="display: inline">or <a href="{{ route("categories.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
