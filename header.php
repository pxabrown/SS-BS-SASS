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

<body <?php body_class(); ?>>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="small-logo-container">
                            <a class="small-logo scroll-link" data-id="wrap" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png" alt="SimplyStudio"></a>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="scroll-link" data-id="tour" href="#tour">Tour</a>
                            </li>
                            <li><a class="scroll-link" data-id="features" href="#features">Features</a>
                            </li>
                            <li><a class="scroll-link" data-id="pricing" href="#pricing">pricing</a>
                            </li>
                            <li><a class="scroll-link" data-id="faq" href="#faq">FAQs</a>
                            </li>
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
                            <div class="big-logo">
                                <a class="scroll-link" data-id="wrap" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/simplystudio-logo.png" alt="SimplyStudio"></a>
                            </div>
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
            <div class="parallax-manage-biz-section">
                <section class="col-xs-12">
                    <div class="easily-manage">
                        <h1 class="para-text">Easily Manage Your Photography Business</h1>
                        <div class="col-lg-2 col-md-4 hidden-xs centered thick-divider"></div>
                        <div class="col-xs-12 visible-xs centered">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-screen/josh-small-screen.png" alt="SimplyStudio">
                        </div>
                        <div class="our-family-of-users">
                            <p>Josh uses SimplyStudio’s All-In-One system to quickly create invoices, contracts, email marketing and more!</p>
                            <a class="btn btn-cta btn-lg scroll-link" data-id="tour" href="#tour" role="button">
                Learn More</a>
                        </div>
                    </div>
                </section>
            </div>
            
            
            
            <!-- VIDEO SECTION -->
            <div class="video-section" id="tour">
                <section class="col-xs-12">
                    <div class="easily-manage">
                        <h1 class="para-text">Take a Quick Tour</h1>
                        <div class="col-lg-2 col-md-4 hidden-xs centered thick-divider"></div>
                        
                        <div class="short-video-p">
                            <p>Watch A Short Video And Learn The Benefits For Your Business</p>
                            <div class="col-xs-12 col-lg-8 centered video">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/watch-video-lg.png" data-video="//player.vimeo.com/video/56050401?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1">                    
                            </div>
                             <div class="col-xs-12 get-started">
                                <h3>Ready To Get Started?</h3>
                                <p>Click the button below to get an instant $100 Off!</p>
                                
                            </div>
                            <a class="btn btn-cta btn-lg scroll-link" data-id="tour" href="#tour" role="button">
                Get Started</a>
                        </div>
                    </div>
                </section>
            </div>
            <!-- VIDEO SECTION -->
            <div class="features-section" id="features"></div>
            <div class="testimonial-section" id="testimonials"></div>
            <div class="price-section" id="pricing">hello</div>
            <div class="faq" id="faq">hello</div>

        </div>




        <div id="container" class="container">

