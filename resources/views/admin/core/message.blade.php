@if($errors->any())

    <div class="alert alert-arrow-left alert-icon-left alert-light-danger m-4" role="alert">

        <ul>

            @foreach($errors->all() as $error)

                <li>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <strong>هشدار!</strong>


                    {{$error}}

                </li>
            @endforeach

        </ul>



    </div>

@endif

@if(session('success'))

    <div class="alert alert-success">
        {{session('success')}}
    </div>

@endif
@if(session('warning'))

    <div class="alert alert-warning">
        {{session('warning')}}
    </div>

@endif
