<!doctype html>
<html lang="en">
<head>
    <title>{{$content->pg_page_name}}</title>
    <meta name="keywords" content="{{$content->pg_meta_tag}}">
    <meta name="description" content="{{$content->page_meta_desc_tag}}">
    <link href="{{asset('assets/css/sweetalert2.min.css')}}" rel="stylesheet"/>
    @include('includes/links')

    <?php /*?>@include('includes/links')<?php */?>

</head>
<body>
    <a href="{{url('car-loan-calculator')}}" class="cal-fix-tag bg-blur">Quick quote</a>
    @include('includes/header')


    <!-- Main Slider -->
    <div id="main-slider" class="carousel slide animated fadeIn delay-1s bg-blur" data-ride="carousel" data-pause="true" data-interval="false">
        <ol class="carousel-indicators">
            @foreach($sliders as $key=> $slider)
            @if($key == 0)
            <?php $class = "active"; ?>
            @else
            <?php $class = " "; ?>
            @endif
            <li data-target="#main-slider" data-slide-to="{{$key}}" class="{{$class}}"></li>
            @endforeach
        </ol>

        <div class="carousel-inner">
            @foreach($sliders as $key=> $slider)
            @if($key == 0)
            <?php $classx = "active"; ?>
            @else
            <?php $classx = " "; ?>
            @endif
            <div class="carousel-item {{$classx}}" data-interval="1000000">
                <img src="{{ asset('Uploads/sliders')}}/{{$slider['sl_banner_image']}}" class="d-block w-100"
                alt="Main Slider">
                <div class="carousel-caption d-md-block">
                <h1 class="animated fadeInUp delay-1s">The super-easy way to finance<br> & find your next car online</h1>
                    <h2 class="animated fadeInUp delay-2s">No car yards, no pressure, no wasted time.</h2>
                    <a class="animated fadeInUp delay-3s" href="{{url('application-form')}}">Let's go</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--End Main Slider -->

    <!-- Into -->
    <section class="main-intro-sec bg-blur">
        <div class="inner">
            <h2 class="title black">Car loans should be simple. So we’ve made it that way.</h2>
            <p>Auto Fetch NZ is a 100% online service that makes car buying easy – even if you have a bad credit rating. We’ll secure your car loan, help you
                choose the right vehicle for your lifestyle and budget, sort insurance, then deliver it to your door. And, you’ll enjoy competitive interest rates
                and a better car for less cash than you’d pay elsewhere.
                <img src="{{ asset('assets/site/img/home/quotes.svg')}}">
                <img src="{{ asset('assets/site/img/home/quotes.svg')}}">
            </p>
        </div>
    </section>    
    <!-- End Into -->

    <!-- Home Video -->
    <div class="home-video-main">
        <video id="video-background" poster="{{ asset('assets/site/img/video_thumb-v2.png')}}" controls>
            <source src="{{ asset('assets/site/video/AutoFetch.mp4')}}" type="video/mp4">
        </video>
    </div>
    <!-- End Home Video -->

    <!-- How Does Auto Fetch Work Section -->
    <section class="how-dose-sec bg-blur">
        <div class="inner">
            <h2 class="title black">Here’s how it works</h2>
            <ul>

                <li>
                    <div class="box">
                        <img src="{{ asset('assets/site/img/home/1st.svg')}}">
                        <h3 class="tag"><a href="{{url('application-form')}}">1. Get finance</a></h3>
                        <p>Complete our quick ‘n easy application form to apply online. We can have you pre-approved in 2 hours & ready-to-buy in 24 hours. And as brokers, we can find the best lenders for you at the sharpest rates.</p>
                    </div>
                </li>

                <li>
                    <div class="box">
                        <img src="{{ asset('assets/site/img/home/5th.svg')}}">
                        <h3 class="tag"><a class="nxt-btn" href="#fetch-my-ride-sec">2. Choose your car</a></h3>
                        <p>There’s no car yards, no dodgy deals, no high-pressure sales. Just click ‘n choose! With our New Zealand - wide network of car suppliers, we’ll help you find the right car for your lifestyle and budget online.</p>
                    </div>
                </li>

                <li>
                    <div class="box">
                        <img src="{{ asset('assets/site/img/home/6th.svg')}}">
                        <h3 class="tag">3. We’ll deliver your new car to your door</h3>
                        <p>There is no need to worry about paperwork. We’ll sort all insurances and additional requirements, then deliver your car direct to your door. Just turn the key and drive!</p>
                    </div>
                </li>

            </ul>
            <a class="apply-now-btn" href="{{url('application-form')}}">Apply now</a>
            <!-- <a class="apply-now-btn" href="{{url('car-loan-calculator')}}">Quick quote</a> -->
        </div>
    </section>
    <!--End How Does Auto Fetch Work Section -->

    <!-- Repayments Section -->
    <section class="repayment-sec bg-blur" id="repayment-sec">
        <div class="inner">
            <h2 class="title white">See what your repayments might look like</h2>
            <div class="row row-clr">
                <div class="col-lg-4 cont">
                    <h2 class="rates-txt">We'll fetch you a <br> great deal on car finance <br> with interest rates <br>
                        starting from 8.95%</h2>
                    </div>
                    <div class="col-lg-4 cont">
                        <form id="calculate_form">
                            <div class="form-group">
                                <label>Total loan amount</label>
                                <input type="text" id="total_load_amount" name="total_load_amount"
                                class="form-control form-control-lg numberss" placeholder="$ 5,000">
                                <input type="hidden" id="total_load_amount_hid" name="total_load_amount_hid"
                                class="form-control form-control-lg">
                            </div>

                            <div class="form-group select-group">
                                <label>Terms (months)</label>
                                <select class="form-control form-control-lg" id="loan_term" name="loan_term">
                                    <option value="12">12 Months</option>
                                    <option value="24">24 Months</option>
                                    <option value="36">36 Months</option>
                                    <option value="48">48 Months</option>
                                    <option value="60">60 Months</option>
                                    <option value="72">72 Months</option>
                                </select>
                                <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
                            </div>
                            <p class="policy-txt">**apply online to receive competitive interest rates. interest rates with auto
                                fetch start at 8.95%. the calculation above is only an indicative guide and is based on an
                                interest rate of 12.95% p.a., actual rates depend on your risk profile .normal lending criteria,
                                terms, conditions and fees apply.</p>
                                <div class="btn-cont">
                                    <p>Calculate Payment
                                        <span>
                                          <button type="submit" href="#" id="calclate_payment">
                                            <img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
                                            <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
                                        </button>
                                    </span>
                                </p>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 cont">
                        <div class="price-box">
                            <div class="box">
                                <p>Your estimated<br>weekly payment</p>
                                <span id="pay_monthly">$113</span>
                                <p id="to_loan_amount">For a $5000 loan</p>
                            </div>
                            <a class="apply-btn" href="{{url('application-form')}}">Apply online</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Repayments Section -->

        <!--Fetch My Ride Section -->
        <section class="fetch-my-ride-sec bg-blur" id="fetch-my-ride-sec">
            <div class="inner">
                <h2 class="title black">Need a car + finance?</h2>
                <p class="fw-300 txt-lower">First, choose your type of vehicle.</p>

                <ul class="car-item-main">
                    <li class="car-item">
                        <div class="box" data-toggle="modal" data-target="#fetchModal" data-ajax="false">
                            <img src="{{ asset('assets/site/img/home/car_logos/sedan.png')}}">
                            <p class="type">Sedan</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/hatchback.png')}}">
                            <p class="type">Hatchback</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/wagon.png')}}">
                            <p class="type">Wagon</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/suv.png')}}">
                            <p class="type">SUV</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/ute.png')}}">
                            <p class="type">UTE</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/van.png')}}">
                            <p class="type">Van</p>
                        </div>
                    </li>
                    <li class="car-item" data-toggle="modal" data-target="#fetchModal">
                        <div class="box">
                            <img src="{{ asset('assets/site/img/home/car_logos/people_movers.png')}}">
                            <p class="type">People movers</p>
                        </div>
                    </li>
                </ul>

                <img class="logo-tag" src="{{ asset('assets/site/img/logo-tagline.svg')}}">
                <!-- <h2 class="title purple fw-500 fs-i lh-big lower">Auto fetch doesn't have a fancy showroom or<br> pushy sales
                    team, so
                    you can buy a car for less!</h2> -->
                </div>
            </section>

            <!-- Why auto fetch -->
            <section class="main-waf-sec">
                <div class="inner">
                    <ul class="waf-sec">
                        <h2 class="title white">Get a better car for less cash, fast.</h2>
                        <li><p>FAST finance – pre-approved within 2 hours</p></li>
                        <!-- <li><p>Get more choice – huge range of vehicles</p></li> -->
                        <li><p>As brokers, we work to get you the best rate</p></li>
                        <!-- <li><p>E-signature loan docs make it super-simple</p></li> -->
                        <li><p>We help you find a vehicle, not sell you one</p></li>
                        <!-- <li><p>Get your car delivered to your door!</p></li> -->
                    </ul>
                </div>
            </section>
            <!-- End Why auto fetch -->

            <!-- Modal -->
            <div class="modal af-modal fade" id="fetchModal" tabindex="-1" role="dialog" aria-labelledby="fetchModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <form id="find_my_car" method="post" action="{{url('index-form')}}">
                            {{csrf_field()}}
                            <h2 class="title black">Find my car</h2>
                            <input type="hidden" id="body_type" name="body_type" value="">
                            <div class="form-row">
                    <!--<div class="form-group col-md-4 select-group">
                            <select class="form-control form-control-lg" name="location_name" id="location_name">
                                <option value="">LOCATION</option>
                                <option value="Location1">Location1</option>
                                <option value="Location2">Location2</option>
                                <option value="Location3">Location3</option>
                                <option value="Location4">Location4</option>
                                <option value="Location5">Location5</option>
                            </select>
                            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="white">
                        </div>-->

                        <div class="form-group col-lg-4 select-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Location"
                            name="location_name" id="location_name">
                        </div>

                        <div class="form-group col-lg-4 select-group">
                            <input type="text" class="form-control form-control-lg" placeholder="First name"
                            name="name_of_applicant" id="name_of_applicant">
                        </div>
                        <div class="form-group col-lg-4 select-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Last name"
                            name="last_name" id="last_name">
                        </div>
                        <div class="form-group col-lg-4 select-group">
                            <input type="text" class="form-control form-control-lg" placeholder="E-Mail"
                            name="email_of_applicant" id="email_of_applicant">
                        </div>


                        <div class="form-group col-lg-4 select-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Phone number"
                            name="phone_number" id="phone_number">
                        </div>

                        <div class="form-group col-lg-4 select-group">
                            <select class="form-control form-control-lg" name="transmission_type"
                            id="transmission_type">
                            <option value="">Transmission type</option>
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                            <option value="Tiptronic">Tiptronic</option>
                        </select>
                        <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="white">
                    </div>

                    <div class="form-group col-lg-4 select-group">
                        <select class="form-control form-control-lg" name="fuel_type" id="fuel_type">
                            <option value="">Fuel type</option>
                            <option value="Petrol">Petrol</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Electric">Electric</option>

                        </select>
                        <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="white">
                    </div>

                    <div class="form-group col-lg-4 select-group">
                        <select class="form-control form-control-lg" name="life_style" id="life_style">
                            <option value="">Lifestyle</option>
                            <option value="Type1">Solo</option>
                            <option value="Type2">Couple</option>
                            <option value="Type3">Family</option>
                            <option value="Type4">Business</option>
                            <option value="Type5">Performance</option>
                        </select>
                        <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="white">
                    </div>


                    <!-- <div class="form-group col-lg-4 select-group">
                            <select class="form-control form-control-lg" name="color" id="color">
                                <option value="">Colour</option>
                                <option value="Black">Black</option>
                                <option value="Blue">Blue</option>
                                <option value="Gold">Gold</option>
                                <option value="Green">Green</option>
                                <option value="Orange">Orange</option>
                                <option value="Red">Red</option>
                                <option value="Silver">Silver</option>
                                <option value="White">White</option>
                                <option value="Other">Other</option>
                            </select>
                            <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="white">
                        </div> -->

                    </div>

                    <div class="btn-cont">
                        <p>Submit
                            <span>
                              <button href="#">
                                <img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
                                <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
                            </button>
                        </span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--End Fetch My Ride Section -->

