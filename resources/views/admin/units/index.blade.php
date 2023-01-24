@extends('layouts.app')

@section('title', 'Units')

@section('content')
<h2>List of Measurement Units</h2>
<div class="p-2">
    <a class="link-primary" href="{{ route('units.create') }}">Add a new measurement unit</a>
</div>
@include('admin.units.partials.list')



@endsection
