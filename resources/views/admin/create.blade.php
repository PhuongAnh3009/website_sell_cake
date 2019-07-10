<!-- create.blade.php -->

@extends('admin.layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    @if(session()->get('alert'))
        <div class="alert alert-success">
            {{ session()->get('alert') }}
        </div><br />
        @endif
    <div class="card-header">
        <b>Add Post</b>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <form method="post" action="{{route('cate')}}" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label for="title">Name</label>
                <input type="text" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="content">Description</label>
                <input type="text" class="form-control" name="desc" />
            </div>
            <div class="form-group">
                <label for="author">Image</label>
                <input type="file" class="form-control" name="img" />
            </div>
            <button type="submit" class="btn btn-primary">Create Post</button>
        </form>
    </div>
</div>
@endsection
