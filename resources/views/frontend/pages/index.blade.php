@extends('layouts.app')

@section('title', 'Home')

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
<!--/ Slider end -->

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

		<div class="row">
			<div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
					<h3>Web Design</h3>
					<p>High Life narwhal, banh mi PBR single-origin coffee Odd Future actually aliqua polaroid befor</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-android"></i></span>
					<h3>Apps Development</h3>
					<p>Food truck master cleanse mixtape minim Portland, cardigan stumptown chambray swag</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-shopping-cart"></i></span>
					<h3>eCommerce Websites</h3>
					<p>Neutra Thundercats craft beer, listicle meggings bicycle rights 90's XOXO beard cardiga</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-6 col-lg-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-lightbulb-o"></i></span>
					<h3>Design for Startups</h3>
					<p>We design beautiful modern engaging websites that always latest responsive technologies.</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->
<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 heading text-lg-left text-center">
				<span class="title-icon classic"><i class="fa fa-suitcase"></i></span>
				<h2 class="title classic">Our Equipment</h2>
			</div>
		<!-- </div> -->
		 <!-- Title row end -->

		<!--Isotope filter start -->
		<!-- <div class="row"> -->
			<div class="col-lg-7">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Tools & parts</a></li>
						<li><a href="#" data-filter=".development">chemicals</a></li>
						<li><a href="#" data-filter=".joomla">Machineries </a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Isotope filter end -->
	</div>

	<div class="container-fluid">
		<div class="row isotope" id="isotope">
  <div class="col-sm-6 col-md-4 col-lg-3 web-design isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="{{ asset('/') }}frontend/assets/images/portfolio/portfolio1.jpg" alt="">
        <figcaption>
          <h3>Startup Business</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg1.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="images/portfolio/portfolio2.jpg" alt="">
        <figcaption>
          <h3>Easy to Lanunch</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg2.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 joomla isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="images/portfolio/portfolio3.jpg" alt="">
        <figcaption>
          <h3>Your Business</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg3.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 wordpress isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="frontend/assets/images/portfolio/portfolio4.jpg" alt="">
        <figcaption>
          <h3>Prego Match</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg4.html"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 joomla isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="frontend/assets/images/portfolio/portfolio5.jpg" alt="">
        <figcaption>
          <h3>Fashion Brand</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg5.html"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="images/portfolio/portfolio6.jpg" alt="">
        <figcaption>
          <h3>The Insidage</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg1.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="frontend/assets/images/portfolio/portfolio7.jpg" alt="">
        <figcaption>
          <h3>Light Carpet</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->

  <div class="col-sm-6 col-md-4 col-lg-3 development isotope-item">
    <div class="grid">
      <figure class="m-0 effect-oscar">
        <img src="frontend/assets/images/portfolio/portfolio8.jpg" alt="">
        <figcaption>
          <h3>Amazing Keyboard</h3>
          <a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
          <a class="view icon-pentagon" data-rel="prettyPhoto" href="frontend/assets/images/portfolio/portfolio-bg3.jpg"><i
              class="fa fa-search"></i></a>
        </figcaption>
      </figure>
    </div>
  </div><!-- Isotope item end -->
</div>
<!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->

<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span>
				</div>
				<h3>Clients</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">1277</span>
				</div>
				<h3>Item Sold</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">869</span>
				</div>
				<h3>Projects</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">76</span>
				</div>
				<h3>Awwards</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
@endsection