<!-- Testimonials Section -->
<section class="testimonial-sec bg-blur">
    <div class="inner">
        <h2 class="title black">Happy Auto Fetch Customers</h2>
        <ul id="testimonial-slider">
            @foreach($testimonials as $testimonial)
            <li>
                <img src="{{ asset('uploads/thumb_image')}}/{{$testimonial->thumb_image}}">
                <!-- <h3>{{$testimonial->rate}}</h3> -->
                <?php $sum = $testimonial->rate * 2;  ?>
                <div class="star-ratings-css">
                    <div class="star-ratings-css-top" style="width: calc({{$sum}}0% + 3.5%)">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                    </div>
                    <div class="star-ratings-css-bottom">
                        <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
                    </div>
                    <p>{{$testimonial->description}}
                    </p>
                </li>
                @endforeach

            </ul>
        </div>
    </section>
    <!--End Testimonials Section -->

    @include('includes/footer')


</body>
</html>
<script src="{{asset('assets/js/sweetalert2.min.js')}}"></script>
<script src="{{asset('admin/jquery.validate.js')}}"></script>


<script src="{{url('admin/index_form.js?sdsss')}}"></script>
<script>
    let token = "{{ csrf_token() }}";
    var base_path = {!! json_encode(url('/')) !!}
</script>