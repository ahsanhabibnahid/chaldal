<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $result = Category::all();
        return view('backend.pages.category',['CategoryData'=>$result]);
    }

    public function insert(Request $request)
    {
        $categoryObject = new Category;
        $categoryObject->serial = $request->category_serial;
        $categoryObject->name = $request->category_name;
        $categoryObject->icon = $request->category_icon;
        $categoryObject->status = $request->category_status;
        $categoryObject->slug = $slug = Str::of($categoryObject->name)->slug('-');

        $categoryObject->save();

        return redirect()->route('category');
    }

   public function show()
   {
       return view('backend.pages.categoryInsert');
   }

   public function update()
   {

   }


}
