<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-type" content="application/xhtml+xml; charset=iso-8859-2" />
<meta name="Generator" content="kED" />

<title><?php bloginfo('name'); ?></title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/supersized.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="<?php bloginfo('template_url'); ?>/_include/css/supersized.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font 
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700&subset=latin-ext,latin' rel='stylesheet' type='text/css'>-->
<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/modernizr.js"></script>
<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/main.js"></script> <!-- Default JS -->
<script src="<?php bloginfo('template_url'); ?>/_include/js/placeholder.js"></script> <!-- Bootstrap -->
<!-- End Js -->

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- Homepage Slider -->
<div id="home-slider">	
    <?php $lang = pll_current_language();?>
            
    <?php if ($lang === 'pl'){?>
        <div class="overlay"><img src="http://roysvenson.pl/klient/bilans/wp-content/uploads/2014/12/logo.jpg"></div>
    <?php }?>
    <?php if ($lang === 'en'){?>
        <div class="overlay"><img src="http://roysvenson.pl/klient/bilans/wp-content/uploads/2014/12/logoEng.jpg"></div>
    <?php }?>
	<?php if ($lang === 'zh'){?>
        <div class="overlay"><img src="http://roysvenson.pl/klient/bilans/wp-content/uploads/2014/12/logoCh.jpg"></div>
    <?php }?>
    
	<!--<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#newPictures"><i class="font-icon-arrow-simple-down"></i></a>
    </div>-->
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav" >
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="<?php bloginfo('url'); ?>" title="BILANS | Biuro rachunkowe i usługi księgowe">Bilans.eu</a>
        </div>
        
        <nav id="menu">
        	<?php if ( has_nav_menu( 'primary-menu' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
                  wp_nav_menu( array( 'theme_location' => 'primary-menu') ); 
            }?>
            <script type="text/javascript">
            $('<a id="pl" href="http://roysvenson.pl/klient/bilans/?lang=pl"></a>').insertAfter('#menu-menu1');
            $('<a id="en" href="http://roysvenson.pl/klient/bilans/?lang=en"></a>').insertAfter('#menu-menu1');
            $('<a id="ch" href="http://roysvenson.pl/klient/bilans/?lang=zh"></a>').insertAfter('#menu-menu1');
            $('<a id="pl" href="http://roysvenson.pl/klient/bilans/?lang=pl"></a>').insertAfter('#menu-menu2');
            $('<a id="en" href="http://roysvenson.pl/klient/bilans/?lang=en"></a>').insertAfter('#menu-menu2');
            $('<a id="ch" href="http://roysvenson.pl/klient/bilans/?lang=zh"></a>').insertAfter('#menu-menu2');
            $('<a id="pl" href="http://roysvenson.pl/klient/bilans/?lang=pl"></a>').insertAfter('#menu-menu3');
            $('<a id="en" href="http://roysvenson.pl/klient/bilans/?lang=en"></a>').insertAfter('#menu-menu3');
            $('<a id="ch" href="http://roysvenson.pl/klient/bilans/?lang=zh"></a>').insertAfter('#menu-menu3');
            </script>
        </nav>
        
    </div>
</header>
<!-- End Header -->
