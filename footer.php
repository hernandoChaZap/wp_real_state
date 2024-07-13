<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package under_vite
 */

?>
	
	<?php
			wp_nav_menu(
				array(
					'theme_location'  => 'menu-1',
					'menu_id'         => 'primary-menu',
					'menu_class'      => 'navbar__menu',
					'container'       => 'nav',
					'container_class' => 'float_menu',
					'container_id'    => 'float_menu',
				)
			);
	?>
	
	
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'under-vite' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'under-vite' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'under-vite' ), 'under-vite', '<a href="http://hernando.chaves.dev">Hernnando José Chaves</a>' );
				?>
		</div>
		<button  class="back__top">
			<!-- <i class="fa-solid fa-location-arrow"></i> -->
			 <div class="back__top__angle"></div>
		</button>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
