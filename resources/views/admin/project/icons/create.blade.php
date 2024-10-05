@extends('admin.layouts.app');

@section('title', "Portfolio");
@section('header', "Portfolio");

@section('content')
<h2>This is Detail page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/icons')}}" class="btn btn-primary">Back</a>

    <form action="{{ url('/admin/icons')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="form-label">Icon</label>
            <input type="file" class="form-control mt-1" name="icon">
            @if ($errors->has('icon'))
            <p class="text-danger">{{$errors->first('icon')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            @if ($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
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