<header class="header rs-nav header-transparent">
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="topbar-left">
                    <ul>
                       {{-- <li><a href="#"><i class="fa fa-question-circle"></i>آیا می دانید مثلث محکم ترین و مقاوم ترین چند ظلعی جهان اشکال است</a></li>--}}
                       {{-- <li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>--}}
                    </ul>
                </div>
                <div class="topbar-right">
                    <ul>
                        @auth
                            <li ><a href="#">سلام،

                                    {{Auth::user()->family}}
                                </a>


                                    @if(Auth::user()->role=='1')

                                        <li><a style="padding: 5px 15px;" href="{{route('admin.index')}}" target="_blank" class="btn btn-danger">
                                                مدیریت </a></li>
                                    @endif
                                    {{--<li ><a href="{{route('profile',Auth::user()->id)}}">ناحیه کاربری</a></li>--}}
                                    <li>
                                        <form action="{{route('logout')}}" method="POST">
                                            @csrf
                                            <button style="padding: 5px 15px;" type="submit" class="btn btn-danger btn-sm">خروج</button>

                                        </form>
                                    </li>

                            </li>


                        @else
                            <li><a href="{{route('login')}}">ورود</a></li>
                            <li><a href="{{route('register')}}">ثبت نام</a></li>


                        @endauth
                            <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i
                                        class="fa fa-search"></i></button></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="sticky-header navbar-expand-lg">
        <div class="menu-bar clearfix">
            <div class="container clearfix">
                <!-- Header Logo ==== -->
                <div class="menu-logo logo-change">
                    <a href="{{route('index')}}"><img src="{{url('front/assets/images/logo-3.png')}}" class="logo1" alt=""><img
                            src="{{url('front/assets/images/logo-white-3.png')}}" class="logo2" alt=""></a>
                </div>
                <!-- Mobile Nav Button ==== -->
                <button class="navbar-toggler collapsed menuicon justify-content-start" type="button" data-toggle="collapse"
                        data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <!-- Author Nav ==== -->
                <div class="secondary-menu">
                    <div class="secondary-inner">
                        <ul>
                            {{--<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>--}}
                            <!-- Search Button ==== -->

                        </ul>
                    </div>
                </div>
                <!-- Search Box ==== -->
                <div class="nav-search-bar">
                    <form action="#">
                        <input name="search" value="" type="text" class="form-control" placeholder="جستجو...">
                        <span><i class="ti-search"></i></span>
                    </form>
                    <span id="search-remove"><i class="ti-close"></i></span>
                </div>
                <!-- Navigation Menu ==== -->
                <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                    <div class="menu-logo">
                        <a href="{{route('index')}}"><img src="{{url('front/assets/images/logo.png')}}" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('index')}}">خانه </a>

                        </li>

                        @foreach($categoryasli as $cat)
                            <li class="add-mega-menu"><a href="javascript:;">{{$cat->name}} <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu add-menu">
                                    <li class="add-menu-left">
                                        <h5 class="menu-adv-title">

                                        <a href="{{route('index.courses',$cat->id)}}">
                                            {{$cat->name}}
                                        </a>
                                        </h5>
                                        <ul>
                                            <li><a href="{{route('index.courses',$cat->id)}}">{{$cat->lid}}</a></li>


                                        </ul>
                                    </li>
                                    <li class="add-menu-right">
                                        <img class="rounded-circle" src="{{$cat->images['thumb']}}" alt="" />
                                    </li>
                                </ul>
                            </li>
                        @endforeach


                    </ul>
                    <div class="nav-social-link">
                       {{-- <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                        <a href="javascript:;"><i class="fa fa-linkedin"></i></a>--}}
                    </div>
                </div>
                <!-- Navigation Menu END ==== -->
            </div>
        </div>
    </div>
</header>
