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

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                </div>
                <form class="contact-bx" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>


            </div>
        </div>
    </div>
@endsection
