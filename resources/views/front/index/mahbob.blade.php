<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 heading-bx style1 text-center">
            <h2 class="title-head">پیشنهادات ویژه</h2>
            <p>

                ما برای شما پیشنهاداتی داریم که می توانید از آن ها لذت ببرید

            </p>
        </div>
    </div>
    <div class="row">
        <div class="courses-carousel-2 owl-carousel owl-btn-1 col-12 p-lr0 owl-none">

@foreach($coursevije as $vije)

            <div class="item">
                <div class="cours-bx style1">
                    <div class="action-box">
                        <img  src="{{$vije->images['thumb']}}" alt="">
                        <a href="{{route('index.details',$vije->slug)}}" class="btn">جزئیات</a>
                    </div>
                    <div class="info-bx text-center">
                        <h5 style="font-size: 12px;"><a href="#">{{$vije->name}}</a></h5>
                        <span>{{$vije->role}}</span>
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

                                {{$vije->price}}

                                تومان </del>
                            <h5>

                                {{($vije->price*$vije->takhfif)/100}}
                                تومان </h5>
                        </div>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</div>
