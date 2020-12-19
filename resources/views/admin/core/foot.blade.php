
<script src="{{url('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{url('admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{url('admin/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{url('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{url('admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{url('admin/assets/js/custom.js')}}"></script>
{{--<script src="{{url('admin/plugins/apex/apexcharts.min.js')}}"></script>--}}
{{--<script src="{{url('admin/assets/js/dashboard/dash_1.js')}}"></script>--}}


<script src="{{url('admin/plugins/table/datatable/datatables.js')}}"></script>
<script src="{{url('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{url('admin/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>


















<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function checkedidcat(tag) {
        var idcat = $(tag).find('option:selected').attr('data-cat');


        if (idcat>0){
            $('.avali').removeClass('nist');
            $.ajax({
                url:"{{ route('subcat') }}",
                type:"POST",
                data: {
                    cat_id: idcat
                },
                success:function (data) {
                    $('#zirdaste2').html('');
                    $('#zirdaste3').html('');
                    if(data.msg!=0) {
                        var pishfarz = '<option selected>انتخاب نشده</option>';
                        $.each(data.msg, function (index, val) {
                            var zirdaste = '<option data-cat3="' + val + '" value="' + val + '" >' + index + '</option>';
                            /*  console.log(zirdaste);*/



                            $('#zirdaste2').append(zirdaste);
                        })
                        $('#zirdaste2').append(pishfarz);
                    }else{
                        $('.avali').addClass('nist');
                        $('.sevom').addClass('nist');
                        $('#zirdaste2').html('');
                        $('#zirdaste3').html('');
                        var zirdaste33 = '<option selected>انتخاب نشده</option>';
                        $('#zirdaste2').append(zirdaste33);
                    }
                }
            })
        }else{
            $('.avali').addClass('nist');
            $('.sevom').addClass('nist');
            $('#zirdaste2').html('');
            $('#zirdaste3').html('');
            var zirdaste33 = '<option selected>انتخاب نشده</option>';
            $('#zirdaste2').append(zirdaste33);
        }
    }



    function checkedidcat2(tag) {


        var idcat = $(tag).find('option:selected').attr('data-cat3');
        $('#zirdaste3').html('');



        if (idcat>0){
            $('.sevom').removeClass('nist');
            $.ajax({
                url:"{{ route('subcat2') }}",
                type:"POST",
                data: {
                    cat_id: idcat
                },
                success:function (data) {
                    $('#zirdaste3').html('');



                    if(data.msg!=0){
                        var pishfarz = '<option selected>انتخاب نشده</option>';
                        $.each(data.msg, function (index, val) {
                            var zirdaste = '<option  value="' + val + '" >' + index + '</option>';
                            /*  console.log(zirdaste);*/

                            $('#zirdaste3').append(zirdaste);
                        });
                        $('#zirdaste3').append(pishfarz);
                    }else{
                        $('.sevom').addClass('nist');
                        $('#zirdaste3').html('');
                        var zirdaste = '<option  value="0" >انتخاب نشده</option>';
                        $('#zirdaste3').append(zirdaste);
                    }

                }
            })
        }else{
            $('.sevom').addClass('nist');
            $('#zirdaste3').html('');
                var zirdaste = '<option  value="0" >انتخاب نشده</option>';
                $('#zirdaste3').append(zirdaste);
        }
    }









</script>








<script>
    $('#default-ordering').DataTable( {
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>' },
            "sInfo": "صفحه _PAGE_ از _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "جستجو کنید...",
            "sLengthMenu": "نتایج :  _MENU_",
        },
        "order": [[ 3, "desc" ]],
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7,
        drawCallback: function () { $('.dataTables_paginate > .pagination').addClass(' pagination-style-13 pagination-bordered mb-5'); }
    } );
</script>
