<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method=="POST"){
            return [
                'name'=> 'required|max:250',
                'lid'=> 'required|max:250',
                'description'=> 'required',
                'price'=> 'required',
                'cat_id1'=> 'required',
                'cat_id2'=> 'required',
                'cat_id3'=> 'required',
                'images'=> 'required|mimes:jpeg,jpg,png',
                'video'=> 'mimes:mp4,mp3,pdf',
            ];
        }else{
            return [
                'name'=> 'required|max:250',
                'lid'=> 'required|max:250',
                'description'=> 'required',
                'price'=> 'required',
                'cat_id1'=> 'required',
                'cat_id2'=> 'required',
                'cat_id3'=> 'required',
                'images'=> 'mimes:jpeg,jpg,png',
                'video'=> 'mimes:mp4,mp3,pdf',
            ];
        }
    }
}
