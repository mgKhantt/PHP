@extends('admin.layouts.app');

@section('title', "PUT");
@section('header', "PUT");

@section('content')
<h2>This is Put Session page</h2>
<div class="container-fluid">
    <form action="{{url('/admin/session/put-session')}}" method="post">
        @csrf
        <div class="mb-3">
            <label>Session 1</label>
            <input type="text" name="s1" class="form-control">
        </div>
        <div class="mb-3">
            <label>Session 2</label>
            <input type="text" name="s2" class="form-control">
        </div>
        <div class="mb-3">
            <label>Session 3</label>
            <input type="text" name="s3" class="form-control">
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
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
