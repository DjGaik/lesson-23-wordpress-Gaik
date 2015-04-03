	<div class="footer">
		<?php
			if ( function_exists( 'wp_nav_menu' ) )
				wp_nav_menu( 
					array( 
					'theme_location' => 'custom-menu',
					'fallback_cb'=> 'custom_menu',
					'container' => 'ul',
					'menu_id' => '',
					'menu_class' => 'footernav') 
				);
			else custom_menu();
		?>
		<span class="copyright"><?php echo devise_copyright(); ?></span>
	</div><!-- END .footer -->
</div><!-- END .footerwrap -->
<?php wp_footer(); ?>
</body>
</html>