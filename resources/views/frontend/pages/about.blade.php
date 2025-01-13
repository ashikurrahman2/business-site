@extends('layouts.app')

@section('title', 'About Us')

@section('front_content')
<section class="testimonial parallax parallax3">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
				<div class="item">
					<!--<div class="testimonial-thumb">-->
					<!--	<img src="images/team/testimonial1.jpg" alt="testimonial">-->
					<!--</div>-->
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
					</div>
				</div>
				<div class="item">
					<!--<div class="testimonial-thumb">-->
					<!--	<img src="images/team/testimonial2.jpg" alt="testimonial">-->
					<!--</div>-->
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
					</div>
				</div>
				<div class="item">
					<!--<div class="testimonial-thumb">-->
					<!--	<img src="images/team/testimonial3.jpg" alt="testimonial">-->
					<!--</div>-->
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
					</div>
				</div>
			</div>
			
		</div>
		
	</div>
	
</section> 
    {{--About section  --}}
<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			@foreach($abouts as $about)
			<div class="col-lg-6 ts-padding"
				style="height:650px;background:url({{ asset($about->photo) }}) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-lg-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>Know More About Our Company</h2>
					<h3>Why Choose Us</h3>
					<p>{{ $about->description }}
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>Tons of Features</h3>
						<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>PowerPack Theme</h3>
						<p>Proin gravida nibh vel velit auctor Aenean sollicitudin adipisicing</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Day Night Support</h3>
						<p>Simply dummy text and typesettings industry has been the industry</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
		@endforeach
	</div>
</section>
<!--/ Image block end -->
@endsection