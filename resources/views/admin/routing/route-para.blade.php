@extends('admin.layouts.app');

@section('title', "Index");
@section('header', "Header");

@section('content')
<h2>This is Pass Data page</h2>
<div class="container p-3">
    <p class="text-center p-3" style="background-color: {{$bgColor}};color: {{$color}}">This is testing for route parameter</p>
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