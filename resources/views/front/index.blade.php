
@extends('front.layouts.master')

@section('content')






<!-- Slider Start -->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
					<div class="divider mb-3"></div>
					<span class="text-uppercase text-sm letter-spacing ">Blood Donate Organiztion</span>
					<h1 class="mb-3 mt-3">Your most trusted Blood Donate Site</h1>
					
					<p class="mb-4 pr-5">Blood Donating</p>
					<div class="btn-container ">
						<a href="{{route('register')}}" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Sign Up <i class="icofont-simple-right ml-2  "></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-surgeon-alt"></i>
						</div>
						<span>24 Hours Service</span>
						<h4 class="mb-3">Online Support</h4>
						<p class="mb-4">Get All time support for emergency blood need.</p>
						<a href="{{route('login')}}" class="btn btn-main btn-round-full">Login to System</a>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-ui-clock"></i>
						</div>
						<span>Timing schedule</span>
						<h4 class="mb-3">Working Hours</h4>
						<ul class="w-hours list-unstyled">
							<li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
							<li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
						</ul>
					</div>
				
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<i class="icofont-support"></i>
						</div>
						<span>Emegency Cases</span>
						<h4 class="mb-3">1-800-700-6200</h4>
						<p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cta-section ">
	<div class="container">
		<div class="cta position-relative">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-doctor"></i>
						<span class="h3 counter" data-count="58">0</span>k
						<p>Happy User</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-flag"></i>
						<span class="h3 counter" data-count="700">0</span>+
						<p>Donate Blood</p>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-badge"></i>
						<span class="h3 counter" data-count="40">0</span>+
						<p>Total User</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-stat">
						<i class="icofont-globe"></i>
						<span class="h3 counter" data-count="20">0</span>
						<p>District Covered</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection


    

  