@extends('layouts.app')

@section('title', 'Edit a measurement unit')

@section('content')
<form action="{{ route('units.update', ['unit' => $name->id]) }}" method="post">
    @csrf
    @method('PUT')
    @include('admin.units.partials.form')
    <div class="mt-1">
        <input class="btn btn-warning btn-block col-12 mt-2"type="submit" name="submit" value="Update"/>
        <p style="display: inline">or <a href="{{ route("units.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
