@extends('admin.master')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>زیر مجموعه برای

                        <span class=" float-right mr-4  " style="font-size: 24px; display: contents; color: #ff376e; ">
                        {{$category->name}}
                    </span>

                    </h3>




                </div>
            </div>
            @include('admin.core.message')

            <div class="row layout-top-spacing">
                {{-- <div class="col-xl-4 col-lg-6 col-md-6  mb-4">
                     <div class="card b-l-card-1 h-100" style="-webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);-moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07); box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);">

                         <div class="card-body">
                             <strong class="card-category"> روند </strong>
                             <h5 class="card-title mt-2">روند سبک</h5>
                             <p class="card-text meta-info meta-time mb-2"><small class=""> 3 دقیقه پیش</small></p>
                             <p class="card-text mb-4">لورم ایپسوم متن ساخت و ساز با ارائه محصولات تولیدی و تولیدی با استفاده از طراحان گرافیک ، با استفاده از طراحان گرافیک. </p>
                             <button class="btn btn-outline-warning mt-2">بیشتر بخوانید</button>
                         </div>
                     </div>
                 </div>--}}

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom:24px;">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>در حال ایجاد کردن زیر دسته برای {{$category->name}} هستید</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area" >
                            <form action="{{route('create.categoryto')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="name">عنوان</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                   placeholder="عنوان" value="{{old('name')}}">
                                            <small>نام دسته بندی</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">زیرمجموعه</label>
                                            <select name="idcat1" class="form-control selectpicker" data-live-search="false">
                                                <option value="{{$category->id}}" >{{$category->name}}</option>

                                            </select>
                                            <small>قابل تغییر نیست</small>


                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="lid">لید</label>
                                            <textarea type="text" rows="2" name="lid" class="form-control"
                                                      id="lid">{{old('lid')}}</textarea>
                                            <small>توضیحی کوتاه و کامل از دسته بندی را اینجا بنویسید</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">توضیحات</label>
                                            <textarea type="text" rows="6" name="description" class="form-control"
                                                      id="description">{{old('description')}}</textarea>
                                            <small>توضیح کامل از دسته بندی را اینجا بنویسید</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="tags">تگ</label>
                                            <input type="text" class="form-control" name="tags" id="tags"
                                                   value="{{old('tags')}}">
                                            <small>تگ ها برای موتورهای جستجو و سئو مناسب هستند لطفا کلمات با کامای انگلیسی جدا شوند</small>
                                        </div>


                                        <div class="form-group col-md-12">

                                        </div>
                                        <div class="form-group col-md-12">

                                        </div>

                                    </div>
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="status">وضعیت</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="1" >فعال</option>
                                                <option value="0">غیرفعال</option>
                                            </select>
                                            <small>می توانید با غیر فعال کردن دسته آن را از دید کاربران پنهان کنید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="images">تصویر اصلی</label>
                                            <input type="file" class="form-control " name="images" id="images"
                                                   >
                                            <small>برای معرفی بهتر دسته ایجاد شده کاربرد دارد</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="video">فیلم</label>
                                            <input type="file" class="form-control " name="video" id="video"
                                            >
                                            <small>برای معرفی ویدئویی دسته ایجاد شده کاربرد دارد</small>
                                        </div>

                                    </div>
                                </div>






                                <button type="submit" class="col-12 btn btn-primary mt-3">ایجاد</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""> © کپی رایت</p>
            </div>
            <div class="footer-section f-section-2">
                <span class="copyright"> بومی سازی شده توسط : <a href=""> محمد سعید فداالدینی </a> </span></div>
        </div>
    </div>
@endsection
