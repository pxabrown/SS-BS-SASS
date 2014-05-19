<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="utf-8">
<title>
<?php wp_title( ''); ?>
</title>
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
<script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<?php // get options from theme $options=g et_option( 'theme_settings'); //show tracking code for the header echo stripslashes($options[ 'tracking']); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse">
<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
<div id="wrap">
<?php if(is_front_page() && $options[ 'carousel_id']) { ?>
<?php echo BootstrapCarousel::get_gallery($options[ 'carousel_id'], 'main-carousel'); ?>
<?php } ?>
<div class="navi"> 
  <!-- Fixed navbar -->
  <div class="small-nav navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="small-logo-container"> <a class="small-logo scroll-link" data-id="wrap" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png" alt="SimplyStudio"></a> </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" data-id="tour" href="#tour">Tour</a> </li>
          <li><a class="scroll-link" data-id="features" href="#features">Features</a> </li>
          <li><a class="scroll-link" data-id="pricing" href="#pricing">pricing</a> </li>
          <li><a class="scroll-link" data-id="faq" href="#faq">FAQs</a> </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
  </div>
  <!-- Small nav -->
  
  <div class="container-fluid big-logo-row">
    <div class="container">
      <div class="row">
        <div class="col-xs-5 big-logo-container ">
          <div class="big-logo"> <a class="scroll-link" data-id="wrap" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/simplystudio-logo.png" alt="SimplyStudio"></a> </div>
        </div>
        <!--/.col-xs-12 --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.container-fluid --> 
</div>
<div class="big-wrapper">
<div class="parallax-manage-biz-section" id="easily-manage">
  <section class="col-xs-12">
    <div class="easily-manage">
      <h1 class="para-text">Easily Manage Your Photography Business</h1>
      <div class="col-lg-2 col-md-4 hidden-xs centered thick-divider"></div>
      <div class="col-xs-12 visible-xs centered"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-screen/josh-small-screen.png" alt="SimplyStudio"> </div>
      <div class="our-family-of-users">
        <p>Josh uses SimplyStudio’s All-In-One system to quickly create invoices, contracts, email marketing and more!</p>
        <a class="btn btn-cta btn-lg scroll-link" data-id="tour" href="#tour" role="button"> Learn More</a> </div>
    </div>
  </section>
</div>

<!-- VIDEO SECTION -->
<div class="video-section" id="tour">
  <section class="col-xs-12">
    <div class="easily-manage">
      <h1 class="para-text">Take a Quick Tour</h1>
      <div class="short-video-p">
        <p>Watch A Short Video And Learn The Benefits For Your Business</p>
        <div class="col-xs-12 col-lg-12 centered video"> <img id="vid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/watch-video-lg.png" data-video="//player.vimeo.com/video/56050401?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"> </div>
        <div class="col-xs-12 get-started">
          <h3>Ready To Get Started?</h3>
          <p>Click the button below to get an instant $100 Off!</p>
        </div>
        <a class="btn btn-cta btn-lg scroll-link" data-id="pricing" href="#pricing" role="button"> GET STARTED NOW!</a> </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <div class="hideme keepscrolling centered">keep scrolling</div>
</div>
<!-- VIDEO SECTION --> 

<!-- START FEATURES -->
<div class="features-section" id="features">
  <section class="col-xs-12">
    <div class="features centered">
      <h1>Photographers We’ve Got What You Need</h1>
      <div class="row-1">
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client-management.png" alt=""></div>
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invoicing-contracts.png" alt=""></div>
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" alt=""></div>
      </div>
      <div class="clearfix"></div>
      <!-- ROW 2 -->
      <div class="row-2">
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accounting.png" alt=""></div>
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sales-online-proofing.png" alt=""></div>
        <div class="col-xs-12 col-sm-6 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-marketing.png" alt=""></div>
      </div>
    </div>
  </section>
</div>
<!-- END FEATURES --> 
<!-- START TESTIMONIAL SECTION -->
<div class="testimonial-section centered hidden-xs" id="testimonials">
  <h1 class="para-text">What Others Are Saying</h1>
  <div class="col-md-1 hidden-xs centered thick-divider"></div>
  <div class="container">
    <section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>“I’ve seen studio profits double since switching to SimplyStudio’s electronic invoices and contracts!”</li>
          <li>"Everything in one system. I LOVE that it syncs with Google calendar too that’s awesome"</li>
          <li>"I love how simple proofing makes it for clients to select their favorites."</li>
          <li>"I love being able to send contracts and questionnaires all from one app."</li>
        </ul>
      </div>
    </section>
  </div>
</div>
<!-- INLINE JS WILL NEED TO BE MOVED --> 
            <script type="text/javascript">
                $(window).load(function(){
                  $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                      $('body').removeClass('loading');
                    }
                  });
                });
              </script> 
<!-- END TESTIMONIAL SECTION --> 

<!-- START PRICE SECTION -->
<div class="price-section" id="pricing">YOU NEXT!</div>
<!-- END PRICE SECTION --> 

<!-- START FAQ SECTION -->
<div class="faq-section" id="faq">
  <section class="col-xs-12">
  <div class="features centered">
    <h1>Frequently Asked Questions</h1>
    <div class="container">
      <div class="col-xs-12 col-md-6">
        <h3>How do I sign up?</h3>
        <p>Simply click the '<a class="scroll-link" data-id="pricing" href="#pricing" role="button"> Create My Account</a>' button to get started. Sign-up only takes a minute!</p>
        
        <h3>How do I cancel service?</h3>
        <p>You can cancel any time prior to renewal by contacting support. Sorry, no refunds on renewals!</p>
        
        <h3>How do I accept payments with SimplyStudio?</h3>
        <p>You can use our built-in merchant account. You'll get paid weekly. You can also use your own merchant account or PayPal account.</p>
      </div>
      
      <!-- COLUMN 2 -->
      <div class="col-xs-12 col-md-6">
        <h3>Can I switch plans?</h3>
        <p>Of course! You can upgrade or downgrade your plan at any time. </p>
        
        <h3>Can I import my contacts?</h3>
        <p>Yes, you can import contacts from most address books as well as directly from GMail.</p>
        
        <h3>Have More Questions?</h3>
        <p>Our support team is available from 6am PST to 7pm PST and usually responds in well under an hour. Visit our <a href="#">Help & Support Center</a> to contact them.</p>
      </div>
    </div>
    </section>
  </div>
  <!-- END FAQ SECTION --> 
</div>
<!-- WRAP -->

<div id="container" class="container">
