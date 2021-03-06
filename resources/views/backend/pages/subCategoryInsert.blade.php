
@extends('backend.layout.master')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{route('subcategory.insert')}}">
                @csrf

                <div class="form-group">
                    <label for="exampleInputPassword1">Serial</label>
                    <input type="text" class="form-control"  name="sub_category_serial">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category select</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                        @foreach($category as $id => $name)
                            <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">SubCategory Name</label>
                    <input type="text" class="form-control" value="" name="sub_category_name">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">SubCategory Icon</label>
                    <input type="text" class="form-control" value="" name="sub_category_icon">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">SubCategory Status</label>
                    <input type="text" class="form-control" value="" name="sub_category_status">
                </div>

                <button type="submit" class="btn btn-primary">Insert</button>

            </form>
        </div>
    </div>





@endsection
