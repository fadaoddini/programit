<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\EpizodRequest;
use App\Models\Course;
use App\Models\Epizod;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EpizodController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $epizodlist=$this->epizodlist();
        $epizods = Epizod::latest()->paginate(10);
        return view('admin.epizod.index',compact('epizods','epizodlist'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $epizodlist=$this->epizodlist();
        $course = Course::all()->pluck('id','name');

        return view('admin.epizod.createepizod',compact('course','epizodlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EpizodRequest $request)
    {

        $epizods=new Epizod([
            'name'=> $request->get('name'),
            'lid'=> $request->get('lid'),
            'videoUrl'=> $request->get('videoUrl'),
            'time'=> $request->get('time'),
            'course_id'=> $request->get('course_id'),
            'number'=> $request->get('number'),
            'tags'=> $request->get('tags'),
            'type'=> $request->get('type'),
            'description'=> $request->get('description'),
            'status'=> $request->get('status'),
        ]);

        $imageurl=$this->uploadetc($request->file('images'));
        $epizods->name = $request->name;
        if ($request->lid){
            $epizods->lid = $request->lid;
        }else{
            $epizods->lid=$request->name;
        }
        if ($request->videoUrl){
            $epizods->videoUrl = $request->videoUrl;
        }else{
            $epizods->videoUrl = "0";
        }
if ($request->type){
            $epizods->type = $request->type;
        }else{
            $epizods->type = "cash";
        }
        if ($request->time){
            $epizods->time = $request->time;
        }else{
            $epizods->time = "00:00:00";
        }

        if ($request->number){
            $epizods->number = $request->number;
        }else{
            $epizods->number=0;
        }

        if ($request->tags){
            $epizods->tags = $request->tags;
        }else{
            $epizods->tags=$request->name;
        }
        if ($request->description){
            $epizods->description = $request->description;
        }else{
            $epizods->description=$request->name;
        }

        $epizods->status = $request->status;
        $epizods->course_id = $request->course_id;
        $epizods->images =$imageurl;

        $id_course=$request->course_id;
        $timer=$request->time;


        $epizods->save();
      //  $epizods=Epizod::created($request->all());

        $all_sum_time=$this->setCourseTime($id_course,$timer);


        return redirect(route('index.epizod'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Epizod  $epizod
     * @return \Illuminate\Http\Response
     */
    public function show(Epizod $epizod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Epizod  $epizod
     * @return \Illuminate\Http\Response
     */
    public function edit(Epizod $epizod)
    {
        $epizodlist=$this->epizodlist();
        $course = Course::all()->pluck('id','name');
        return view('admin.epizod.editepizod',compact('course','epizod','epizodlist'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Epizod  $epizod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Epizod $epizod)
    {


        $images=$request->file('images');

        $inputs=$request->all();


        if ($images){
            $inputs['images']=$this->uploadetc($request->file('images'));
        }else{
            $inputs['images']=$epizod->images;

        }


      //  $inputs['course_id']=$request->course_id;






        $epizod->update($inputs);


        return redirect(route('index.epizod'));





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Epizod  $epizod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Epizod $epizod)
    {
        $epizod->delete();
        $msg = "حذف با موفقیت انجام شد!";
        return redirect(route('index.epizod'))->with('warning', $msg);
    }
}
