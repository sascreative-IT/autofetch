<!doctype html>
<html lang="en">
<head>
	<title>{{$content->pg_page_name}}</title>
	<meta name="keywords" content="{{$content->pg_meta_tag}}">
	<meta name="description" content="{{$content->page_meta_desc_tag}}">
	@include('includes/links')


</head>
<body>
	@include('includes/header')

	<!-- Inside Banner -->
	@include('includes/inner-banner')
	<!--End Inside Banner -->
    <?php   $first_name = Session::get('first_name_applicant');

    ?>

    <!-- Privacy Policy Section -->
	<section class="thanks-sec">
		<div class="inner">
			<div class="row row-clr">
				<div class="col-sm-12">
					<h2 class="title">Woohoo!</h2>
					<svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52"><circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/><path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/></svg>
					<p>
                    <!-- <span style = "text-transform:capitalize;">{{isset($first_name)?$first_name:''}}</span>, --> Thank you for completing our online car loan application form.
					</p>
					<p>
						We've received your information and one of our team members will be calling within the hour to discuss your application.
					</p>
					<ul>
					    <h4>Car Loans should be simple. So we’ve made it that way.</h4>
						<li>
							<img src="{{ asset('assets/site/img/t1.svg')}}">
							<p>We approve loans within<br> 2 to 3 hours.</p>
						</li>
						<li>
							<img src="{{ asset('assets/site/img/t2.svg')}}">
							<p>We can approve and pay out a loan on the same day<br> if received by 12pm.</p>
						</li>
						<li>
							<img src="{{ asset('assets/site/img/t3.svg')}}">
							<p>Our team works hard to get you<br> a competitive rate.</p>
						</li>
					</ul>
					<p>
						A couple of things to consider. When you speak to us, ask about how we can assist with helping find your next car! We can get you a better car for less cash than you’d pay elsewhere.
					</p>	 
					<p>
						We're looking forward to helping you with your car loan needs. Thanks for choosing Auto Fetch.
					</p>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- End Privacy Policy Section -->

@include('includes/footer')

</body>
</html>
