@extends('layouts.app')

@section('title', 'Add a new measurement unit')

@section('content')
<form action="{{ route('units.store') }}" method="post">
    @csrf
    @include('admin.units.partials.form')
    <div>
        <input class="btn btn-primary btn-block col-12 mt-2" type="submit" name="submit" value="Add"/>
        <p style="display: inline">or <a href="{{ route("units.index") }}">Cancel</a></p>
    </div>
</form>
@endsection
