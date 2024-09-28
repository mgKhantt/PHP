@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Details");

@section('content')
<h2>This is Detail page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/users')}}" class="btn btn-primary">Back</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Row</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>{{$data->name}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$data->email}}</td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td>{{$data->created_at}}</td>
            </tr>
            <tr>
                <td>Updated Date</td>
                <td>{{$data->updated_at}}</td>
            </tr>
        </tbody>
    </table>
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