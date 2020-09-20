@extends('backend.layout.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{route('category.update.confirm',$SingleCategory->id)}}">
                @csrf

                <div class="form-group">
                    <label for="exampleInputPassword1">Serial</label>
                    <input type="text" class="form-control" value="{{$SingleCategory->serial}}" name="category_serial">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Category Name</label>
                    <input type="text" class="form-control" value="{{$SingleCategory->name}}" name="category_name">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Category Icon</label>
                    <input type="text" class="form-control" value="{{$SingleCategory->icon}}" name="category_icon">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Category Status</label>
                    <input type="text" class="form-control" value="{{$SingleCategory->status}}" name="category_status">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>




@endsection
