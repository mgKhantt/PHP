@extends('admin.layouts.app');

@section('title', "Check");
@section('header', "Check");

@section('content')
<h2>Name is {{ $name }}</h2>
<h2>Age is {{ $age }}</h2>
@endsection

@section('style')
 <style>
    body {
        background-color: cadetblue;
    }
 </style>
@endsection

@section('script')
 <script>
    
 </script>
@endsection
