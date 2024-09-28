@extends('admin.layouts.app');

@section('title', "Ajax");
@section('header', "Ajax");

@section('content')
<h2>This is Ajax Session page</h2>
<p>@lang('localization.myanmar')</p>
<div class="contiainer-fluid">
    <div class="mb-3">
        <select class="form-select" id="select-session">
            <option selected>Open this select menu</option>
            <option value="s1">Session One</option>
            <option value="s2">Session Two</option>
            <option value="s3">Session Three</option>
        </select>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" id="get-session">Get Session</button>
    </div>
    <hr>
    <h1 id="result" class="text-center"></h1>
</div>
@endsection

@section('style')
<style>
</style>
@endsection

@section('script')
<script>
    $(document).ready(()=> {
        $('#get-session').click(()=> {
            const sessionName = $('#select-session').val();
            $.ajax({
                type: "get",
                url: "/admin/session/get-session-with-ajax/" + sessionName,
                success: (result)=> {
                    $('#result').html("The result is " + result + ".");
                },
                error: (error)=> {
                    console.log(error);
                }
            })
        })
    })
</script>
@endsection