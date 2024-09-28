@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Edit");

@section('content')
<h2>This is Edit page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/users')}}" class="btn btn-primary">Back</a>

    <form action="{{ url('/admin/users/' . $data->id)}}" method="post" novalidate>
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $data->name) }}">
            @if ($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $data->email) }}">
            @if ($errors->has('email'))
            <p class="text-danger">{{$errors->first('email')}}</p>
            @endif
        </div>
        <button class="btn btn-primary">Edit</button>
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
<script>

</script>
@endsection