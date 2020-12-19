<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epizod extends Model
{
    use HasFactory;


    protected $fillable = [
        'name','videoUrl','description','tags','time','images','lid',
    ];
    protected $attributes=[
        'number'=>1,
        'viewCount'=>1,
        'commentCount'=>0,
        'downloadCount'=>0,
        'status'=>1,




    ];


    public function courses(){

        return $this->belongsTo(Course::class);
    }


}
