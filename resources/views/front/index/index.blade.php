@include('front.head')

	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<!-- Header Top ==== -->
		@include('front.header')
		<!-- Header Top END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- Main Slider -->
			@include('front.revslider')
			<!-- Main Slider -->
			<div class="content-block">
				<!-- Popular Courses -->
				<div class="section-area section-sp2 popular-courses-bx"
					style="background-image:url({{url('front/assets/images/background/bg4.jpg')}}); background-size:cover;">

                    @include('front.index.categories')
                    @include('front.index.mahbob')


				</div>


{{--
				@include('front.index.form')
				@include('front.index.roydad')
				@include('front.index.moarefi')
				@include('front.index.comment')--}}

			</div>

		</div>
		<!-- Content END-->
		<!-- Footer ==== -->
		<footer class="footer-white">
			<div class="footer-top bt0">
				<div class="container">
					{{--@include('front.khabarname')
					@include('front.menufooter')--}}
				</div>
			</div>
			@include('front.footerb')
		</footer>
		<!-- Footer END ==== -->
		<button class="back-to-top fa fa-chevron-up"></button>
	</div>
@include('front.footer')
