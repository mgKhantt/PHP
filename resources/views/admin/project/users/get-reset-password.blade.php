@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Reset Password");

@section('content')
<h2>This is Reset Password page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/users')}}" class="btn btn-primary">Back</a>

    <form action="{{route('users.reset-password',[$data->id])}}" method="post" novalidate>
        @method('PUT')
        @csrf
        <div class="mb-3 mt-3">
            <label class="form-label">New Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter your new password.">
            @if ($errors->has('password'))
            <p class="text-danger">{{$errors->first('password')}}</p>
            @endif
        </div>
        <div class="mb-3 mt-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm your password.">
            @if ($errors->has('confirmPassword'))
            <p class="text-danger">{{$errors->first('confirmPassword')}}</p>
            @endif
        </div>
        <button class="btn btn-primary">Submit</button>
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
        $('[name="password"]').focus();
        
    })
    
</script>
@endsection