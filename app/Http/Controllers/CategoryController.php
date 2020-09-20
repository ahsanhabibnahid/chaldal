<?php

namespace App\Http\Controllers;

use App\Configuration;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use App\SubCategory;

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

   public function show()
   {
       return view('backend.pages.categoryInsert');
   }

   public function update(Request $request,$id)
   {
       $SingleCategory = Category::find($id);
       return view('backend.pages.categoryUpdate',compact('SingleCategory'));
   }

   public function updateConfirm(Request $request,$id)
   {
       $request->validate([
           'category_serial' => 'required|numeric',
           'category_name' => 'required',
           'category_icon' => 'required',
           'category_status' => 'required'
       ]);
       $categoryObject = Category::find($id);
       $categoryObject->serial = $request->category_serial;
       $categoryObject->name = $request->category_name;
       $categoryObject->icon = $request->category_icon;
       $categoryObject->status = $request->category_status;
       $categoryObject->slug = $slug = Str::of($categoryObject->name)->slug('-');

       $categoryObject->save();

       return redirect()->route('category');
   }

   public function delete(Request $request,$id){
       try {
           $categoryObject = Category::find($id);
           $categoryObject->delete();
       }catch (\Exception $e){

           if ($e->getCode()==23000)
           {
               return "Your Should Delete SubCategory!";
           }

       }


       return redirect()->route('category');
   }

}
