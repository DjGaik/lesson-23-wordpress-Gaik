<?php get_header(); ?>

</div>

<div class="wrapper">
	<div class="content">
			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="page">
				<h1><?php the_title(); ?></h1>
				<?php 
					if ( function_exists( 'add_theme_support' ) )
					the_post_thumbnail( array(9999,9999), array('class' => 'about') ); 
				?>
				<?php the_content(); ?>
			</div>

			<?php endwhile; ?>
			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
</div>
	
		<div class="footerwrap">

<?php get_footer(); ?>