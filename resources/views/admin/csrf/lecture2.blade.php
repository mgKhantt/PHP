@extends('admin.layouts.app');

@section('title', "CSRF");
@section('header', "CSRF Lesson 2")

@section('content')
<h3>This is CSRF Lesson 2</h3>
<div class="container-fluid">
    <form action="{{ url('/admin/csrf/create') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="text" class="form-control" name="age">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection