<footer class="main-footer bg-blur">
	<div class="inner">
		<div class="row row-clr">
			<div class="col-lg-6 left">
				<h3 class="title">Sign up for newsletter</h3>
				<form class="form-inline" id="newsletterform">
					{{ csrf_field() }}
					<div class="form-group">
						<input type="email" class="form-control"placeholder="example@autofetch.com.nz" name= "email">
					</div>
					<button type="submit" class="btn submit-btn" id="news-letter-contact-submit">
						<img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
						<img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
					</button>
					<div id="waitingMsgnewsletter" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
				</form>
				<img src="{{ asset('assets/site/img/footer-logo.svg')}}" class="footer-logo" alt="Footer Logo">
				
				<p>&copy; Auto Fetch <span id="year">2019</span> | All rights reserved</p>
				<p class="service-txt">Connolly imports Ltd T/A Auto Fetch is a registered financial service provider #698831</p>
			</div>
			<div class="col-lg-6 right">
				<h3 class="title"><a href="tel:0800288633">0800 288 633</a></h3>
				<h3 class="title"><a class="txt-lower" href="mailto:info@autofetch.co.nz">info@autofetch.co.nz</a></h3>
				<ul class="quick-links">
					<li><a href="{{url('faqs')}}">Frequently asked questions</a></li>
					<li><a href="{{url('terms-conditions')}}">Terms & Conditions</a></li>
					<li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
				</ul>
				<ul class="social-links">
					<li><a href="https://www.facebook.com/autofetchnz/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="https://www.linkedin.com/company/autofetch/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
					<li><a href="https://www.instagram.com/autofetchnz/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>-->
            </ul>
        </div>
    </div>
</div>
</footer>

<!-- Modal -->
<div class="modal video-modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="pauseVid()">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal-body">
				<video id="video-background">
					<source src="{{ asset('assets/site/video/AutoFetch.mp4')}}" type="video/mp4">
					</video>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('site/form/indexform.js')}}"></script>

	<script type="text/javascript">
		(function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
		vgo('setAccount', '25906920');
		vgo('setTrackByDefault', true);

		vgo('process');
	</script>

<script type="text/javascript">
// var vid = document.getElementById("video-background"); 

// function playVid() { 
// 	vid.play(); 
// } 

// function pauseVid() { 
// 	vid.pause(); 
// } 
</script>