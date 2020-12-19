@extends('admin.master')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>بخش آموزش</h3>
                </div>
            </div>

            <div class="row layout-top-spacing text-center">



                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">

                            <div class="infobox-2">
                                <div class="info-icon">
                                    <svg> ...</svg>
                                </div>

                                <h5 class="info-heading">دوره جدید</h5>
                                <p class="info-text">
                                    اگر قصد افزودن دوره جدیدی را دارید از این قسمت اقدام کنید
                                </p>
                                <a class="btn btn-success info-link" href="{{route('create.course')}}">
                                    دوره جدید

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">

                            <div class="infobox-2">
                                <div class="info-icon">
                                    <svg> ...</svg>

                                </div>
                                <span class="badge badge-danger counter">22</span>
                                <h5 class="info-heading">مدیریت دوره ها</h5>
                                <p class="info-text">
                                   لیستی از دوره های آموزشی روی سرور که می توانید مدیریت کنید
                                </p>
                                <a class="btn btn-success info-link" href="{{route('index.course')}}">
                                    وارد شوید
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-one widget">
                        <div class="widget-content">

                            <div class="infobox-2">
                                <div class="info-icon">
                                    <svg> ...</svg>
                                </div>
                                <h5 class="info-heading">مدیریت رسانه ها</h5>
                                <p class="info-text">بعد از ایجاد و تعریف یک دوره آموزشی می بایست رسانه ها رو آپلود کنید</p>
                                <a class="btn btn-success info-link" href="{{route('index.epizod')}}">

                                    مدیریت رسانه ها

                                </a>
                            </div>
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
