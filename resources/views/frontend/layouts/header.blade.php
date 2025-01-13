<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">

	<div class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand navbar-bg" href="index-2.html">
                        <img 
                            class="img-fluid float-right" 
                            src="{{ asset('/') }}frontend/assets/images/logo.png" 
                            alt="metal heart" 
                            style="width: 150px; height: auto;">
                    </a>
					<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
						data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fa fa-bars"></span>
					</button>
		
					<div class="collapse navbar-collapse text-center" id="navigation">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown active">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Home
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="/">Home</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Company
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ route('about') }}">About Us</a>
									<a class="dropdown-item" href="service.html">Services</a>
									<a class="dropdown-item" href="career.html">Career</a>
									<a class="dropdown-item" href="testimonial.html">Testimonials</a>
									<a class="dropdown-item" href="faq.html">Faq</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									Investors
								</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Invest in Metal Heart</a>
									<a class="dropdown-item" href="#">Financial information</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Social Activities & Donation</a></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.html">Contact</a></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--/ Header end -->