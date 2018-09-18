<!DOCTYPE html>
<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<meta name="description" content="Handyman - Job Board HTML Template - 1.0">
	<meta name="author" content="http://themeforest.net/user/dan_fisher">


	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js">
     <link href="{{asset('css/styles.css')}}" rel="stylesheet">
     <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">



	<!-- CSS
	================================================== -->
	<!-- Base + Vendors CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts/font-awesome/css/font-awesome.css')}}">
	<link rel="stylesheet" href="{{asset('css/fonts/entypo/css/entypo.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.carousel.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('vendor/owl-carousel/owl.theme.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('vendor/flexslider/flexslider.css')}}" media="screen">
	<link rel="stylesheet" href="{{asset('vendor/job-manager/frontend.css')}}" media="screen">

	<!-- Theme CSS-->
	<link rel="stylesheet" href="{{asset('css/theme.css')}}">
	<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">


	<!-- Head Libs -->
	<script src="{{asset('vendor/modernizr.js')}}"></script>
	<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
	<script>
   tinymce.init({
     selector: '.mytextarea'
   });
   </script>

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/favicon-120.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/favicon-152.png">

</head>
<body>


  	<div class="site-wrapper">
      	@include('partials.header')
        @yield('container')

</div>



     <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <script>
        $('.carousel').carousel()
    </script>

    <script type="module">

    // Navigation
        // Responsive Toggle Navigation =============================================
        let menuIcon = document.querySelector('.menuIcon');
        let nav = document.querySelector('.overlay-menu');

        menuIcon.addEventListener('click', () => {
            if (nav.style.transform != 'translateX(0%)') {
                nav.style.transform = 'translateX(0%)';
                nav.style.transition = 'transform 0.2s ease-out';
            } else {
                nav.style.transform = 'translateX(-100%)';
                nav.style.transition = 'transform 0.2s ease-out';
            }
        });


        // Toggle Menu Icon ========================================
        let toggleIcon = document.querySelector('.menuIcon');

        toggleIcon.addEventListener('click', () => {
            if (toggleIcon.className != 'menuIcon toggle') {
                toggleIcon.className += ' toggle';
            } else {
                toggleIcon.className = 'menuIcon';
            }
        });
    </script>

  	<!-- Javascript Files
  	================================================== -->
  	<script src="{{asset('vendor/jquery-1.11.0.min.js')}}"></script>
  	<script src="{{asset('vendor/jquery-migrate-1.2.1.min.js')}}"></script>
  	<script src="{{asset('vendor/bootstrap.js')}}"></script>
  	<script src="{{asset('vendor/jquery.flexnav.min.js')}}"></script>
  	<script src="{{asset('vendor/jquery.hoverIntent.minified.js')}}"></script>
  	<script src="{{asset('vendor/jquery.flickrfeed.js')}}"></script>
  	<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>
  	<script src="{{asset('vendor/owl-carousel/owl.carousel.min.js')}}"></script>
  	<script src="{{asset('vendor/jquery.fitvids.js')}}"></script>
  	<script src="{{asset('vendor/jquery.appear.js')}}"></script>
  	<script src="{{asset('vendor/jquery.stellar.min.js')}}"></script>
  	<script src="{{asset('vendor/flexslider/jquery.flexslider-min.js')}}"></script>
  	<script src="{{asset('vendor/jquery.countTo.js')}}"></script>

  	<!-- Newsletter Form -->
  	<script src="{{asset('vendor/jquery.validate.js')}}"></script>
  	<script src="{{asset('js/newsletter.js')}}"></script>

  	<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
  	<script>

  	jQuery(function($){
  		$('body').addClass('loading');
  	});

  	$(window).load(function(){
  		$('.flexslider').flexslider({
  			animation: "fade",
  			controlNav: true,
  			directionNav: false,
  			prevText: "",
  			nextText: "",
  			start: function(slider){
  				$('body').removeClass('loading');
  			}
  		});
  	});
  	</script>
<script >
	$('.delete').click(function(){
		var slug=$(this).attr('del');
		//alert(slug);
		bootbox.confirm({
			message:'are you sure you want to delete?',
			button:{
				confirm:{
					label:'yes',
					className:'btn-success'
				},
				cancel:{
					label:'no',
					className:'btn-danger'
				}
			},
			callback:function(result){
				if(result){
					window.location=slug;
				}
			}
		});
	});
</script>
  </body>
  </html>
