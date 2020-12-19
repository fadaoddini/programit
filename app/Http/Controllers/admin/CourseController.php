<?php

namespace App\Http\Controllers\admin;

use App\Models\Category;
use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Models\Epizod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $epizodlist = $this->epizodlist();
        $courses = Course::latest()->paginate(10);


        return view('admin.course.index', compact('courses', 'epizodlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $epizodlist = $this->epizodlist();
        $categories = Category::all();  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        $idcat = Category::where('idcat1', 0)->where('idcat2', 0)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        $idcat1 = Category::where('idcat2', 0)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        $idcat2 = Category::where('idcat2', '!=', 0)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        return view('admin.course.createcourse', compact('categories', 'idcat', 'idcat1', 'idcat2', 'epizodlist'));
    }


    public function ajaxcat1(Request $request)
    {

        $cat1 = $request->cat_id;
        $idcat1 = Category::where('idcat1', $cat1)->where('idcat2', 0)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        if ($idcat1) {
            return response()->json([
                'msg' => $idcat1
            ]);
        } else {
            return response()->json([
                'msg' => '0'
            ]);
        }

    }


    public function ajaxcat2(Request $request)
    {

        $cat1 = $request->cat_id;
        $idcat1 = Category::where('idcat2', $cat1)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        if ($idcat1) {
            return response()->json([
                'msg' => $idcat1
            ]);
        } else {
            return response()->json([
                'msg' => '0'
            ]);
        }


    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $courses = new Course([
            'name' => $request->get('name'),
            'lid' => $request->get('lid'),
            'video' => $request->get('video'),
            'idcat1' => $request->get('idcat1'),
            'idcat2' => $request->get('idcat2'),
            'idcat3' => $request->get('idcat3'),
            /*            'catname1'=> $request->get('catname1'),
                        'catname2'=> $request->get('catname2'),
                        'catname3'=> $request->get('catname3'),*/
            'price' => $request->get('price'),
            'takhfif' => $request->get('takhfif'),
            'role' => $request->get('role'),
            'tags' => $request->get('tags'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
        ]);

        $imageurl = $this->uploadimages($request->file('images'));
        //  $videourl=$this->uploadvideos($request->file('video'));


        $courses->name = $request->name;

        if ($request->lid) {
            $courses->lid = $request->lid;
        } else {
            $courses->lid = $request->name;
        }


        $courses->cat_id1 = $request->idcat1;


        $catname1 = Category::where('id', $request->idcat1)->first();

        $courses->catname1 = $catname1->name;



        if ($request->idcat2) {
            $courses->cat_id2 = $request->idcat2;

            $catname2 = Category::where('id', $request->idcat2)->first();

            $courses->catname2 = $catname2->name;

        } else {
            $courses->cat_id2 = 0;
        }

        if ($request->idcat3) {
            $courses->cat_id3 = $request->idcat3;
            $catname3 = Category::where('id', $request->idcat3)->first();

            $courses->catname3 = $catname3->name;
        } else {
            $courses->cat_id3 = 0;
        }

        if ($request->price) {
            $courses->price = $request->price;
        } else {
            $courses->price = 0;
        }

        if ($request->video) {
            $courses->video = $request->video;
        } else {
            $courses->video = "no video";
        }
        if ($request->takhfif) {
            $courses->takhfif = $request->takhfif;
        } else {
            $courses->takhfif = 0;
        }
        if ($request->role) {
            $courses->role = $request->role;
        } else {
            $courses->role = "cash";
        }
        if ($request->tags) {
            $courses->tags = $request->tags;
        } else {
            $courses->tags = $request->name;
        }
        if ($request->description) {
            $courses->description = $request->description;
        } else {
            $courses->description = $request->name;
        }

        $courses->status = $request->status;
        $courses->images = $imageurl;
        //  $courses->video = $videourl;
        //  $courses->user_id=Auth::user()->id;
        $courses->user_id = Auth::user()->id;

        $courses->save();

        // Category::create(array_merge($request->all(),['images'=>$imageurl,'video'=>$videourl]));

        return redirect(route('index.course'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {


        $epizodlist = $this->epizodlist();
        $idcat = Category::where('idcat1', 0)->where('idcat2', 0)->pluck('id', 'name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو

        $cat_id1 = Category::where('id', $course->cat_id1)->pluck('id', 'name');
        $cat_id2 = Category::where('id', $course->cat_id2)->pluck('id', 'name');
        $cat_id3 = Category::where('id', $course->cat_id3)->pluck('id', 'name');


        return view('admin.course.editcourse', compact('idcat', 'course', 'epizodlist', 'cat_id1', 'cat_id2', 'cat_id3'));
    }

    public function indexclass($course_id)
    {

        $epizodlist = $this->epizodlist();
        $epizods = Epizod::where('course_id', $course_id)->paginate(10);
        return view('admin.epizod.index', compact('epizods', 'epizodlist'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $images = $request->file('images');
        //  $video=$request->file('video');
        $inputs = $request->all();


        if ($images) {
            $inputs['images'] = $this->uploadimages($request->file('images'));
        } else {
            $inputs['images'] = $course->images;
            $inputs['images']['thumb'] = $inputs['imagestumb'];
        }


        /*   if ($video){
               $inputs['video']=$this->uploadvideos($request->file('video'));
           }else{
               $inputs['video']=$course->video;

           }*/


        $course->update($inputs);


        return redirect(route('index.course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Course $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        $msg = "حذف با موفقیت انجام شد!";
        $msg = "حذف با موفقیت انجام شد!";
        return redirect(route('index.course'))->with('warning', $msg);
    }



    public function updatechangecourse(Course $course)
    {

        if ($course->status==1){
            $course->status=0;
        }else{
            $course->status=1;
        }
        $course->save();
        $msg = "تغییرات با موفقیت انجام شد";
        return redirect(route('index.course'))->with('warning', $msg);

    }





}
