<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $result = Brand::all();
        return view('backend.pages.brand',['BrandData'=>$result]);
    }

    public function insert(Request $request)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_icon' => 'required',
            'brand_status' => 'required|boolean'
        ]);

        $brandObject = new Brand;
        $brandObject->name = $request->brand_name;
        $brandObject->logo = $request->brand_icon;
        $brandObject->status = $request->brand_status;
        $brandObject->slug = $slug = Str::of($brandObject->name)->slug('-');

        $brandObject->save();

        return redirect()->route('brand');
    }

    public function show()
    {
        return view('backend.pages.brandInsert');
    }

    public function update(Request $request,$id)
    {
        $SingleBrand = Brand::find($id);
        return view('backend.pages.brandUpdate',compact('SingleBrand'));
    }

    public function updateConfirm(Request $request,$id)
    {
        $request->validate([
            'brand_name' => 'required',
            'brand_logo' => 'required',
            'brand_status' => 'required'
        ]);
        $brandObject = Brand::find($id);
        $brandObject->name = $request->brand_name;
        $brandObject->logo = $request->brand_icon;
        $brandObject->status = $request->brand_status;
        $brandObject->slug = $slug = Str::of($brandObject->name)->slug('-');

        $brandObject->save();

        return redirect()->route('brand');
    }

    public function delete(Request $request,$id){

        $brandObject = Brand::find($id);
        $brandObject->delete();


        return redirect()->route('brand');
    }
}
