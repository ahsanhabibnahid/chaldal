<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    public function subCategory()
    {
        return $this->belongsTo(Category::class,'subcategory_id','id');
    }
}
