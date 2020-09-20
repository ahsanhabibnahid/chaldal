@extends('backend.layout.master')
@section('content')



    <div class="container">

        <h2 class="bg-primary" style="padding: 10px">Product Information</h2>

        <form action="{{route('product.insert')}}" method="post" enctype="multipart/form-data">

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="product_name">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="product_description"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4">Product Price</label>
                    <input type="text" class="form-control" id="inputEmail4" name="product_price">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Quantity</label>
                    <input class="form-control" type="number" name="product_name">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Brand</label>
                    <select class="form-control" name="" id="">
                        <option value="">one</option>
                        <option value="">one</option>
                        <option value="">one</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Category</label>
                    <select class="form-control" name="" id="">
                        <option value="">one</option>
                        <option value="">one</option>
                        <option value="">one</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Sub Category</label>
                    <select class="form-control" name="" id="">
                        <option value="">one</option>
                        <option value="">one</option>
                        <option value="">one</option>
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputPassword4">Child Category</label>
                    <select class="form-control" name="" id="">
                        <option value="">one</option>
                        <option value="">one</option>
                        <option value="">one</option>
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputPassword4">Status</label>
                    <select class="form-control" name="" id="">
                        <option value="">one</option>
                        <option value="">one</option>
                        <option value="">one</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image One</label>
                    <input  type="file" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image One</label>
                    <input  type="file" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image One</label>
                    <input  type="file" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image One</label>
                    <input  type="file" class="form-control">
                </div>


            </div>


            <button type="submit" class="btn btn-success btn-block">Save</button>
        </form>

    </div>








@endsection
