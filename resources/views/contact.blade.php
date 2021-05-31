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
    <h1 class="title black">Contact Us</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb af-breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Contact Us -->
  <section class="contact-sec">
    <div class="contact-inner">
      <div class="row row-clr">
        <div class="col-lg-6 left">
          <h2 class="title black">Got a question? Send us a message.</h2>
          <form id="contactusid">
              {{ csrf_field() }}
              <input type="hidden" name="u" value="9" />
              <input type="hidden" name="f" value="9" />
              <input type="hidden" name="s" />
              <input type="hidden" name="c" value="0" />
              <input type="hidden" name="m" value="0" />
              <input type="hidden" name="act" value="sub" />
              <input type="hidden" name="v" value="2" />
            <div class="form-group">
              <input type="text" class="form-control RequiredField name" placeholder="Name" name="fullname">
            </div>
            <div class="form-group">
              <input type="text" class="form-control RequiredField phone" placeholder="Phone number" name="field[25]" maxlength="15" minlength="7">
            </div>
            <div class="form-group">
              <input type="email" class="form-control RequiredField email" placeholder="E-mail" name="email">
            </div>
            <div class="form-group">
              <textarea class="form-control RequiredField" rows="1" placeholder="Message" name="field[39]"></textarea>
            </div>
            <div class="btn-cont">
              <p>Submit
                <span>
                  <button type="submit">
                    <img src="{{ asset('assets/site/img/arrow-light-blue.svg')}}" class="dark">
                    <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
                  </button>
                </span>
              </p>
            </div>
              <div id="waitingMsg" style="color: #01b3cf; margin-top:20px;   display:none">Please wait...</div>
          </form>
        </div>
        <div class="col-lg-6 right">
          <ul class="contact-info-one">
            <li>
              <span class="icons"><i class="fas fa-envelope-open"></i></span>
              <span class="txt"><a href="tel:0800288633">0800 288 633</a></span>
            </li>
            <li>
              <span class="icons"><i class="fas fa-phone-alt"></i></span>
              <span class="txt"><a href="mailto:info@autofetch.co.nz">info@autofetch.co.nz</a></span>
            </li>
          </ul>
          <ul class="contact-info-two">
            <li><a href="https://www.facebook.com/autofetchnz/?modal=admin_todo_tour" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.linkedin.com/company/autofetch/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="https://www.instagram.com/autofetchnz/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Us -->

  <!-- Map -->
  <section class="map-sec">
    <div class="row row-clr">
      <div class="col-lg-6 no-pad w-border">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1667994.1395526854!2d172.32477914323601!3d-35.26120488552516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0ba91b84307549%3A0x3d2908f22efb374c!2sNorthland%2C%20New%20Zealand!5e0!3m2!1sen!2slk!4v1583215355871!5m2!1sen!2slk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <div class="col-lg-6 no-pad w-border">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d817202.3861024495!2d174.30502620606845!3d-36.86170744554708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d47fb5a9ce6fb%3A0x500ef6143a29917!2sAuckland%2C%20New%20Zealand!5e0!3m2!1sen!2slk!4v1583215187814!5m2!1sen!2slk" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
  <!-- End Map -->

  <!-- Contact Us Footer -->
  <footer class="main-footer contact-footer bg-blur">
    <div class="inner">
      <div class="row row-clr">
        <div class="col-lg-6 left">
          <img src="{{ asset('assets/site/img/footer-logo.svg')}}" class="footer-logo" alt="Footer Logo">
          <p>&copy; Auto Fetch <span id="year">2019</span> | All rights reserved</p>
          <p class="service-txt">Connolly imports Ltd T/A Auto Fetch is a registered financial service provider #698831</p>
        </div>
        <div class="col-lg-6 right">
          <h3 class="title">Sign up for newsletter</h3>
          <form class="form-inline" id="newsletterform">
           {{ csrf_field() }}
            <div class="form-group">
              <input type="email" class="form-control newsletterRequiredField" name="email" placeholder="example@autofetch.com.nz">
            </div>
            <div id="waitingMsgnewsletter" style="color: #E6A833; margin-top:20px;   display:none">Please wait...</div>
            <button type="submit" class="btn submit-btn" id="news-letter-contact-submit">
              <img src="{{ asset('assets/site/img/arrow.svg')}}" class="white">
              <img src="{{ asset('assets/site/img/arrow-dark.svg')}}" class="dark">
            </button>
          </form>
          <ul class="quick-links">
            <li><a href="{{url('faqs')}}">Frequently asked questions</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="{{url('privacy-policy')}}">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Contact Us Footer -->
  <script src="{{ asset('site/form/contactusform.js?sjsjsj')}}"></script>
  <script src="{{ asset('site/form/indexform.js?399393939')}}"></script>

  <script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.visitorGlobalObjectAlias=n;e[e.visitorGlobalObjectAlias]=e[e.visitorGlobalObjectAlias]||function(){(e[e.visitorGlobalObjectAlias].q=e[e.visitorGlobalObjectAlias].q||[]).push(arguments)};e[e.visitorGlobalObjectAlias].l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://diffuser-cdn.app-us1.com/diffuser/diffuser.js","vgo");
    vgo('setAccount', '25906920');
    vgo('setTrackByDefault', true);

    vgo('process');
</script>
</body>
</html>
