<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Sluggable;
    protected $fillable = [
        'serial', 'name', 'icon','slug','status'
    ];

    public function sluggable(){
        return[
            'slug'=>[
                'source'=>'name'
            ]
        ];
    }
}
