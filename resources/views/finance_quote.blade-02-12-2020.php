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

	<!-- Breadcrumbs -->
	<div class="breadcrumb-main">
		<h2 class="title black">Finance Quote</h2>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb af-breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Finance Quote</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Finance Quote -->
	<section class="finance-quote-sec">
		<div class="inner">
			<div class="row row-clr">
				<div class="col-sm-12">
					<h2 class="title black">See What Your Repayments Might Look Like</h2>
					<p class="fw-300">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy Nibh Euismod Tincidunt Ut Laoreet Dolore Magna Aliquam Erat Volutpat. Ut Wisi Enim Ad Minim Veniam, Quis Nostrud Exerci Tation Ullamcorper Suscipit Lobortis Nisl Ut Aliquip Ex Ea Commodo</p>
				</div>
			</div>
			<div class="row row-clr">
				<div class="col-sm-12">
					<div class="quote-cal">
                        <form id="finance_quote_form" method="post" action="{{url('finance-quote-form')}}" >
                            {{csrf_field()}}
							<div class="form-row">
								<div class="form-group col-md-6 select-group">
									<label>I’m Ready To Borrow</label>
									<input type="text" class="form-control form-control-lg numbers_new" placeholder="$50,000" name="amount_borrow" id="amount_borrow">
									<input type="hidden" class="form-control form-control-lg" placeholder="$50,000" name="amount_borrow_hid" id="amount_borrow_hid">
								</div>

								<div class="form-group col-md-6 select-group">
									<label>Terms (Months)</label>
									<select class="form-control form-control-lg" name="terms_borrow" id="terms_borrow">
										<option value="">Interval</option>
										<option value="12 Months">12 Months</option>
										<option value="24 Months">24 Months</option>
										<option value="36 Months">36 Months</option>
										<option value="48 Months">48 Months</option>
										<option value="60 Months">60 Months</option>
										<option value="72 Months">72 Months</option>
									</select>
									<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
								</div>
							</div>
                            
                            <div class="spacer"></div>

							<label>What Make/model Do You Have In Mind?</label>
							<div class="form-row">
								<div class="form-group col-md-6 select-group">
									<select class="form-control form-control-lg" name="vehicle_make" id="vehicle_make">
										<option value="">MAKE</option>
										@foreach($vehicle_makes as $vehicle_make)
											<option value="{{$vehicle_make->id}}">{{$vehicle_make->title}}</option>
										@endforeach
									</select>
									<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
								</div>

								<div class="form-group col-md-6 select-group">
									<select class="form-control form-control-lg" name="vehicle_model" id="vehicle_model">
										<option>MODEL</option>
									</select>
									<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
								</div>

								<div class="form-group col-md-6 select-group">
									<select class="form-control form-control-lg" id="condition" name="condition">
										<option>CONDITION</option>
										<option value="New">New</option>
										<option value="Used">Used</option>
										<option value="Reconditioned">Reconditioned</option>
									</select>
									<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
								</div>
							</div>
							<div class="btn-cont">
								<p>Calculate Payment
									<span>
										<button id="calculate_payment" type="button">
											<img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
											<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
										</button>
									</span>
								</p>
							</div>

						
						<!--Instant Quote Tab main section-->
						<div class="quote-tab-main">
							<h2 class="title purple">Your Instant Quote.</h2>
							
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-weekly-tab" data-toggle="pill" href="#pills-weekly" role="tab" aria-controls="pills-weekly" aria-selected="true">Weekly</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-fortnighty-tab" data-toggle="pill" href="#pills-fortnighty" role="tab" aria-controls="pills-fortnighty" aria-selected="false">Fortnighty</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
									<div class="box">
										<h3 class="title1">Your Weekly Payment</h3>
										<h2 class="price" id="total_price_week">$933.33</h2>
										<h3 class="title2 loan_amount_holder" id="loan_amount_holder">For A $50,000 Loan</h3>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-fortnighty" role="tabpanel" aria-labelledby="pills-fortnighty-tab">
									<div class="box">
										<h3 class="title1">Your Fortnighty Payment</h3>
										<h2 class="price" id="total_price_fortnight">$933.33</h2>
										<h3 class="title2 loan_amount_holder">For A $50,000 Loan</h3>
									</div>
								</div>
								<div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
									<div class="box">
										<h3 class="title1">Your Monthly Payment</h3>
										<h2 class="price" id="total_price_month">$933.33</h2>
										<h3 class="title2 loan_amount_holder">For A $50,000 Loan</h3>
									</div>
								</div>
							</div>
							<button type="submit" class="normal-btn">Apply Now</button>
						</div>
						<!--Instant Quote Tab main section-->
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Finance Quote -->

	@include('includes/footer')

</body>
</html>
<script src="{{asset('admin/jquery.validate.js')}}"></script>


<script src="{{url('admin/form_calculate.js?dd')}}"></script>
<script>
    let token="{{ csrf_token() }}";
    var base_path = {!! json_encode(url('/')) !!}
</script>
