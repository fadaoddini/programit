@extends('admin.master')

@section('content')

    <style>
        .zirdaste{
            display: none;
        }
        .nist{
            display: none;
        }

        .hast{
            display: block;
        }
    </style>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div class="page-header">
                <div class="page-title">
                    <h3>ویرایش دوره</h3>
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

                        <div class="widget-content widget-content-area" >

                            <form action="{{route('course.update',$course->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="name">عنوان</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                    value="{{$course->name}}">
                                            <small>عنوان دوره</small>
                                        </div>

                                        @if(isset($cat_id1))

                                            <div  class="form-group col-md-12">
                                                <label for="name">دسته مادر</label>
                                                <select onchange="checkedidcat(this)" name="cat_id1" class="form-control selectpicker" data-live-search="true">

                                                    @foreach($cat_id1 as $cat_name => $cat_id )

                                                        <option data-cat="{{$cat_id}}" value="{{$cat_id}}"
                                                        <?php
                                                            if (in_array($cat_id, $course->pluck('id')->toArray())) echo "selected"
                                                            ?>

                                                        >
                                                            {{$cat_name}}
                                                        </option>
                                                    @endforeach

                                                        @foreach($idcat as $cat_name => $cat_id )
                                                            <option data-cat="{{$cat_id}}" value="{{$cat_id}}">
                                                                {{$cat_name}}
                                                            </option>
                                                        @endforeach
                                                </select>




                                            </div>


                                            @else

                                            <div  class="form-group col-md-12">
                                                <label for="name">دسته مادر</label>
                                                <select onchange="checkedidcat(this)" name="cat_id1" class="form-control selectpicker" data-live-search="true">

                                                    <option value="0" selected> انتخاب کنید (پیش فرض والد)</option>
                                                    @foreach($idcat as $cat_name => $cat_id )
                                                        <option data-cat="{{$cat_id}}" value="{{$cat_id}}"
                                                        <?php
                                                            if (in_array($cat_id, $course->pluck('id')->toArray())) echo "selected"
                                                            ?>

                                                        >
                                                            {{$cat_name}}
                                                        </option>
                                                    @endforeach
                                                </select>




                                            </div>

                                            @endif






                                        @if(isset($cat_id2))



                                            <div  class="form-group col-md-12 avali ">
                                                <label for="name">زیردسته</label>
                                                <select onchange="checkedidcat2(this)" id="zirdaste2"  name="cat_id2" autocomplete="off"  class="form-control selectpicker  ">

                                                    @foreach($cat_id2 as $cat_name => $cat_id )

                                                        <option data-cat="{{$cat_id}}" value="{{$cat_id}}"
                                                        <?php
                                                            if (in_array($cat_id, $course->pluck('id')->toArray())) echo "selected"
                                                            ?>

                                                        >
                                                            {{$cat_name}}
                                                        </option>
                                                    @endforeach
                                                </select>



                                            </div>

                                            @else
                                            <div  class="form-group col-md-12 avali nist">
                                                <label for="name">زیردسته</label>
                                                <select onchange="checkedidcat2(this)" id="zirdaste2"  name="cat_id2" autocomplete="off"  class="form-control selectpicker  ">

                                                </select>



                                            </div>

                                            @endif








                                        @if(isset($cat_id3))
                                            <div  class="form-group col-md-12 sevom ">
                                                <label for="name">سطح سوم</label>
                                                <select  id="zirdaste3"  name="cat_id3" autocomplete="off"  class="form-control selectpicker  ">
                                                    @foreach($cat_id3 as $cat_name => $cat_id )

                                                        <option data-cat="{{$cat_id}}" value="{{$cat_id}}"
                                                        <?php
                                                            if (in_array($cat_id, $course->pluck('id')->toArray())) echo "selected"
                                                            ?>

                                                        >
                                                            {{$cat_name}}
                                                        </option>
                                                    @endforeach
                                                </select>



                                            </div>



                                        @else
                                        <div  class="form-group col-md-12 sevom nist">
                                            <label for="name">سطح سوم</label>
                                            <select  id="zirdaste3"  name="cat_id3" autocomplete="off"  class="form-control selectpicker  ">

                                            </select>



                                        </div>

                                        @endif








                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="price">قیمت</label>
                                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                                                               value="{{$course->price}}">
                                                        <small>قیمت دوره به تومان اگر عددی قرار نگیرد بصورت پیش فرض 0 می باشد</small>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="takhfif">تخفیف</label>
                                                        <input type="number" class="form-control @error('takhfif') is-invalid @enderror" name="takhfif" id="takhfif"
                                                               value="{{$course->takhfif}}">
                                                        <small>تخفیف دوره به درصد اگر عددی قرار نگیرد بصورت پیش فرض 0 می باشد</small>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="lid">لید</label>
                                            <textarea type="text" rows="2" name="lid" class="form-control"
                                                      id="lid">{{$course->lid}}</textarea>
                                            <small>توضیحی کوتاه و کامل از دوره را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="description">توضیحات</label>
                                            <textarea type="text" rows="6" name="description" class="form-control"
                                                      id="description">{{$course->description}}</textarea>
                                            <small>توضیح کامل از دوره را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="tags">تگ</label>
                                            <input type="text" class="form-control" name="tags" id="tags"
                                                   value="{{$course->tags}}">
                                            <small>تگ ها برای موتورهای جستجو و سئو مناسب هستند لطفا کلمات با کامای انگلیسی جدا شوند</small>
                                        </div>




                                    </div>
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="status">وضعیت</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="1" {{$course->status=="1" ? 'selected' : ''}} >فعال</option>
                                                <option value="0" {{$course->status=="0" ? 'selected' : ''}}>غیرفعال</option>
                                            </select>
                                            <small>می توانید با غیر فعال کردن دوره آن را از دید کاربران پنهان کنید</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="role">ویژه/رایگان/نقدی</label>
                                            <select id="role" name="role" class="form-control">
                                                <option value="vip" {{$course->role=="vip" ? 'selected' : ''}} >VIP</option>
                                                <option value="free" {{$course->role=="free" ? 'selected' : ''}}>رایگان</option>
                                                <option value="cash" {{$course->role=="cash" ? 'selected' : ''}}>نقدی</option>
                                            </select>
                                            <small>دوره شما چه وضعیتی دارد بصورت پیش فرض روی نقدی می باشد</small>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="row">

                                                @foreach($course->images['images'] as $key=>$img)


                                                    <div class="col-md-3">
                                                        <label class="new-control new-radio new-radio-text radio-classic-success">
                                                            <input class="new-control-input" name="imagestumb" type="radio" value="{{$img}}" {{$course->images['thumb']==$img ? 'checked' : ''}}>
                                                            <span class="new-control-indicator"></span><span class="new-radio-content">      {{$key}}</span>
                                                        </label>

                                                        <a href="{{$img}}">
                                                            <img width="100%" src="{{$img}}">
                                                        </a>



                                                    </div>


                                                @endforeach


                                            </div>
                                        </div>




                                    {{--    <div class="form-group col-md-12">
                                            <label for="video">فیلم</label>
                                            <input type="file" class="form-control " name="video" id="video"
                                            >
                                            <small>برای معرفی ویدئویی دوره ایجاد شده کاربرد دارد</small>
                                        </div>
--}}
                                        <div class="form-group col-md-12">
                                            <div class="input-group">
                                                <input type="text" id="image_label" class="form-control" name="video"
                                                       aria-label="Image" aria-describedby="button-image" value="{{$course->video}}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                                </div>
                                            </div>

                                            <small>فرمت قابل قبول mp4 می باشد</small>
                                        </div>




                                    </div>
                                </div>






                                <button type="submit" class="col-12 btn btn-primary mt-3">ویرایش</button>
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


    <script>
        document.addEventListener("DOMContentLoaded", function() {

            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
            });
        });

        // set file link
        function fmSetLink($url) {
            document.getElementById('image_label').value = $url;
        }
    </script>


@endsection
