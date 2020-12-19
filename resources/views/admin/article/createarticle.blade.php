@extends('admin.master')

@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <div class="page-title">
                <h3>بخش آموزش</h3>
            </div>
        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-4 col-lg-6 col-md-6  mb-4">
                <div class="card b-l-card-1 h-100" style="-webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);-moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07); box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);">

                    <div class="card-body">
                        <strong class="card-category"> روند </strong>
                        <h5 class="card-title mt-2">روند سبک</h5>
                        <p class="card-text meta-info meta-time mb-2"><small class=""> 3 دقیقه پیش</small></p>
                        <p class="card-text mb-4">لورم ایپسوم متن ساخت و ساز با ارائه محصولات تولیدی و تولیدی با استفاده از طراحان گرافیک ، با استفاده از طراحان گرافیک. </p>
                        <button class="btn btn-outline-warning mt-2">بیشتر بخوانید</button>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12" style="margin-bottom:24px;">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>کنترل های فرم</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area" style="height: 571px;">
                        <form>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">ایمیل</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="ایمیل">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">رمزعبور</label>
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="رمزعبور">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress">آدرس</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group mb-4">
                                <label for="inputAddress2">آدرس 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">شهر</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">دولت</label>
                                    <select id="inputState" class="form-control">
                                        <option selected="">انتخاب کنید...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">کدپستی</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input type="checkbox" class="custom-control-input" id="gridCheck">
                                        <label class="custom-control-label" for="gridCheck">من را بررسی کنید</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">ورود</button>
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
