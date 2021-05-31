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
		<h1 class="title black">Privacy Policy</h1>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb af-breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumbs -->

	<!-- Privacy Policy Section -->
	<section class="policy-sec">
		<div class="inner">
			<div class="row row-clr">
				<div class="col-sm-12">
					<h2 class="title black">Privacy Act 1993</h2>
					
					<p>
						Personal information is collected as part of approving your application for finance. Information may be collected from persons nominated on the application form. Information may also be collected from credit reference agencies. Information will be used solely for the purpose of credit risk assessment, administration of the account and debt recovery. You have the right of access to and correction of personal information held by connolly imports ltd trading as auto fetch and any credit agencies to which we have referred.
					</p>
					<p>
						I/we certify that I/we are over eighteen years of age and that the particulars given in this application are true and that there are no omissions therein. I/we irrevocably authorize connolly imports ltd trading as auto fetch to collect such information as may be required by connolly imports ltd to determine whether or not to accept my/our application for finance. I/we understand that connolly imports ltd may nominate a third party to supply the credit for which I/we am applying for and therefore the term “you” implying connolly imports ltd also refers to the nominated third party.
					</p>
					<p>
						I/we authorize any nominated third parties to make such inquiries about me/us and my financial affairs as considered appropriate in relation to this application (and further inquiries in the future), which may be necessary in connection with this application, and any subsequent requests for credit and to disclose details of this application to any person for this purpose. I/we irrevocably authorize each of the parties mentioned under employment & credit references sections of the application form to provide you with such information as you may require for credit risk assessment.
					</p>
					<p>
						The information provided in this application is true, correct and complete and no information that would be relevant to you evaluating the application has been omitted. If any relevant changes occur between now and signing a credit agreement with you, I will disclose such changes immediately.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End Privacy Policy Section -->

	@include('includes/footer')

</body>
</html>