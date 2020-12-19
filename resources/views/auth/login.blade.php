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
                    <h2 class="title-head">ورود به  <span> اکانت </span></h2>
                    <p>اکانت ندارید؟ <a href="{{ route('register') }}"> همین حالا بسازید </a></p>
                </div>
                <form class="contact-bx" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row placeani">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>تلفن همراه</label>
                                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <label>رمزعبور</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group form-forget">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="customControlAutosizing" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customControlAutosizing">مرا به خاطر بسپار</label>
                                </div>

                                @if (Route::has('password.request'))

                                    <a href="{{ route('password.request') }}" class="ml-auto">فراموشی رمزعبور؟</a>

                                @endif

                            </div>
                        </div>
                        <div class="col-lg-12 m-b30">
                            <button name="submit" type="submit" value="Submit" class="btn button-md">ورود</button>
                        </div>
                        {{--<div class="col-lg-12">
                            <h6 class="text-right">ورود از طریق</h6>
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
