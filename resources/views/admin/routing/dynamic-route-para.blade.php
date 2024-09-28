@extends('admin.layouts.app');

@section('title', "Index");
@section('header', "Dynamic Route")

@section('content')
<h3>This is dynamic route</h3>
<div class="container-fluid">
    <form action="{{ url('/admin/routing/dynamic-route-para') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Background Color</label>
            <input type="text" class="form-control" name="bg_color">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Color</label>
            <input type="text" class="form-control" name="color">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection