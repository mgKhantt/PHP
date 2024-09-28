@extends('admin.layouts.app');

@section('title', "Index");
@section('header', "Header");

@section('content')
<h2>This is Pass Data page</h2>
<h3>Buttons</h3>
<div class="container">
    @foreach ($data_buttons as $btn)
        <button class="btn btn-{{$btn['type']}}"> {{ $btn['text']}} </button>
    @endforeach
</div>

<h3 class="pt-3">Links</h3>
<div class="container">
    @foreach ($links as $link)
        <a href="{{$link->href}}" 
        target="{{$link->target}}"> {{$link->text}}</a>
    @endforeach
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