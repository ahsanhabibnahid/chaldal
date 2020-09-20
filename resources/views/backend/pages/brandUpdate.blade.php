@extends('backend.layout.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="{{route('brand.update.confirm',$SingleBrand->id)}}">
                @csrf


                <div class="form-group">
                    <label for="exampleInputPassword1">Brand Name</label>
                    <input type="text" class="form-control" value="{{ $SingleBrand->name }}" name="brand_name">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Brand Icon</label>
                    <input type="text" class="form-control" value="{{ $SingleBrand->logo }}" name="brand_icon">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Brand Status</label>
                    <input type="text" class="form-control" value="{{ $SingleBrand->status }}" name="brand_status">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </div>




@endsection
