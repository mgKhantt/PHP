@extends('admin.layouts.app');

@section('title', "Delete");
@section('header', "Delete");

@section('content')
<h2>This is Delete Session page</h2>

<h5>Delete Session 1</h5>
<form action="{{ url('/admin/session/delete-session/s1')}}" method="post">
    @csrf
    <button class="btn btn-primary">
        Delete Session 1
    </button>
</form>

<h5>Delete Session 2</h5>
<form action="{{ url('/admin/session/delete-session/s2')}}" method="post">
    @csrf
    <button class="btn btn-primary">
        Delete Session 2
    </button>
</form>

<h5>Delete Session 3</h5>
<form action="{{ url('/admin/session/delete-session/s3')}}" method="post">
    @csrf
    <button class="btn btn-primary">
        Delete Session 3
    </button>
</form>

<h5>Delete Session All</h5>
<form action="{{ url('/admin/session/delete-session/all')}}" method="post">
    @csrf
    <button class="btn btn-primary">
        Delete Session All
    </button>
</form>

<hr>
<div class="container-fluid">
    <p>{{ session()->has('s1') ? session('s1') : "S1 nothing" }}</p>
    <p>{{ session()->has('s2') ? session('s2') : "S2 nothing" }}</p>
    <p>{{ session()->has('s3') ? session('s3') : "S3 nothing" }}</p>
</div>
@endsection

@section('style')
 <style>
 </style>
@endsection

@section('script')
 <script>
    
 </script>
@endsection
