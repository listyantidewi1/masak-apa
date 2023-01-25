@extends('layouts.app')

@section('title', 'Spices')

@section('content')
<h2>List of Categories of Ingredients</h2>
<div class="p-2">
    <a class="link-primary" href="{{ route('categories.create') }}">Add a new ingredient category</a>
</div>
@include('admin.categories.partials.list')
@endsection
