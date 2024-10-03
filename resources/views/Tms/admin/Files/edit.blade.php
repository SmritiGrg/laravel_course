@extends('layouts.main')
@section('container')
    <div class="container mt-3">
        <a href="{{ route('task.index') }}" class="btn btn-primary mb-2">Back</a>
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center"
                style="background-color: rgb(213, 203, 203)">
                <h5 class="mb-0">Update File</h5>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{ route('task.update', $task->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="basic-icon-default-fullname">Title</label>
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control" id="basic-icon-default-fullname"
                                placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                name="title" value="{{ $task->title }}" required />
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="input-group input-group-merge">
                            <input type="text" class="form-control d-none" id="basic-icon-default-fullname"
                                placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2"
                                name="user_id" value="{{ auth()->user()->id }}" />
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"
                            name="description">{{ $task->description }}</textarea>
                    </div>
                    <button type="reset" class="btn btn-primary">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
