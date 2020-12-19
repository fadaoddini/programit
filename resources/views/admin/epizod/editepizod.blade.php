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
                    <h3> ویرایش رسانه</h3>
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

                            <form action="{{route('epizod.update',$epizod->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="name">عنوان</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                   value="{{$epizod->name}}">
                                            <small>عنوان رسانه</small>
                                        </div>



                                        <div  class="form-group col-md-12">
                                            <label for="course_id">مربوط به دوره</label>
                                            <select  name="course_id" class="form-control selectpicker" data-live-search="true">

                                                <option  selected> انتخاب کنید </option>
                                                @foreach($course as $cat_name => $cat_id )
                                                    <option value="{{$cat_id}}"
                                                    <?php
                                                        if (in_array($cat_id, $epizod->pluck('id')->toArray())) echo "selected"
                                                        ?>

                                                    >
                                                        {{$cat_name}}
                                                    </option>
                                                @endforeach
                                            </select>




                                        </div>

                               {{--         <div class="form-group col-md-12">
                                            <label for="videoUrl">لینک فیلم را وارد کنید</label>
                                            <input type="text" class="form-control @error('videoUrl') is-invalid @enderror" name="videoUrl" id="videoUrl"
                                                   value="{{$epizod->videoUrl}}">
                                            <small>فرمت قابل قبول mp4 می باشد</small>
                                        </div>
--}}
                                        <div class="form-group col-md-12">
                                            <div class="input-group">
                                                <input type="text" id="image_label" class="form-control" name="videoUrl"
                                                       aria-label="Image" aria-describedby="button-image" value="{{$epizod->videoUrl}}">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                                </div>
                                            </div>

                                            <small>فرمت قابل قبول mp4 می باشد</small>
                                        </div>



                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="time">زمان فیلم</label>
                                                        <input type="text" class="form-control @error('time') is-invalid @enderror" name="time" id="time"
                                                               value="{{$epizod->time}}">
                                                        <small>قفرمت بصورت (00:00:00) وارد شود</small>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="number">قسمت</label>
                                                        <input type="text" class="form-control @error('number') is-invalid @enderror" name="number" id="number"
                                                               value="{{$epizod->number}}">
                                                        <small>جلسه چندم محتوای تولید شده است</small>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>










                                        <div class="form-group col-md-12">
                                            <label for="lid">لید</label>
                                            <textarea type="text" rows="2" name="lid" class="form-control"
                                                      id="lid">{{$epizod->lid}}</textarea>
                                            <small>توضیحی کوتاه و کامل از رسانه را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="description">توضیحات</label>
                                            <textarea type="text" rows="6" name="description" class="form-control"
                                                      id="description">{{$epizod->description}}</textarea>
                                            <small>توضیح کامل از رسانه را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="tags">تگ</label>
                                            <input type="text" class="form-control" name="tags" id="tags"
                                                   value="{{$epizod->tags}}">
                                            <small>تگ ها برای موتورهای جستجو و سئو مناسب هستند لطفا کلمات با کامای انگلیسی جدا شوند</small>
                                        </div>




                                    </div>
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="status">وضعیت</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="1" {{$epizod->status=="1" ? 'selected' : ''}} >فعال</option>
                                                <option value="0" {{$epizod->status=="0" ? 'selected' : ''}}>غیرفعال</option>
                                            </select>
                                            <small>می توانید با غیر فعال کردن رسانه آن را از دید کاربران پنهان کنید</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="type">ویژه/رایگان/نقدی</label>
                                            <select id="type" name="role" class="form-control">
                                                <option value="vip" {{$epizod->type=="vip" ? 'selected' : ''}} >VIP</option>
                                                <option value="free" {{$epizod->type=="free" ? 'selected' : ''}}>رایگان</option>
                                                <option value="cash" {{$epizod->type=="cash" ? 'selected' : ''}}>نقدی</option>
                                            </select>
                                            <small>رسانه شما چه وضعیتی دارد بصورت پیش فرض روی نقدی می باشد</small>
                                        </div>



                                        <div class="form-group col-md-12">
                                            <label for="images">محتوای رسانه</label>
                                            <input type="file" class="form-control " name="images" id="images" value="{{$epizod->images}}"
                                            >
                                            <small>این محتوا در قالب فایل قابل دانلود به کاربر نمایش داده می شود</small>
                                            <br>
                                            <small>


                                            <a href="{{$epizod->images}}" class="btn btn-success btn-xs">
                                                لینک دانلود
                                            </a>
                                            </small>
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
