<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trivision Dev</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<link rel="stylesheet" href="{{asset('css/animate.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Font Google -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/x-icon" style="width:100%">


 
</head>




<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg" style="   background: #ffffff; /* Semi-transparent background */
    backdrop-filter: blur(10px); /* Blur effect */
    -webkit-backdrop-filter: blur(10px); /* Safari support */
    transition: all 0.3s ease-in-out;">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand navbar-logo" href="#"> 
      <img src="{{asset('images/logo-bg.png')}}" alt="logo" class="logo-1" > 
    </a>
    
    <!-- Mobile Menu Toggle -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="fas fa-bars"></span> 
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="0">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="1">About</a> </li>

        <!-- Features Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/" id="featuresDropdown" role="button" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false"> Features </a>
          <div class="dropdown-menu" aria-labelledby="featuresDropdown">
            <a class="dropdown-item feature-nav-link" href="/blog" style="color:black">Blog.ai</a>
            <a class="dropdown-item feature-nav-link" href="#" style="color:black">Generative</a>
            <a class="dropdown-item feature-nav-link" href="#" style="color:black" >WORD to PDF</a>
          </div>
        </li>

        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="3">Team</a> </li>
        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="4">Testimonials</a> </li>
        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="5">FAQ</a> </li>
        <li class="nav-item"> <a class="nav-link" href="/" data-scroll-nav="6">Contact</a> </li>
      </ul>
    </div>
  </div>
</nav>


@yield('contents')





<footer class="footer">
    <div class="container">
      <div class="row">
        <!-- Column 1: Logo & Short Description -->
        <div class="col-md-3">
          <a href="#"><img src="images/logo-bg.png" alt="Logo" class="footer-logo" style="width:200px"></a>
          <p>Your ultimate platform for tools, services, and solutions to make your work easier and efficient.</p>
        </div>
  
        <!-- Column 2: Quick Navigation -->
        <div class="col-md-3">
          <h4>Quick Links</h4>
          <ul class="footer-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
  
        <!-- Column 3: Important Links -->
        <div class="col-md-3">
          <h4>Important Links</h4>
          <ul class="footer-links">
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Support</a></li>
          </ul>
        </div>
  
        <!-- Column 4: Social Media -->
        <div class="col-md-3">
          <h4>Follow Us</h4>
          <ul class="social-links">
            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
  
     
    </div>
  </footer>
  
  <footer class="footer-copy">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <p>2025 &copy; Applight. Website Designed by <a href="#" target="_blank" rel="dofollow">Our Team </a></p>
        </div>
      </div>
    </div>
  </footer> 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> 
<!-- scrollIt js --> 
<script src="{{asset('js/scrollIt.min.js')}}"></script> 
<script src="{{asset('js/wow.min.js')}}"></script> 
<script>
	wow = new WOW();
	wow.init();
$(document).ready(function(e) {

	$('#video-icon').on('click',function(e){
	e.preventDefault();
	$('.video-popup').css('display','flex');
	$('.iframe-src').slideDown();
	});
	$('.video-popup').on('click',function(e){
	var $target = e.target.nodeName;
	var video_src = $(this).find('iframe').attr('src');
	if($target != 'IFRAME'){
	$('.video-popup').fadeOut();
	$('.iframe-src').slideUp();
	$('.video-popup iframe').attr('src'," ");
	$('.video-popup iframe').attr('src',video_src);
	}
	});

	$('.slider').bxSlider({
	pager: false
	});
});
    
$(window).on("scroll",function () {

	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','{{asset('images/logo-black.png')}}');
	navbar.addClass("nav-scroll");

}else{
	$('.navbar-logo img').attr('src','{{asset('images/logo-bg.png')}}');
	navbar.removeClass("nav-scroll");
}

});
$(window).on("load",function (){
	var bodyScroll = $(window).scrollTop(),
	navbar = $(".navbar");
	
	if(bodyScroll > 50){
	$('.navbar-logo img').attr('src','{{asset('images/logo-black.png')}}');
	navbar.addClass("nav-scroll");
	}else{
	$('.navbar-logo img').attr('src','{{asset('images/logo-bg.png')}}');
	navbar.removeClass("nav-scroll");
	}

	$.scrollIt({
	
	easing: 'swing',      // the easing function for animation
	scrollTime: 900,       // how long (in ms) the animation takes
	activeClass: 'active', // class given to the active nav element
	onPageChange: null,    // function(pageIndex) that is called when page is changed
	topOffset: -63
	});
});



</script>


</body>
</html>
