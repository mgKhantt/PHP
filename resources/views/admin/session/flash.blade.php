@extends('admin.layouts.app');

@section('title', "Flash");
@section('header', "Flash");

@section('content')
<h2>This is Flash Session page</h2>
<div class="container-fluid">
    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Saved!</strong>{{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <form action="{{url('/admin/session/flash-session')}}" method="post">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="text" name="age" class="form-control">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<hr>
<div class="container-fluid">
    <p>{{ session()->has('name') ? session('name') : "S1 nothing" }}</p>
    <p>{{ session()->has('age') ? session('age') : "S2 nothing" }}</p>
    <p>{{ session()->has('address') ? session('address') : "S3 nothing" }}</p>
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