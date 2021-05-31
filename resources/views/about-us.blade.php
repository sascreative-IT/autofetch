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
		<!-- <h1 class="title black">About us</h1> -->
		<h1 class="title black">Making it easier for Kiwis to finance and purchase their next car</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb af-breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">About us</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Section -->
	<section class="about-sec">
		<div class="row row-clr item-row">
			<div class="col-lg-4 img">
				<img src="{{ asset('assets/site/img/about/au1nn.jpg')}}" class="white">
			</div>
			<div class="col-lg-8 text">
				<h2 class="title white">Who we are</h2>
				<!-- <p>
					We work for you by pairing you with a suitable lender and finding you your ideal car to suit your budget and lifestyle. Car shopping can feel quite overwhelming with all the choice, not to mention dealing with pushy car salespeople. All that time wasted to view cars that may not be right for your lifestyle or budget. So to make things easier and more personalized when it comes to buying a new vehicle we’ve created an online service that gives you access to the finance you need and the vehicle you want –regardless of where you live. Using our convenient online platform, we combine finance and the acquisition of your dream car, with the option of delivering it direct to your door with quality assurances and any add-ons arranged.
				</p> -->
				<p>
					Like lots of good business ideas, Auto Fetch was created after co-founders Damien and Danielle experienced a gap in the market. While relocating to the Far North of New Zealand, they discovered it was way too time-consuming and crazy-difficult to do something as simple as finding a new set of wheels. So after spending whole weekends lugging the two kids from car yard to car yard, feeling pressured into purchasing cars that just weren't for them, they couldn’t help but think there must be an easier way to do this. 
				</p>
				<p>
					Enter lightbulb moment: ‘What if we could make it ridiculously easy for Kiwis to finance and buy a car by doing it all online?’ 
				</p>
				<p>
					And with that thought (and a ton of caffeine- enhanced investigation), they found that yes, they could do that, and so Auto Fetch was born.
				</p>
			</div>
		</div>
		
		<div class="row row-clr item-row">
			<div class="col-lg-8 text m-hide">
				<!-- <h2 class="title white">What we do</h2> -->

				<!-- <p>
					We act as a broker which means we work on your behalf using our nationwide network of finance lenders & car distributors. This means we do all the
					hard work so you don’t have to, finding you the best loan and vehicle that suits you and your situation. We’re a one-stop shop for Kiwis like you; people
					who don’t have the time or means to find quality vehicles that suit your lifestyle.
				</p> -->
				<h2 class="title white">Our vision</h2>
				<p>
					The vision for AutoFetch was simple. To give Kiwis an easier way to buy a car with no car yards, no pressure and no wasted time – all performed 100% online. AutoFetch is all about great finance deals, top quality cars and an excellent outcome for our customers.
				</p>
				<br>
				<h2 class="title white">We’re fast</h2>
				<p>
					As brokers, we shop around for you and compare fees, interest rates and terms to find you the best possible outcome. Our lending partners process your applications within an hour, so we’ll have an answer for you in a jiffy. 
				</p>
			</div>
			<div class="col-lg-4 img">
				<img src="{{ asset('assets/site/img/about/2.jpg')}}" class="white">
			</div>
            <div class="col-lg-8 text m-view">
				<!-- <h2 class="title white">What we do</h2>
				<p>
					We act as a broker which means we work on your behalf using our nationwide network of finance lenders & car distributors. This means we do all the
					hard work so you don’t have to, finding you the best loan and vehicle that suits you and your situation. We’re a one-stop shop for Kiwis like you; people
					who don’t have the time or means to find quality vehicles that suit your lifestyle.
				</p> -->
				<h2 class="title white">Our vision</h2>
				<p>
					The vision for AutoFetch was simple. To give Kiwis an easier way to buy a car with no car yards, no pressure and no wasted time – all performed 100% online. AutoFetch is all about great finance deals, top quality cars and an excellent outcome for our customers.
				</p>
				<br>
				<h2 class="title white">We’re fast</h2>
				<p>
					As brokers, we shop around for you and compare fees, interest rates and terms to find you the best possible outcome. Our lending partners process your applications within an hour, so we’ll have an answer for you in a jiffy. 
				</p>
			</div>
		</div>
		
		<div class="row row-clr item-row">
			<div class="col-lg-4 img">
				<img src="{{ asset('assets/site/img/about/3.jpg')}}" class="white">
			</div>
			<div class="col-lg-8 text">
				<!-- <h2 class="title white">How can we help you?</h2>
				<p>
					Auto Fetch is here to help you get the money you need to buy the vehicle you want. By taking the specifications you’re looking for in a vehicle, we find
					exactly what you’re looking for and arrange finance through our network of trusted lenders. If you want to add a tow bar, roof racks, new tyres or any
					range of aftermarket add-ons, we make that happen for you as well. We’ll also ensure that your vehicle is sound, and we offer guidance and quality
					assurance to ensure that you’re confident before making a purchase. Following the approval of finance and the purchase of your vehicle, we’ll fetch it
					and have your dream car delivered directly to your door. Simple as that.
				</p>
                <ul>
                  <li><p>1. We get your finance approved</p></li>
                  <li><p>2. We find you a car based on your preferences and budget</p></li>
                  <li><p>3. Your new car delivered right to your door!</p></li>
                </ul> -->
                <h2 class="title white">Free car sourcing</h2>
				<p>
					Our car sourcing service is FREE. Once we have you pre-approved, if you’re still searching for a car, we’ll send you detailed pictures and specifications of vehicle options that suit your lifestyle and budget. We only deal with reputable dealers who give us access to quality cars, but we have so many dealer partners that the options are endless. Our cars can be picked up, delivered to your door, or we’ll have them flown in at our expense!
				</p>
				<br>
				<h2 class="title white">We’re ethical</h2>
				<p>
					Our business is 100% online, but our old fashioned personalised service is what has made us successful. We’re committed to fair and affordable finance deals for you, and we’ll let you know upfront exactly when and what you’ll be paying over the course of your loan. At AutoFetch, we’re with you all the way!
				</p>
			</div>
		</div>
	</section>
	<!-- End About Section -->
	
	<!-- Site Info Section -->
	<section class="site-info-sec">
		<div class="inner">
			<ul>
				<li>
					<div class="box">
						<div class="txt">
							<h3>400+</h3>
							<p>Makes and models available</p>
						</div>
					</div>
				</li>
				<li>
					<div class="box">
						<div class="txt">
							<h3>300+</h3>
							<p>Happy autofetch customers</p>
						</div>
					</div>
				</li>
				<li>
					<div class="box">
						<div class="txt">
							<p>So far we’ve saved our customers</p>
							<h3>$250K</h3>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- End Site Info Section -->

	@include('includes/footer')

</body>
</html>