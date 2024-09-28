@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Details");

@section('content')
<h2>This is Detail page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/users')}}" class="btn btn-primary">Back</a>

    <form action="{{ url('/admin/users')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
            @if ($errors->has('password'))
            <p class="text-danger">{{$errors->first('password')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Confrim Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
@endsection

@section('style')
<style>
    body {
        background-color: aquamarine;
    }
</style>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script>
    $(document).ready(() => {
        $('[name="name"]').focus();
    })
</script>
@endsection