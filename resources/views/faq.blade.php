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
		<h1 class="title black">Faq (Frequently Asked Questions)</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb af-breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">FAQ</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumbs -->

	<!-- FAQ -->
	<section class="faq-sec">
		<div class="inner">
			<div class="row row-clr">
				<div class="col-sm-12">
					<h2 class="title black">Browse Our Faq</h2>
					<p class="fw-300" style="display: none;">Lorem Ipsum Dolor Sit Amet, Consectetuer Adipiscing Elit, Sed Diam Nonummy Nibh Euismod Tincidunt Ut Laoreet Dolore Magna Aliquam
						Erat Volutpat. Ut Wisi Enim Ad Minim Veniam, Quis Nostrud Exerci Tation Ullamcorper Suscipit Lobortis Nisl Ut Aliquip Ex Ea Commodo
						Consequat. Duis Autem Vel Eum Iriure Dolor In</p>
					</div>
				</div>
				<div class="row row-clr">
					<div class="col-sm-12">
						<div class="accordion af-accordion" id="af-accordion">
                            @foreach($faqs as $key =>$faq)
                            <?php $no = $key+1; ?>
                            @if($key == 0)
                                <?php $class ="collapse show";
                                $btncolclass = "";?>


                                @else
                                    <?php $class ="collapse";
                                    $btncolclass = "collapsed";?>
                                @endif
							<div class="card">
								<div class="card-header" id="heading{{$no}}">
										<button class="{{$btncolclass}}" type="button" data-toggle="collapse" data-target="#collapse{{$no}}" aria-expanded="true" aria-controls="collapse{{$no}}">
											{{$faq->faq_question}}
											<img src="{{ asset('assets/site/img/arrow.svg')}}" class="accordion-arrow">
										</button>
								</div>

								<div id="collapse{{$no}}" class="{{$class}}" aria-labelledby="heading{{$no}}" data-parent="#af-accordion">
									<div class="card-body">
										<p>{!!$faq->faq_answer!!}</p>
									</div>
								</div>
							</div>
                            @endforeach

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ -->
    @include('includes/footer')


	</body>
	</html>
