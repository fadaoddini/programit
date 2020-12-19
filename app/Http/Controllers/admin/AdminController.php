<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{

    public function index()
    {
        $epizodlist=$this->epizodlist();


        return view('admin.index',compact('epizodlist'));
    }







    protected function uploadimages($file)
    {

        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $filename = $file->getClientOriginalName();
        $imgpath = "/upload/images/{$year}/{$month}/";
        $file=$file->move(public_path($imgpath), $filename);
        $sizes=["300","600","900"];

        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imgpath , $filename);
        $url['thumb'] = $url['images'][$sizes[0]];

        return $url;

    }
    private function resize($path , $sizes , $imagePath , $filename)
    {
        $images['original'] = $imagePath . $filename;
        foreach ($sizes as $size) {
            $images[$size] = $imagePath . "{$size}_" . $filename;

            Image::make($path)->resize($size, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path($images[$size]));
        }

        return $images;
    }
    protected function uploadvideos($file)
    {

        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        if ($file){
            $filename = $file->getClientOriginalName();
            $videopath = "/upload/videos/{$year}/{$month}/";
            $file=$file->move(public_path($videopath), $filename);
        }else{
            $file="no video";
        }



        return $file;

    }


    protected function uploadetc($file)
    {

        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        if ($file){
            $filename = $file->getClientOriginalName();
            $videopath = "/upload/etc/{$year}/{$month}/";
            $file=$file->move(public_path($videopath), $filename);
        }else{
            $file="no files";
        }



        return $file;

    }

    protected function setCourseTime($id_course,$time){
        $timestamp = Carbon::parse('00:00:00');
        $course=Course::where('id',$id_course)->first();
        $old_timing=$course->timing;
        $old_timing=strtotime($old_timing);
        $timestamp->addSecond($old_timing);
        if (strlen($time)==5){
           $timer= '00:'.$time;
        }else{
            $timer= $time;
        }
        $timer=strtotime($timer);
        $timestamp->addSecond($timer);
        $new_timing=Carbon::parse($timestamp)->format('H:i:s');
        $course->timing=$new_timing;
        $course->save();



    }





}
