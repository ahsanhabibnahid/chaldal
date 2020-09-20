<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class SubCategory extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id' );
    }
}
