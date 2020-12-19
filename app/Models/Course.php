<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    use Sluggable;
    protected $casts =[

        'images'=>'array',

    ];
    protected $fillable = [
        'name', 'slug', 'images','video','lid','description','cat_id1','cat_id2','cat_id3','price','tags','user_id','takhfif','role','catname1','catname2','catname3'
    ];
    protected $attributes=[
        'hit'=>1,
        'status'=>1,
        'numcomment'=>0,
        'numlike'=>0,
        'role'=>'cash',
        'takhfif'=>0,
        'timing'=>"00:00:00",



    ];



    public function category(){

        return $this->belongsTo(Category::class);
    }




    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
