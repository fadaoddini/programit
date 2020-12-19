<?php

namespace App\Http\Controllers\front;

use App\Models\ActivationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function activation($token){

        $activationCode=ActivationCode::whereCode($token)->first();
        if (!$activationCode){
            dd('همچین کدی وجود ندارد');
            return redirect(route('index'));
        }

        if ($activationCode->expire < Carbon::now()){

            dd('زمان تایید به پایان رسیده است لطفا مجددا ثبت نام نمایید');
            return redirect(route('index'));
        }

        if ($activationCode->used == true){

            dd('این کد قبلا مورد استفاده قرار گرفته است');
            return redirect(route('index'));
        }

        $activationCode->update([

            'used'=>true,
        ]);
        $activationCode->user()->update([
           'status'=>1
        ]);

        auth()->loginUsingId($activationCode->user->id);

        return redirect(route('index'));

    }
}
