<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.pages.products.product');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'category_serial' => 'required|numeric',
            'category_name' => 'required',
            'category_icon' => 'required',
            'category_status' => 'required'
        ]);

        $categoryObject = new Category;
        $categoryObject->serial = $request->category_serial;
        $categoryObject->name = $request->category_name;
        $categoryObject->icon = $request->category_icon;
        $categoryObject->status = $request->category_status;
        $categoryObject->slug = $slug = Str::of($categoryObject->name)->slug('-');

        $categoryObject->save();

        return redirect()->route('category');
    }
}
