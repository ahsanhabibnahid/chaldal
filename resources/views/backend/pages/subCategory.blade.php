@extends('backend.layout.master')
@section('content')

    <div class="container">
        <h2><a href="{{route('subcategory.show')}}" class="btn btn-danger">Add New SubCategory</a></h2>
        <h2>SubCategory List</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Serial</th>
                <th>Category Name</th>
                <th>SubCategory Name</th>
                <th>SubCategory Icon</th>
                <th>SubCategory Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $value)
                <tr>
                    <td>{{$value->serial}}</td>

                    <td>{{optional($value->category)->name}}</td>

                    <td>{{$value->name}}</td>
                    <td>{{$value->icon}}</td>
                    <td>{{$value->status}}</td>
                    <td><a href="{{route('subcategory.update',$value->id)}}">Edit</a></td>
                    <td><a href="{{route('subcategory.delete',$value->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>








@endsection
