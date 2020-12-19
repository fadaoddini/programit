<div class="container">
    <div class="row">
        <div class="col-md-12 heading-bx style1 text-center">
            <h2 class="title-head">با پروگرمیت بیشتر آشنا شوید</h2>
            <p>
ما سعی می کنیم آموزش هایی کاملا کاربردی در اختیار شما قرار دهیم و از بهترین اساتید برای ارائه مطالب استفاده خواهیم کرد
            </p>
        </div>
    </div>
    <div class="row m-b50">


@foreach($categoryasli as $cat)

        <div class="col-lg-4 col-md-6">
            <div class="services-bx text-left m-b30">
                <div class="feature-lg text-white m-b30">
                    <span class="icon-cell"><img class="rounded-circle" src="{{$cat->images['thumb']}}"></span>
                </div>
                <div class="icon-content">
                    <h5 class="ttr-tilte ">{{$cat->name}}</h5>
                    <p>{{$cat->lid}}</p>

                    <a href="{{route('index.courses',$cat->id)}}" class="readmore">زیرمجموعه ها<i class="la la-arrow-left"></i></a>
                </div>
                <div class="service-no">{{$cat->name}}</div>
            </div>
        </div>

@endforeach


    </div>
</div>
