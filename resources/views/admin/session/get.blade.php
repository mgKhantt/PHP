@extends('admin.layouts.app');

@section('title', "Get");
@section('header', "Get");

@section('content')
<h2>This is Get Session GET page</h2>
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
