<?php

namespace App\Http\Controllers\front;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    public function index(){

        $categoryasli = Category::where('idcat1',0)->where('idcat2',0)->get();
        $coursevije=Course::where('status',1)->get();
        $last=Course::where('status',1)->where('role','free')->get();


        return view('front.index.index',compact('categoryasli','coursevije','last'));
    }




}
