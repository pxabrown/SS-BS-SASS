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
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,400italic,300italic,300,500italic,700,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<?php // get options from theme $options=g et_option( 'theme_settings'); //show tracking code for the header echo stripslashes($options[ 'tracking']); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse">
<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	
<?php if(is_front_page()) { ?>
<div id="wrap">
<div class="navi"> 
  <!-- Fixed navbar -->
  <div class="small-nav navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="small-logo-container"> <a class="small-logo scroll-link" data-id="wrap" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png" alt="SimplyStudio"></a> </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a class="scroll-link" data-id="tour" href="#tour">Tour</a> </li>
          <li><a class="scroll-link hidden-xs" data-id="features" href="#features">Features</a> </li>
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
          <div class="big-logo"> <a class="scroll-link" data-id="wrap" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/simplystudio-logo.png" alt="SimplyStudio"></a> </div>
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
<div class="manage-biz-section" id="easily-manage">
  <section class="col-xs-12">
    <div class="easily-manage">
      <h1 class="para-text">Easily Manage Your Photography Business</h1>
      <div class="col-lg-2 col-md-4 col-sm-4 hidden-xs centered thick-divider"></div>
      <div class="col-xs-12 visible-xs centered"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-screen/josh-small-screen.png" alt="SimplyStudio">
      
       </div>
             <div class="col-xs-12 visible-sm centered josh"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-screen/josh-md-screen.png" alt="SimplyStudio">
             </div>
      <div class="our-family-of-users">
        <p>Josh uses SimplyStudio’s All-In-One system to quickly create invoices, contracts, email marketing and more!</p>
        <a class="btn btn-cta btn-lg scroll-link" data-id="tour" href="#tour" role="button"> Learn More</a> </div>
    </div>
  </section>
</div>

<!-- VIDEO SECTION -->
<div class="video-section" id="tour">
  <section class="col-xs-12">
      <h1 class="para-text">Take a Quick Tour</h1>
      <div class="short-video-p">
        <p>Watch A Short Video And Learn The Benefits For Your Business</p>
        <div class="col-xs-12 col-lg-12 centered video"> <img id="vid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/watch-video-lg.png" data-video="//player.vimeo.com/video/56050401?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"> </div>
        <div class="col-xs-12 get-started">
          <h3>Ready To Get Started?</h3>
          <p>Click the button below to get an instant $100 Off!</p>
        </div>
        <a class="btn btn-cta btn-lg scroll-link" data-id="pricing" href="#pricing" role="button"> GET STARTED NOW!</a> </div>
  </section>
</div>
<!-- VIDEO SECTION --> 

<!-- START FEATURES -->
<div class="features-section hidden-xs" id="features">
  <section class="col-xs-12">
    <div class="features centered">
      <h1>Photographers We’ve Got What You Need</h1>
      <div class="row-1">
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/client-management.png" alt="">
        <h3>Client Management</h3>
        <p>Quickly get back to leads and increase the chance of booking them.</p>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invoicing-contracts.png" alt="">
        <h3>Invoicing & Contracts</h3>
        <p>Get the shoot booked and get paid faster with our contracts and invoices.</p>
        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/calendar.png" alt="">
        <h3>Scheduling & Workflow</h3>
        <p>You’ll never have to worry about where you are in the 'process'.</p>

        </div>
      </div>
      <div class="clearfix hidden-xs"></div>
      <!-- ROW 2 -->
      <div class="row-2">
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/accounting.png" alt="">
        <h3>Accounting</h3>
        <p>Save time and keep it simple with our accounting feature.</p>

        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sales-online-proofing.png" alt="">
        <h3>Online Sales & Proofing</h3>
        <p>Customers or guests view their images and place their orders online.</p>

        </div>
        
        <div class="col-xs-12 col-sm-4 col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email-marketing.png" alt="">
        <h3>Email Marketing</h3>
        <p>Save time and money with our easy-to-use, Email Marketing feature.</p>

        </div>
      </div>
    </div>
  </section>
</div>
<!-- END FEATURES --> 
<!-- START TESTIMONIAL SECTION -->
<div class="testimonial-section centered hidden-xs" id="testimonials">
  <h1 class="para-text">What Others Are Saying</h1>
  <div class="col-md-1 col-sm-2 hidden-xs centered thick-divider"></div>
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
<div class="price-section" id="pricing">
    <section class="col-xs-12">
      <div class="features centered">
        <h1>Enjoy It All, With No Limits!</h1>
        <div class="container">
          <div class="col-xs-12 col-md-12 hidden-xs">
              <p>Yes, we’re giving you full access to the best client management system available for photographers. Everything you need, without any limits. How cool is that? Take control over your business now!</p>
          </div>
          <div class="clearfix"></div>
          <div class="col-xs-12 col-md-9 centered">
          <div class="count-down-price">
              <div class="clock"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/count-down-clock.png" alt=""></div>
              <div class="saleendsin">
              <div class="endsin">24 Hour $100 off Sale ends in:</div> <span>23</span><span class="timeframe">hrs.</span> <span>50</span><span class="timeframe">min.</span> <span>12</span><span class="timeframe">sec.</span>
              </div>
          </div>
        </div>
          <div class="row price-table">
          <!-- SMALL PACKAGE -->
          <div class="col-md-4 col-sm-4">
              <div class="block-topper-spacer"></div>
                  <div class="top-block"><h3>Studio Management</h3>
                  <div class="short-sale">
                  <div class="small">24 hour sale get it now for</div>
                  </div>
                  <div class="big-price">
                      <span class="money">$</span>199<span>/ yr</span>
                  </div>
                  <div class="normal-price">
                     <strike>$299<span>/ yr</span> </strike>
                  </div>
                  <a class="second-cta visible-xs" href="#" role="button">create Account</a>
                  <div class="moneyback visible-xs"> 15 DAY MONEY BACK guarantee</div>

                  </div>
                  <div class="package hidden-xs">
                      <ul>
                        <li>Client & Task management</li>

                        <li>Keep track of client emails</li>
                        
                        <li>Assign workflows to events</li>
                        
                        <li>Online calendar</li>
                        
                        <li>Invoice clients / Get paid online</li>
                        
                        <li>Electronic contracts</li>
                        
                        <li>Online questionnaires</li>
                        
                        <li>E-mail marketing</li>
                      </ul>
                     <a class="cta" href="#" role="button">create Account</a>
                </div>
                <div class="moneyback hidden-xs"> 15 DAY MONEY BACK guarantee</div>
              </div>
              
              
            
            <!-- POPULAR PACKAGE -->
              <div class="col-md-4 col-sm-4">
                <div class="block-topper">MOST POPULAR</div>
                  <div class="top-block">
                  <h3>Studio Management 
                  <br>+ Accounting</h3>
                  <div class="popular">24 hour sale get it now for</div>
                   <div class="big-price">
                      <span class="money">$</span>299<span>/ yr</span>
                  </div>
                  <div class="normal-price">
                     <strike>$399<span>/ yr</span> </strike>
                  </div>
                  <a class="main-cta visible-xs" href="#" role="button">create Account</a>
                  <div class="moneyback visible-xs"> 15 DAY MONEY BACK guarantee</div>
                  </div>
                  <div class="package hidden-xs">
                  <ul>
                    <li>Client & Task management</li>
                    <li>Keep track of client emails</li>
                    <li>Assign workflows to events</li>
                    <li>Online calendar</li>
                    <li>Invoice clients / Get paid online</li>
                    <li>Electronic contracts</li>
                    <li>Online questionnaires</li>
                    <li>E-mail marketing</li>
                    <li>Keep track of accounts receivables</li>
                    <li>Run profit & loss reports</li>
                  </ul>
                      <a class="main-cta" href="#" role="button">create Account</a>
                  </div>
                  <div class="moneyback hidden-xs"> 15 DAY MONEY BACK guarantee</div>
                  </div>
                  
                  
                  
                  <!-- BIG PACKAGE -->
              <div class="col-md-4 col-sm-4">
              <div class="block-topper-spacer"></div>
                  <div class="top-block">
                  <h3>Studio Management 
                  <br>+ Accounting 
                  <br>+ proofing</h3>
                  <div class="short-sale">
                    <div class="big">24 hour sale get it now for</div></div>
                   <div class="big-price">
                      <span class="money">$</span>399<span>/ yr</span>
                  </div>
                  <div class="normal-price">
                     <strike>$499<span>/ yr</span> </strike>
                  </div>
                  <a class="second-cta visible-xs" href="#" role="button">create Account</a>
                  <div class="moneyback visible-xs"> 15 DAY MONEY BACK guarantee</div>

                  </div>
                  <div class="package hidden-xs">
                    <ul>
                        <li>Client & Task management</li>
                        <li>Keep track of client emails</li>
                        <li>Assign workflows to events</li>
                        <li>Online calendar</li>
                        <li>Invoice clients / Get paid online</li>
                        <li>Electronic contracts</li>
                        <li>Online questionnaires</li>
                        <li>E-mail marketing</li>
                        <li>Keep track of expenses</li>
                        <li>Keep track of accounts receivables</li>
                        <li>Run profit & loss reports</li>
                        <li>Allow clients to proof photos</li>
                        <li>Fulfill orders with  SimplyColor Lab</li>
                        <li>Self fulfill orders</li>
                        <li>Create gift certificates</li>
                        <li>Setup pricing and packages</li>
                        <li>Watermark images</li>
                        <li>Unlimited storage</li>
                        <li>Sell Digital Downloads</li>
                        <li>Set up coupon & volume discounts</li>
                    </ul>
                      <a class="cta" href="#" role="button">create Account</a>
                  </div>
                  <div class="moneyback hidden-xs">15 DAY MONEY BACK guarantee</div>
            </div>
            <!-- END BIG PACKAGE -->
              </div>
        </div>
    </section>
</div>
<!-- END PRICE SECTION --> 

<!-- START FAQ/FOOTER SECTION -->
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
        <p>Our support team is available from 6am PST to 7pm PST and usually responds in well under an hour. Visit our <a href="https://simplystudio.desk.com/" target="_blank">Help & Support Center</a> to contact them.</p>
      </div>
      <div class="clearfix"></div>
      <div class="footer-section col-xs-12 col-md-12">
        <h6></h6>
        <div class="footer-wrapper">        
        <nav id="menu" class="footer-menu" role="navigation">
        	<div class="col-md-7">
        	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'footer-nav' ) ); ?>
        	</div>
        	<div class="col-md-5 last-chance">
        	<p>Click the button below to get instant savings of $100 Off!</p>
            	<a class="btn-cta scroll-link" data-id="pricing" href="#" role="button">get started</a>
        	</div>
        </nav><!-- #menu -->        
        
        <div class="clearfix"></div>
        <div class="col-md-5">
        <?php dynamic_sidebar( 'Footer' ); ?>
		<p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?>. All Rights Reserved.</p>
        </div>
        </div>
		<h6></h6>
    </div>

      
    </div>
        </section>
  </div>
  <!-- END FAQ/FOOTER SECTION --> 
</div>
<!-- WRAP -->
<?php } else { ?><!-- EVERYTHING ELSE DISPLAY AS BELOW -->
<div class="navi"> 
  <!-- Fixed navbar -->
  <div class="small-nav navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="small-logo-container"> <a class="small-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png" alt="SimplyStudio"></a> </div>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#tour">Tour</a> </li>
          <li><a href="#features">Features</a> </li>
          <li><a href="#pricing">pricing</a> </li>
          <li><a href="#faq">FAQs</a> </li>
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
          <div class="big-logo"> <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/simplystudio-logo.png" alt="SimplyStudio"></a> </div>
        </div>
        <!--/.col-xs-12 --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.container-fluid --> 
</div>
 
<?php } ?>
<div id="container" class="container">
