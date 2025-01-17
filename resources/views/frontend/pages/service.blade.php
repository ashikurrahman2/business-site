@extends('layouts.app')

@section('title', 'Services')

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
					<div class="testimonial-thumb">-->
						<img src="images/team/testimonial3.jpg" alt="testimonial">
					</div>
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

<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".5s">
                        <div class="service-content text-center">
                            <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
                            <h3>{{ $service->service_title }}</h3>
                            <p>{{ $service->service_details }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
	<!--/ Container end -->
</section>
<!--/ Service box end -->
@endsection