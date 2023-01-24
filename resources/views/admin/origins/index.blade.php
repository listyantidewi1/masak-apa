@extends('layouts.app')

@section('title', 'Origins')

@section('content')
<h2>List of Ingredient Origins</h2>
<div p-2>
    <a class="link-primary" href="{{ route('origins.create') }}">Add a new ingredient origin</a>
</div>
@include('admin.origins.partials.list')

@endsection
