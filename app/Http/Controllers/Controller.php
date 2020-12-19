<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Epizod;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function epizodlist(){
        $epizodlist = Course::all();
          return $epizodlist;
}

}
