<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }

    public function subSubCategory()
    {
        return $this->belongsTo(SubSubCategory::class,'subsubcategory_id','id');
    }
}
