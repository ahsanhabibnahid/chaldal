@extends('backend.layout.master')
@section('content')

    <div class="container">
        <h2><a href="{{route('category.show')}}" class="btn btn-danger">Add New Category</a></h2>
        <h2>Category List</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Category Name</th>
                <th>Category Icon</th>
                <th>Category Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($CategoryData as $CategoryData)
                <tr>
                    <td>{{$CategoryData->serial}}</td>
                    <td>{{$CategoryData->name}}</td>
                    <td>{{$CategoryData->icon}}</td>
                    <td>{{$CategoryData->status}}</td>
                    <td><a href="{{route('category.update',$CategoryData->id)}}">Edit</a></td>
                    <td><a href="#">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>








@endsection
