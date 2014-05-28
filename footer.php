<?php if (is_front_page()) { ?>
<?php } else { ?>

	</div> <!-- /.container -->
  </div> <!-- /#wrap -->
  <?php //$footer_class = (get_theme_mod('footer_inverse') ? 'inverse' : 'default'); ?>
<!--
  <footer id="footer" class="<?php echo $footer_class; ?>">
    <div class="container">
		
    </div>
	</footer>
-->
<div class="clearfix"></div>
<div class="big-wrapper">

<!-- START FAQ/FOOTER SECTION -->
  <section class="col-xs-12">
  <div class="features centered">
  <div class="container">
      <div class="footer-section col-xs-12 col-md-12">
        <h6></h6>
        <div class="footer-wrapper">        
        <nav id="menu" class="footer-menu" role="navigation">
        	<div class="col-md-7">
        	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'footer-nav' ) ); ?>
        	</div>
        	<div class="col-md-5 last-chance">
        	<p>Click the button below to get instant savings of $100 Off!</p>
            	<a class="btn-cta" href="/simplystudio/#pricing" role="button">get started</a>
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
  <!-- END FAQ/FOOTER SECTION --> 
</div>
	<?php } ?>
	
<!-- 	<a class="navbar-brand scroll-top hideme" data-id="wrap" href="#wrap">Scroll Up</a> -->

<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top"><i class="glyphicon glyphicon-chevron-up"></i></a></li>
</ul>


  <?php wp_footer(); ?>

</body>
</html>



