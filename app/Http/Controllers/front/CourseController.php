<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Epizod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class CourseController extends Controller
{
    public function index($id){

        $coursevije=Course::where('status',1)->where('cat_id1',$id)->get();

        $cat1=Category::where('id',$id)->first();
        $cat1_name=$cat1->name;
        $categoryasli = Category::where('idcat1',0)->where('idcat2',0)->get();

        return view('front.courses.index' ,compact('cat1_name','categoryasli','coursevije'));
    }


    public function details($slug){


        $course=Course::where('status',1)->where('slug',$slug)->first();
        $id_course=$course->id;
        $title_course=$course->name;
        $id_cat_asli=$course->cat_id1;

        $cat=Category::where('id',$id_cat_asli)->first();


        $epizods=Epizod::where('status',1)->where('course_id',$id_course)->get();



        $categoryasli = Category::where('idcat1',0)->where('idcat2',0)->get();

        return view('front.coursedetail.index' ,compact('categoryasli','epizods','title_course','cat','course'));


    }
    public function onedetails($course_id,$id){





        $epizod_one=Epizod::where('status',1)->where('id',$id)->first();




        $course=Course::where('status',1)->where('id',$course_id)->first();

        $id_course=$course_id;
        $title_course=$course->name;
        $id_cat_asli=$course->cat_id1;

        $cat=Category::where('id',$id_cat_asli)->first();


        $epizods=Epizod::where('status',1)->where('course_id',$id_course)->get();





        $categoryasli = Category::where('idcat1',0)->where('idcat2',0)->get();




        return view('front.coursedetail.indexone' ,compact('categoryasli','epizods','title_course','cat','course','epizod_one'));


    }



}
