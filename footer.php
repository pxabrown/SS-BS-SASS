	</div> <!-- /.container -->
  </div> <!-- /#wrap -->
  <?php $footer_class = (get_theme_mod('footer_inverse') ? 'inverse' : 'default'); ?>
  <footer id="footer" class="<?php echo $footer_class; ?>">
    <div class="container">
		<?php dynamic_sidebar( 'Footer' ); ?>
		<p>&copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
    </div>
	</footer>
	<a href="#" class="navbar-brand scroll-top">Scroll Up</a>
<script>
    $('.parallax-manage-biz-section').parallax({
	    speed : 0.40
    });
    $('.price-section').parallax({
	    speed : 0.40
    });

</script>

    
  <?php wp_footer(); ?>

</body>
</html>
