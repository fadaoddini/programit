<div class="section-area section-sp2"
     style="background-image:url({{url('front/assets/images/background/bg4.jpg')}}); background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 style1 text-center heading-bx">
                <h2 class="title-head m-b0"> آخرین دوره ها</h2>
                <p class="m-b0">ما هر هفته یک آموزش جدید در اختیار شما قرار خواهیم داد</p>
            </div>
        </div>
        <div class="row">

            @foreach($last as $row)
                <div class="col-md-6">
                    <div class="event-bx style1">
                        <div class="action-box">
                            <img width="100" src="{{$row->images['thumb']}}" alt="">
                        </div>
                        <div class="info-bx d-flex">
                            <div class="event-info">
                                <h4 class="event-title"><a href="#">{{$row->name}}</a></h4>
                                <ul class="media-post">
                                    <li><a href="#"><i class="fa fa-clock-o"></i>  {{$row->timing}} </a></li>

                                </ul>
                                <p>

                                    {{$row->lid}}

                                </p>
                            </div>
                        </div>
                        <div class="event-time">
                            <div class="event-date">29</div>
                            <div class="event-month">اسفند</div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="text-center">
            <a href="#" class="btn">دیدن تمامی رویدادها</a>
        </div>
    </div>
</div>
