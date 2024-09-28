@extends('admin.layouts.app');

@section('title', "Index");
@section('header', "Name Route")

@section('content')
<h3>This is name route</h3>
<div class="container-fluid">
    <p>url()=> {{ url('/admin/routing/name-route') }}</p>
    <p>route()=> {{ route('named-route') }}</p>
</div>
@endsection