<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Couchbase\basicDecoderV1;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $epizodlist=$this->epizodlist();
        $category = Category::latest()->where('idcat1',0)->where('idcat2',0)->paginate(10);
        return view('admin.category.index',compact('category','epizodlist'));
    }
 public function indexsub($idcat1)
    {
        $epizodlist=$this->epizodlist();
        $catmain=Category::where('id',$idcat1)->first();
        $category = Category::where('idcat1',$idcat1)->where('idcat2',0)->paginate(10);
        return view('admin.category.indexsub',compact('category','catmain','epizodlist'));
    }
public function indexsub2($idcat2)
    {
        $epizodlist=$this->epizodlist();
        $catmain=Category::where('id',$idcat2)->first();
        $category = Category::where('idcat2',$idcat2)->paginate(10);
        return view('admin.category.indexsub2',compact('category','catmain','epizodlist'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epizodlist=$this->epizodlist();
        $categories = Category::all()->pluck('id','name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        return view('admin.category.createcategory',compact('categories','epizodlist'));
    }
public function createsub(Category $category)
    {

        $epizodlist=$this->epizodlist();
        $categories = Category::all()->pluck('id','name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        return view('admin.category.createcategorysub',compact('categories','category','epizodlist'));
    }
    public function createsub2($idid,Category $category)
    {

        $epizodlist=$this->epizodlist();
        $categories = Category::all()->pluck('id','name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        return view('admin.category.createcategorysub2',compact('categories','category','idid','epizodlist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        $cats=new Category([
            'name'=> $request->get('name'),
            'lid'=> $request->get('lid'),
            'idcat1'=> $request->get('idcat1'),
            'idcat2'=> $request->get('idcat2'),
            'tags'=> $request->get('tags'),
            'description'=> $request->get('description'),
            'status'=> $request->get('status'),
        ]);

        $imageurl=$this->uploadimages($request->file('images'));
        $videourl=$this->uploadvideos($request->file('video'));


        $cats->name = $request->name;
        if ($request->lid){
            $cats->lid = $request->lid;
        }else{
            $cats->lid=$request->name;
        }

        if ($request->idcat1){
            $cats->idcat1 = $request->idcat1;
        }else{
            $cats->idcat1 = 0;
        }


        if ($request->idcat2){
            $cats->idcat2 = $request->idcat2;
        }else{
            $cats->idcat2 = 0;
        }

        if ($request->tags){
            $cats->tags = $request->tags;
        }else{
            $cats->tags=$request->name;
        }
        if ($request->description){
            $cats->description = $request->description;
        }else{
            $cats->description=$request->name;
        }

        $cats->status = $request->status;
        $cats->images =$imageurl;
        $cats->video = $videourl;

        $cats->save();

    // Category::create(array_merge($request->all(),['images'=>$imageurl,'video'=>$videourl]));

     return redirect(route('index.category'));
    }
    public function store2(CategoryRequest $request)
    {

        $cats=new Category([
            'name'=> $request->get('name'),
            'lid'=> $request->get('lid'),
            'idcat1'=> $request->get('idcat1'),
            'idcat2'=> $request->get('idcat2'),
            'tags'=> $request->get('tags'),
            'description'=> $request->get('description'),
            'status'=> $request->get('status'),
        ]);

        $imageurl=$this->uploadimages($request->file('images'));
        $videourl=$this->uploadvideos($request->file('video'));


        $cats->name = $request->name;
        if ($request->lid){
            $cats->lid = $request->lid;
        }else{
            $cats->lid=$request->name;
        }

        if ($request->idcat1){
            $cats->idcat1 = $request->idcat1;
        }else{
            $cats->idcat1 = 0;
        }


        if ($request->idcat2){
            $cats->idcat2 = $request->idcat2;
        }else{
            $cats->idcat2 = 0;
        }

        if ($request->tags){
            $cats->tags = $request->tags;
        }else{
            $cats->tags=$request->name;
        }
        if ($request->description){
            $cats->description = $request->description;
        }else{
            $cats->description=$request->name;
        }

        $cats->status = $request->status;
        $cats->images =$imageurl;
        $cats->video = $videourl;

        $cats->save();

        // Category::create(array_merge($request->all(),['images'=>$imageurl,'video'=>$videourl]));

        return redirect(route('index.category'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $epizodlist=$this->epizodlist();
     //   $categorylist = Category::where('idcat1',0)->where('idcat2',0);
        $categories = Category::all()->pluck('id','name');  //میگیم فقط id  رو نیاز داریم و نام دسته بندی رو
        return view('admin.category.editcategory',compact('categories','category','epizodlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {


        $images=$request->file('images');
        $video=$request->file('video');
        $inputs=$request->all();


        if ($images){
            $inputs['images']=$this->uploadimages($request->file('images'));
        }else{
            $inputs['images']=$category->images;
            $inputs['images']['thumb']=$inputs['imagestumb'];
        }





        if ($video){
            $inputs['video']=$this->uploadvideos($request->file('video'));
        }else{
            $inputs['video']=$category->video;

        }




        $category->update($inputs);


        return redirect(route('index.category'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

        $category=$category->id;





        try {
            DB::table('categories')->where('id',$category)->delete();
            DB::table('categories')->where('idcat1',$category)->delete();
            DB::table('categories')->where('idcat2',$category)->delete();



            $msg = "حذف با موفقیت انجام شد!";
        } catch (Exception $exception) {
            $msg = "مشکلی در حذف کردن اتفاق افتاده است دوباره تلاش کنید";

        }

        return redirect(route('index.category'))->with('warning', $msg);
    }





}
