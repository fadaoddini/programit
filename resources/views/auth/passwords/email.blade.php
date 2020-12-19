@extends('front.main')

@section('content')



    <div id="loading-icon-bx"></div>
    <div class="account-form">
        <div class="account-head" style="background-image:url({{url('front/assets/images/background/bg2.jpg')}});">
            <a href="{{ route('index') }}"><img src="{{url('front/assets/images/logo-white-2.png')}}" alt=""></a>
        </div>
        <div class="account-form-inner">
            <div class="account-container">
                <div class="heading-bx left">
                    <h2 class="title-head"> رمز عبور  <span> فراموشی</span></h2>

                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="contact-bx" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="row placeani">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>پست‌الکترونیک</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 m-b30">
                            <button name="submit" type="submit" value="Submit" class="btn button-md">ارسال</button>
                        </div>
                        {{--<div class="col-lg-12">
                            <h6 class="text-right">عضویت با</h6>
                            <div class="d-flex">
                                <a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>فیسبوک</a>
                                <a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>گوگل</a>
                            </div>
                        </div>--}}
                    </div>
                </form>
            </div>
        </div>
    </div>






@endsection
