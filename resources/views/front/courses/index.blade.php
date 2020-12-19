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
                    <h1 class="text-white">{{$cat1_name}}</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="{{route('index')}}">خانه</a></li>
                    <li >{{$cat1_name}}</li>
                </ul>
            </div>
        </div>
        <div class="content-block">


            <div class="section-area section-sp1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                           {{-- <div class="widget courses-search-bx placeani">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label>جستجو دوره‌ها</label>
                                        <input name="name" type="text" required class="form-control">
                                    </div>
                                </div>
                            </div>--}}
                            <div class="widget widget_archive">
                                <h5 class="widget-title style-1">مسیریابی</h5>
                                <ul>



                                    @foreach($categoryasli as $item)
                                    <li style="width: 100%">
                                        <a style="width: 100%" class="btn radius-xl " href="{{route('index.courses',$item->id)}}">{{$item->name}}</a>
                                    </li>

                                        @endforeach

                                </ul>
                            </div>
                            <div class="widget">
                                <a href="#"><img src="{{url('front/assets/images/adv/adv222.png')}}" alt="" /></a>
                            </div>

                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="row">

                                @foreach($coursevije as $row)

                                <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                    <div class="cours-bx">
                                        <div class="action-box">
                                            <img src="{{$row->images['thumb']}}" alt="">
                                            <a href="{{route('index.details',$row->slug)}}" class="btn">جزئیات دوره</a>
                                        </div>
                                        <div class="info-bx text-center">
                                            <h5><a href="{{route('index.details',$row->slug)}}">{{$row->name}}</a></h5>
                                            <span>{{$row->tags}}</span>
                                        </div>
                                        <div class="cours-more-info">
                                            <div class="review">
                                                <span>3 نظرات</span>
                                                <ul class="cours-star">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                <del>

                                                    {{$row->price}}

                                                    تومان </del>
                                                <h5>

                                                    {{($row->price*$row->takhfif)/100}}
                                                    تومان </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            @endforeach


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
