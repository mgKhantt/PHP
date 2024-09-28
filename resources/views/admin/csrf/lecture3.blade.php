@extends('admin.layouts.app');

@section('title', "CSRF");
@section('header', "CSRF Lesson 3");

@section('content')
<h3>This is CSRF Lesson 1</h3>
<div class="container-fluid">
    <div class="container-fluid">
        <button class="btn btn-primary" id="get-data">
            Get Data
        </button>
        <hr>
        <ul class="list-group">

        </ul>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(() => {
        $('#get-data').click(() => {
            $.ajax({
                type: "post",
                url: "/admin/csrf/get-data",
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: (data) => {
                    console.log(data);
                    $('.list-group').empty();
                    let items = data;
                    items.forEach(value => {
                        let item = `<li class="list-group-item"> ${value} </li>`;
                        $('.list-group').append(item);
                    });
                },
                error: (error) => {
                    console.log(error);
                }
            })
        })
    })
</script>
@endsection