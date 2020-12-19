@include('front.head')

<div class="page-wraper">
    <div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
@include('front.header')
<!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">


        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url({{url('front/assets/images/banner/banner3.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">{{$title_course}}</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{route('index')}}">خانه</a></li>
                    <li ><a href="{{route('index.courses',$cat->id)}}">{{$cat->name}}</a></li>
                    <li >{{$title_course}}</li>
                </ul>
            </div>
        </div>
        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row d-flex flex-row-reverse">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                            <div class="course-detail-bx">
                                <div class="course-price">
                                    <del>

                                        {{$course->price}}


                                        تومان </del>
                                    <h4 class="price">

                                        {{$course->price-(($course->price*$course->takhfif)/100)}}

                                        تومان </h4>
                                </div>
                                <div class="course-buy-now text-center">
                                    <a href="#" class="btn radius-xl text-uppercase">خرید دوره</a>
                                </div>
                                <div class="teacher-bx">
                                    <div class="teacher-info">
                                        <div class="teacher-thumb">
                                            <img src="{{$cat->images['thumb']}}" alt="" />
                                        </div>
                                        <div class="teacher-name">
                                            <h5>
                                                <a href="{{route('index.courses',$cat->id)}}" >
                                                {{$cat->name}}
                                                </a>
                                            </h5>
                                  {{--          <span>{{$cat->lid}}</span>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="course-info-list scroll-page">
                                    <ul class="navbar">

                                        <li class="px-4 py-1"><a class="nav-link" ><i class="ti-time"></i>زمان دوره

                                            |  {{$course->timing}}

                                            </a></li>
                                        <li class="px-4 py-1"><a class="nav-link" ><i class="ti-user"></i> دانشجویان   </a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9 col-md-8 col-sm-12">

                            <div class="courses-post">
                                <div class="ttr-post-media media-effect">

                                    <video poster="{{$course->images['thumb']}}" controls="" width="100%">
                                        <source src="{{$course->video}}" type="video/mp4">
                                        <source src="{{$course->video}}" type="video/avi">
                                    </video>


                                </div>
                                <div class="ttr-post-info">
                                    <div class="ttr-post-title ">
                                        <h2 class="post-title">{{$course->name}}</h2>
                                    </div>
                                    <div class="ttr-post-text pt-5 pb-3">
                                        <p class="pr-4">

                                            {{$course->lid}}

                                        </p>
                                        <hr>
                                        <p class="pr-4">

                                            {{$course->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="m-b30" id="curriculum">
                                <h4>محتوا و لینک ها</h4>



                                <div class="col-md-12">
                                    <div class="why-chooses-bx ">
                                        <div class="ttr-accordion m-b30 faq-bx" id="accordion1">


                                            @foreach($epizods as $row)
                                            <div class="panel">
                                                <div class="acod-head">
                                                    <h6 class="acod-title">
                                                        <a data-toggle="collapse" href="#faq1" class="" data-parent="#faq{{$row->number}}" aria-expanded="true">

                                                        {{$row->name}}

                                                        </a> </h6>
                                                </div>
                                                <div id="faq{{$row->number}}" class="acod-body collapse show" style="">
                                                    <div class="acod-content">
                                                        {{$row->description}}

                                                        <hr>

                                                        <div class="course-buy-now text-center">
                                                            <a href="{{route('index.onedetails', [$row->course_id,$row->id])}}" class="btn radius-xl text-uppercase">نمایش محتوا</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                                @endforeach



                                        </div>
                                    </div>
                                    <div></div></div>


                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->

    <button class="back-to-top fa fa-chevron-up"></button>
</div>
@include('front.footer')

