@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Details");

@section('content')
<h2>This is Detail page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/portfolios')}}" class="btn btn-primary">Back</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Image</td>
                <td>{{$data->images}}</td>
            </tr>
            <tr>
                <td>Title</td>
                <td>{{$data->title}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$data->description}}</td>
            </tr>
            <tr>
                <td>Created By</td>
                <td>{{$data->created_by}}</td>
            </tr>
            <tr>
                <td>Updated By</td>
                <td>{{$data->updated_by}}</td>
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