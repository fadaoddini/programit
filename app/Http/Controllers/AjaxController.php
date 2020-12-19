<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function index($idcat) {
        $msg = $idcat;
        return response()->json(array('msg'=> $msg), 200);
    }
}
