@extends('admin.layouts.app');

@section('title', "Localization");
@section('header', "Localization");

@section('content')
<h2>This is Localization Session page</h2>
<div class="container-fluid">
    <form action="{{ url('/admin/blade-template/change-localization')}}" method="post">
        @csrf
        <div class="mb-3">
            <select class="form-select" name="language">
                <option value="en">@lang('localization.english')</option>
                <option value="mm">@lang('localization.myanmar')</option>
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">@lang('localization.changeLanguage')</button>
        </div>
    </form>
</div>
@endsection

@section('style')
<style>
</style>
@endsection

@section('script')

@endsection