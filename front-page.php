<?php
/**
 * 
 * @package under_vite
 */

get_header();
?>
	<?php get_template_part( 'template-parts/modules/welcome' );  ?>
	<?php get_template_part( 'template-parts/modules/featured_loop' ); ?>
	<?php get_template_part( 'template-parts/modules/testimonial' ); ?>
	<div class="imgbox">
		<div class="single-box">
			<div class="img-wraper">
				<span class="shine"></span>
				<img src="<?php echo get_template_directory_uri() ?>./src/images/casa_4.jpg" alt="">
			</div>
			<div class="content">
				<h4>Titulo casa</h4>
				<p>Lorem ipsum dolor sit amet consectetur.</p>
			</div>
		</div>
	</div>
<?php


get_footer();
