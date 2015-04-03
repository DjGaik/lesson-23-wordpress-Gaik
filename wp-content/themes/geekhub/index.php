<?php get_header(); ?>

	<div class="reg">
		<h4>Реєстрація на другий сезон відкрита!</h4>
		<span class="registration"><a href="#">Зареєструватися</a></span>
	</div> <!-- END .reg -->
</div><!-- END .headerwrap -->

<div class="wrapper">
	<div class="content">
		<p class="foreword"><strong>geekhub</strong> — це проект, що надає можливість отримати практичні знання та навички в сфері розробки програмного забезпечення. На відміну від традиційної освіти, викладачі geekhub працюють з новітніми технологіями у провідних софтверних компаніях, тому слухачі geekhub отримують тільки актуальні знання. Якщо ти зацікавлений — запрошуємо ознайомитись з деталями проекту, та <span class="active"><a href="#">зареєструватися</a> </span>слухачем!</p>
		<h2>НАШИ КУРСЫ</h2>
		<ul class="courses">

		<?php query_posts( array( 'post_type' => 'courses', 'showposts' => 10 ) );
		if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<li>
				<?php 
					if ( function_exists( 'add_theme_support' ) )
					the_post_thumbnail( array(9999,9999), array('class' => '') ); 
				?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_content(); ?>
			</li>

			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; wp_reset_query(); ?>

		</ul>
	</div><!-- END .content -->
</div><!-- END .wrapper -->

<div class="footerwrap">
		<div class="likeinfo">
			<ul>
				<li id="vk_groups">
					<script type="text/javascript" >
					VK.Widgets.Group("vk_groups", {mode: 0, width: "276", height: "177", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 30111409);
					</script>
				</li>
				<li class="certificate"><a href="#"><img src="http://www.yudin.com.ua/wp-content/themes/geekhub/images/certificate.png" alt="certificate" /></a></li>
				<li class="sponsors">
					<h3>НАШИ СПОНСОРЫ</h3>
					<ul class="sponsorslogo">

						<?php query_posts( array( 'post_type' => 'sponsors', 'showposts' => 10 ) );
							if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>

						<li>
							<?php 
								if ( function_exists( 'add_theme_support' ) )
							?>
							<a href="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						</li>

						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>
						<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
						<?php endif; wp_reset_query(); ?>

					</ul>
				</li>
			</ul>
		</div><!-- END .likeinfo -->

<?php get_footer(); ?>