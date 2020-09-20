@extends('backend.layout.master')
@section('content')

    <div class="container">
        <h2><a href="{{route('brand.show')}}" class="btn btn-danger">Add New Brand</a></h2>
        <h2>Brand List</h2>
        <table class="table">
            <thead>
            <tr>
                <th>Brand Name</th>
                <th>Brand Icon</th>
                <th>Brand Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($BrandData as $BrandData)
                <tr>
                    <td>{{$BrandData->name}}</td>
                    <td>{{$BrandData->logo}}</td>
                    <td>{{$BrandData->status}}</td>
                    <td><a href="{{route('brand.update',$BrandData->id)}}">Edit</a></td>
                    <td><a href="{{route('brand.delete',$BrandData->id)}}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>








@endsection
