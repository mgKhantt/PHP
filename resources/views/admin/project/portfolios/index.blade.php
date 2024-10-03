@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Portfolio");

@section('content')
<h2>This is Portfolio page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/portfolios/create')}}" class="btn btn-primary">Create</a>

    <table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Updated By</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td class="text-center">
                    <a href="{{url('/admin/portfolios/'.$row->id.'/edit')}}" class="btn btn-secondary m-1">Edit</a>
                    <a href="{{ url('/admin/portfolios/' . $row->id) }}" class="btn btn-info m-1">Details</a>
                    <button class="btn btn-danger btn-delete m-1" data-id="{{$row->id}}">Delete</button>

                </td>
                <td>
                    <img src="{{asset('storage/' . $row->image)}}" alt="portfolio_img" width="100px" height="100px" id="portfolio-img">
                </td>
                <td>{{$row->title}}</td>
                <td>{{$row->description}}</td>
                <td>{{$row->created_by}}</td>
                <td>{{$row->updated_by}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('style')
<style>
    body {
        background-color: aquamarine;
    }

    #portfolio-img {
        border: 3px solid red;
        border-radius: 20px;
    }
</style>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(() => {
        new DataTable('#table');

        showMessage();

        $(document).on('click', '.btn-delete', (event) => {
            // alert('delete');
            const button = $(event.currentTarget);
            const id = button.data('id');
            console.log(id);

            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then(() => {
                        deleteRecord(id);
                    });
                }
            });
        })

        function deleteRecord(id) {
            $.ajax({
                type: "delete",
                url: "/admin/portfolios/" + id,
                data: {
                    "_token": "{{csrf_token()}}"
                },
                success: (data) => {
                    location.reload();
                },
                error: (error) => {
                    console.log(error);
                }
            })
        }

        function showMessage() {
            let message = "{{session()->get('message')}}";
            if (message) {
                // alert(message);
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: message,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        }
    })
</script>
@endsection