<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    use Sluggable;

    protected $casts =[

        'images'=>'array',

    ];
    protected $fillable = [
        'name', 'slug', 'images','video','lid','description','idcat1','idcat2'
    ];
    protected $attributes=[
        'hit'=>1,
        'status'=>1,



    ];




    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }



}
