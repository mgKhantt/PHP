@extends('admin.layouts.app');

@section('title', "Component");
@section('header', "Component");

@section('content')
<h2>This is Component Session page</h2>
<div class="container-fluid">
    <pre>
        creating component
        ******************
        php artisan make:component Alert

        laravel component
        *****************
        1) Component UI >>> (resources/view/components/...)
        2) Component Controller (Business Logic) >>> (app/view/components/...)

        Component Attribute Databinding
        *******************************
        When you databind in the component attribute,
        There are two way ->
        1) if you bind the value to the attribute, you can bind directly like the following example
        example > type="success"
        2) if you bind the variable to the attribute, you can bind like the following example
        example > :type="$success"

        Note -
        (1) pass attribute value to Component Controller Constructor Arguments
        (2) assign the data from arguments to controller variables
        (3) bind controller variables to component user interface
    </pre>

    <x-alert type="primary" title="Primary Alert" text="This is primary alert"></x-alert>
    <x-alert type="danger" title="Danger Alert" text="This is danger alert"></x-alert>
    <x-alert type="success" title="Success Alert" text="This is success alert"></x-alert>

    <hr>
    <h6>Alerts with key value array</h6>
    @foreach ($alertWithKeyValueArray as $alert)
        <x-alert :type="$alert['type']" :title="$alert['title']" :text="$alert['title']"></x-alert>
    @endforeach

    <hr>
    <h6>Alerts with Object</h6>
    @foreach ($alertWithObject as $alert)
        <x-alert :type="$alert->type" :title="$alert->title" :text="$alert->text"></x-alert>
    @endforeach
</div>
@endsection

@section('style')
<style>
</style>
@endsection

@section('script')

@endsection