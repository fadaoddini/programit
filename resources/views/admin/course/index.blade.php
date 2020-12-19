@extends('admin.master')

@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
                <div class="page-title">
                    <h3>بخش دوره ها</h3>
                </div>
                <a class="btn btn-success float-left" href="{{route('create.course')}}">
                    جدید
                </a>
            </div>

            <div class="row layout-top-spacing " id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="default-ordering"
                                   class="table table-hover table-striped table-bordered text-center"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th>تصویر</th>
                                    <th>عنوان دوره</th>
                                    <th>دسته والد</th>
                                    <th>زیردسته</th>
                                    <th>دسته فرزند</th>
                                    <th>قیمت</th>
                                    <th>تخفیف</th>
                                    <th>زمان دوره</th>

                                    <th>ویژه/نقدی/رایگان</th>
                                    <th>وضعیت</th>


                                    <th>عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($courses as $course)

                                    @switch($course->status)

                                        @case(1)
                                        @php $status="منتشر شده";
                            $badgecolorstatus='badge-success';
                            $badgecolorstatus1='badge-white';@endphp
                                        @break

                                        @case(0)
                                        @php $status="منتشر نشده";
                            $badgecolorstatus='badge-danger';
                            $badgecolorstatus1=' ';



                                        @endphp
                                        @break
                                    @endswitch



                                    <tr>
                                        <td><img width="50" src="{{$course->images['thumb']}}"></td>
                                        <td>{{$course->name}}</td>
                                        <td class="text-danger">{{$course->catname1}}</td>
                                        <td>{{$course->catname2}}</td>
                                        <td>{{$course->catname3}}</td>
                                        <td>{{$course->price}}</td>
                                        <td>{{$course->takhfif}}</td>
                                        <td>{{$course->timing}}</td>
                                        <td>{{$course->role}}</td>
                                        <td>
                                            <a href="{{route('statuschangecourse',$course->id)}}" class="badge  {{$badgecolorstatus}} ">
                                                {{$status}}

                                            </a>
                                        </td>



                                        <td class="text-center">
                                            <a href="{{route('edit.course',$course->id)}}"
                                               class="btn btn-icon btn-outline-primary btn-hover-primary btn-sm mx-3">
                                <span class="svg-icon svg-icon-md svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/ارتباطات/Write.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path
            d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z"
            fill="#000000" fill-rule="nonzero"
            transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>
        <path
            d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z"
            fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span> </a>
                                            <a href="{{route('course.destroy',$course->id)}}"
                                               onclick="return confirm('آیا دوره حذف شود؟');"
                                               class="btn btn-icon btn-outline-danger btn-hover-danger btn-sm">
                                <span class="svg-icon svg-icon-md svg-icon-danger"><!--begin::Svg Icon | path:assets/media/svg/icons/general/زباله ها.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                        viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path
            d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
            fill="#000000" fill-rule="nonzero"></path>
        <path
            d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
            fill="#000000" opacity="0.3"></path>
    </g>
</svg><!--end::Svg Icon--></span> </a>


                                        </td>
                                    </tr>
                                @endforeach

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class=""> © کپی رایت</p>
            </div>
            <div class="footer-section f-section-2">
                <span class="copyright"> طراحی و اجرا توسط : <a href=""> محمد سعید فداالدینی </a> </span></div>
        </div>
    </div>

@endsection
