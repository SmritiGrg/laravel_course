{{-- @extends('layouts.main')
@section('container')
    <div class="card m-3">
        <a href="{{route('task')}}"></a>
        <h5 class="card-header">Index Table</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                        <th>S.N</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td></td>
                        <td>{{$task->title}}</td>
                        <td>{{$task->description}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                </tbody>
            </table>
            {{ $tasks->links() }}
        </div>
    </div>
@endsection --}}

@extends('layouts.main')
@section('container')
    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container py-4">
        <a href="{{ route('task.create') }}" class="btn btn-primary my-3">Add</a>
        <table class="table table-secondary 
         table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ route('task.show', $task->id) }}" class="btn btn-warning btn-sm">Show</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $task->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $task->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog        ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close btn" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure?☠
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('task.destroy', $task->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $tasks->links() }}
    </div>
@endsection
