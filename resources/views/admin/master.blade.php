<!DOCTYPE html>
<html lang="en">
@include('admin.core.head')
<body class="dashboard-analytics">

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
@include('admin.core.navbar')

<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
    @include('admin.core.sidebare')

    <!--  END SIDEBAR  -->




    <!--  BEGIN CONTENT AREA  -->


    @yield('content')



    <!--  END CONTENT AREA  -->


</div>
<!-- END MAIN CONTAINER -->





@include('admin.core.foot')

</body>
</html>
