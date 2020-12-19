<?php

use App\Events\UserActivation;
use App\Models\ActivationCode;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


/*Route::get('/',function (){

    event(new UserActivation(User::find(1)));

});*/

 Route::get('/', 'App\Http\Controllers\front\IndexController@index')->name('index');
 Route::get('courses/{id}', 'App\Http\Controllers\front\CourseController@index')->name('index.courses');
 Route::get('coursedetail/{slug}', 'App\Http\Controllers\front\CourseController@details')->name('index.details');
 Route::get('courseonedetail/{course_id}/{id}', 'App\Http\Controllers\front\CourseController@onedetails')->name('index.onedetails');


 Route::get('/{token}', 'App\Http\Controllers\front\UserController@activation')->name('active.email');




 Route::get('download/{user}/file',function ($file){
    return Storage::download(request('path'));
 })->name('download.file')->middleware('signed');












Route::get('admin/main', 'App\Http\Controllers\admin\AdminController@index')->name('admin.index');



Route::get('article/', 'App\Http\Controllers\admin\ArticleController@index')->name('index1');

Route::get('learn/', 'App\Http\Controllers\admin\ArticleController@index')->name('index.learning');
Route::get('addlearn/{article}', 'App\Http\Controllers\admin\ArticleController@create')->name('create.learning');



Route::namespace("App\Http\Controllers\admin")->middleware('checkrole')->prefix('admincategory')->group(function (){

    Route::get('category/', 'CategoryController@index')->name('index.category');
    Route::get('category/sub/{idcat}', 'CategoryController@indexsub')->name('index.categorysub');
    Route::get('category/sub2/{idcat}', 'CategoryController@indexsub2')->name('index.categorysub2');
    Route::get('addcategory/', 'CategoryController@create')->name('create.category');
    Route::get('addcategorysub/{category}', 'CategoryController@createsub')->name('createsub.category');
    Route::get('addcategorysub2/{idid}/{category}', 'CategoryController@createsub2')->name('createsub2.category');
    Route::post('addcategoryto/', 'CategoryController@store')->name('create.categoryto');
    Route::post('addcategoryto2/', 'CategoryController@store2')->name('create.categoryto2');
    Route::post('addcategoryto/{category}', 'CategoryController@update')->name('category.update');
    Route::get('/editcategory/{category}', 'CategoryController@edit')->name('edit.categoryto');
    Route::get('/deletecategory/{category}', 'CategoryController@destroy')->name('category.destroy');


});



Route::namespace("App\Http\Controllers\admin")->middleware('checkrole')->prefix('admincourse')->group(function (){
    Route::get('course/', 'CourseController@index')->name('index.course');
    Route::get('course/{course}', 'CourseController@indexclass')->name('index.course.class');
    Route::get('addcourse/', 'CourseController@create')->name('create.course');
    Route::post('addcours/', 'CourseController@store')->name('store.course');
    Route::get('/editcourse/{course}', 'CourseController@edit')->name('edit.course');
    Route::post('addcourseto/{course}', 'CourseController@update')->name('course.update');
    Route::get('/deletecourse/{course}', 'CourseController@destroy')->name('course.destroy');
    Route::post('subcat', 'CourseController@ajaxcat1')->name('subcat');
    Route::post('subcat2', 'CourseController@ajaxcat2')->name('subcat2');
    Route::get('/statuschange/{course}', 'CourseController@updatechangecourse')->name('statuschangecourse');
});


Route::namespace("App\Http\Controllers\admin")->middleware('checkrole')->prefix('adminepizod')->group(function (){
    Route::get('epizod/', 'EpizodController@index')->name('index.epizod');

    Route::get('addepizod/', 'EpizodController@create')->name('create.epizod');
    Route::post('addepizode/', 'EpizodController@store')->name('store.epizod');
    Route::post('addepizodto/{epizod}', 'EpizodController@update')->name('epizod.update');
    Route::get('/editepizod/{epizod}', 'EpizodController@edit')->name('edit.epizod');
    Route::get('/deleteepizod/{epizod}', 'EpizodController@destroy')->name('epizod.destroy');

});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

