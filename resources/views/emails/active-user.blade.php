@component('mail::message')

    #ایمیل فعالسازی


@component('mail::button',['url'=>route('active.email',$code)])
فعالسازی اکانت
@endcomponent
    @endcomponent
