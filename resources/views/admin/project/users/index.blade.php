@extends('admin.layouts.app');

@section('title', "Project");
@section('header', "Users");

@section('content')
<h2>This is User page</h2>
<div class="container-fluid">
    <a href="{{url('/admin/users/create')}}" class="btn btn-primary">Create</a>

    <table id="table" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Name</th>
                <th>Email</th>
                <th>Start Date</th>
                <th>Updated Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td class="text-center">
                    <a href="{{ url('/admin/users/get-reset-password/' . $row->id) }}" class="btn btn-warning text-white">Reset Password</a>
                    <a href="{{url('admin/users/'.$row->id.'/edit')}}" class="btn btn-secondary">Edit</a>
                    <a href="{{ url('/admin/users/' . $row->id) }}" class="btn btn-info">Details</a>
                    <button class="btn btn-danger btn-delete" data-id="{{$row->id}}">Delete</button>
                </td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
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
                url: "/admin/users/" + id,
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