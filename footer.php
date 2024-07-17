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
	
	
	<footer id="colophon" class="footer">
		<div class="footer__data">
			<div class="footer_wrapper">
				<h4>Logo</h4>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam esse architecto, maiores totam commodi itaque ipsa rem doloremque tenetur animi obcaecati quia hic amet veritatis sint nobis. Non, temporibus tempore.</p>
			</div>
			<div class="footer_wrapper">
				<h4>Menú</h4>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam esse architecto, maiores totam commodi itaque ipsa rem doloremque tenetur animi obcaecati quia hic amet veritatis sint nobis. Non, temporibus tempore.</p>
			</div>
			<div class="footer_wrapper">
				<h4>Servicios</h4>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam esse architecto, maiores totam commodi itaque ipsa rem doloremque tenetur animi obcaecati quia hic amet veritatis sint nobis. Non, temporibus tempore.</p>
			</div>
			<div class="footer_wrapper">
				<h4>Contacto</h4>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam esse architecto, maiores totam commodi itaque ipsa rem doloremque tenetur animi obcaecati quia hic amet veritatis sint nobis. Non, temporibus tempore.</p>
			</div>
		</div>
		<div class="footer__copyright">
			
				<?php
				$allowed = [
					'a' => [
						// 'href' => [],
						'title' => [],
						'target' => [],
					],
				];

				 
				?>
			<div class="">
				<?php 
					printf(
						wp_kses(
							'Diseño y desarrollo <a href="%1$s" target="_blank" >%2$s</a>', 'text-domain',
							$allowed
						),
						'https://hernandochaves.com',
						'Hernando J. Chaves'
					);
				?>
			</div>
				<div>
					<?php
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'under-vite' ), 'under-vite', '<a href="http://hernando.chaves.dev">Hernnando José Chaves</a>' );
					?>
				</div>
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
