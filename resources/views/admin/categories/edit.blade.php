@extends('layouts.app')

@section('title', 'Edit an ingredient category')

@section('content')
<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
    @csrf
    @method('PUT')
    @include('admin.categories.partials.form')
    <div class="mt-1">
        <input class="btn btn-warning btn-block col-12 mt-2"type="submit" name="submit" value="Update"/>
        <p style="display: inline">or <a href="{{ route("categories.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
