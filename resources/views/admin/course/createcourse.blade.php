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
                    <h3>دوره جدید</h3>
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

                            <form action="{{route('store.course')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="name">عنوان</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                                   placeholder="عنوان" value="{{old('name')}}">
                                            <small>نام دوره</small>
                                        </div>




                                        <div  class="form-group col-md-12">
                                            <label for="name">دسته مادر</label>
                                            <select onchange="checkedidcat(this)" name="idcat1" class="form-control selectpicker" data-live-search="true">

                                                <option value="0" selected> انتخاب کنید (پیش فرض والد)</option>
                                                @foreach($idcat as $cat_name => $cat_id )
                                                    <option data-cat="{{$cat_id}}" value="{{$cat_id}}">
                                                        {{$cat_name}}
                                                    </option>
                                                @endforeach
                                            </select>




                                        </div>

                                        <div  class="form-group col-md-12 avali nist">
                                            <label for="name">زیردسته</label>
                                            <select onchange="checkedidcat2(this)" id="zirdaste2"  name="idcat2" autocomplete="off"  class="form-control selectpicker  ">

                                            </select>



                                        </div>


                                        <div  class="form-group col-md-12 sevom nist">
                                            <label for="name">سطح سوم</label>
                                            <select  id="zirdaste3"  name="idcat3" autocomplete="off"  class="form-control selectpicker  ">

                                            </select>



                                        </div>










                                        {{--<div  class="form-group col-md-12 dovomi nist">
                                            <label for="name">زیردسته</label>
                                            <select  name="idcat1" class="form-control selectpicker zirdaste" data-live-search="true">
                                                <option value="0" >انتخابی صورت نگرفته است</option>
                                                @foreach($idcat2 as $cat_name => $cat_id )
                                                    <option data-cat="{{$cat_id}}" value="{{$cat_id}}">
                                                        {{$cat_name}}
                                                    </option>
                                                @endforeach
                                            </select>



                                        </div>--}}


                                        <div class="form-group ">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="price">قیمت</label>
                                                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" id="price"
                                                                value="{{old('price')}}">
                                                        <small>قیمت دوره به تومان اگر عددی قرار نگیرد بصورت پیش فرض 0 می باشد</small>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="takhfif">تخفیف</label>
                                                        <input type="number" class="form-control @error('takhfif') is-invalid @enderror" name="takhfif" id="takhfif"
                                                               value="{{old('takhfif')}}">
                                                        <small>تخفیف دوره به درصد اگر عددی قرار نگیرد بصورت پیش فرض 0 می باشد</small>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="lid">لید</label>
                                            <textarea type="text" rows="2" name="lid" class="form-control"
                                                      id="lid">{{old('lid')}}</textarea>
                                            <small>توضیحی کوتاه و کامل از دوره را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="description">توضیحات</label>
                                            <textarea type="text" rows="6" name="description" class="form-control"
                                                      id="description">{{old('description')}}</textarea>
                                            <small>توضیح کامل از دوره را اینجا بنویسید</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="tags">تگ</label>
                                            <input type="text" class="form-control" name="tags" id="tags"
                                                   value="{{old('tags')}}">
                                            <small>تگ ها برای موتورهای جستجو و سئو مناسب هستند لطفا کلمات با کامای انگلیسی جدا شوند</small>
                                        </div>




                                    </div>
                                    <div class=" col-md-6 mb-4">
                                        <div class="form-group col-md-12">
                                            <label for="status">وضعیت</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="1" >فعال</option>
                                                <option value="0">غیرفعال</option>
                                            </select>
                                            <small>می توانید با غیر فعال کردن دوره آن را از دید کاربران پنهان کنید</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="role">ویژه/رایگان/نقدی</label>
                                            <select id="role" name="role" class="form-control">
                                                <option value="vip" >VIP</option>
                                                <option value="free">رایگان</option>
                                                <option value="cash" selected>نقدی</option>
                                            </select>
                                            <small>دوره شما چه وضعیتی دارد بصورت پیش فرض روی نقدی می باشد</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                            <label for="images">تصویر دوره</label>
                                            <input type="file" class="form-control " name="images" id="images"
                                                   >
                                            <small>برای معرفی بهتر دوره ایجاد شده کاربرد دارد</small>
                                        </div>


                                        <div class="form-group col-md-12">
                                        <div class="input-group">
                                            <input type="text" id="image_label" class="form-control" name="video"
                                                   aria-label="Image" aria-describedby="button-image">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button" id="button-image">انتخاب</button>
                                            </div>
                                        </div>
                                        <small>برای معرفی ویدئویی دوره ایجاد شده کاربرد دارد</small>
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
