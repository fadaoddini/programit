<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'family',
        'password',
        'status',
    ];
    protected $attributes=[
      'codemeli'=>'0',
      'status'=>'0',
      'role'=>'2',
      'emtiaz'=>'50',
      'emtiaz'=>'50',
      'filename'=>'no',
      'nummoarefi'=>0,
      'sumkharid'=>0,
      'description'=>'توضیحاتی را راجع به خود می توانید بنویسید',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function activationCode(){

        return $this->hasMany(ActivationCode::class);
    }



}
