<!-- index.blade.php -->

@extends('admin.layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        @if(session()->get('alert'))
            <div class="alert alert-success">
                {{ session()->get('alert') }}
            </div><br/>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Description</td>
                <td>Image</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($cates as $cate)
                <tr>
                    <td>{{$cate->id}}</td>
                    <td>{{$cate->name}}</td>
                    <td>{{$cate->description}}</td>
                    <td><img
                            src="source/image/product/{{$cate->image}}" alt=""
                            height="100px"></td>
                    <td><a href="{{route('edit',$cate->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{route('delete',$cate->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            <a href="{{route('cate')}}" class="btn btn-primary">Add</a>
            </tbody>
        </table>
    </div>
@endsection
