$(document).ready(function() {



// Styles (adding class) When Scroll

$(window).scroll(function(){

    $('#main-nav').toggleClass('scrolled', $(this).scrollTop() > 50);

});

// End Styles (adding class) When Scroll



// Testimonials

$('#testimonial-slider').lightSlider({

        item:1,

        loop:true,

        slideMove:1,

        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',

        speed:800,

        pager: true,

        controls: false,

        adaptiveHeight: true,

        auto: true,

        pause: 5000,

        pauseOnHover: true

    });

// Testimonials



//Add Remove Class

  $('.car-item-main').on('click', 'li', function() {

    $('.car-item-main li.active').removeClass('active');

    $(this).addClass('active');

  });

//End Add Remove Class



//Footer year

  var d = new Date();

  var n = d.getFullYear();

  document.getElementById("year").innerHTML = n;

//End Footer year



//Navigation Active class js
var url = window.location;
    // Will only work if string in href matches with location
    $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
    $('ul.navbar-nav .dropdown .dropdown-menu a[href="'+ url +'"]').addClass('active');

    // Will also work for relative and absolute hrefs
    $('ul.navbar-nav a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    $('ul.navbar-nav .dropdown .dropdown-menu a').filter(function() {
        return this.href == url;
    }).addClass('active');
//Navigation Active class js


/*Scroll to Fetch My Ride*/
$(document).on('click', '.nxt-btn', function (event) {  
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
}); 
/*End Scroll to Fetch My Ride*/	

/*Add Second Applicant*/
$("#second-applicant-btn").click(function(){
  $(".second-applicant").addClass("open");
  $('html, body').animate({
    scrollTop: $(".second-applicant").offset().top -100
  }, 1000)
});
/*End Add Second Applicant*/

/*Time*/
$('input.timepicker-time').timepicker({});
$('input.timepicker-time2').timepicker({});
/*End Time*/

// Pause Slider
$('.carousel').carousel({
    pause: "false"
});
// End Pause Slider

});