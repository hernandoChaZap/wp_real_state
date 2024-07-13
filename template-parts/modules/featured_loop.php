<?php 
	$args = [
		'post_type'      => 'propiedad',
		'posts_per_page' => 8,
		'state'          => 'publish',
		'orderby'       => 'rand',
		'order'          => 'DESC',
	];
	$prop = new WP_Query( $args );

	?>
<section class=" featured">
	<h2 class="featured__title">Destacados</h2>
	<p class="featured__p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, assumenda!</p>
	<div class="featured_loop">
		<?php 
			if( $prop->have_posts() ):	
				while( $prop->have_posts() ):
					$prop->the_post();				
			?>
				<div class="featured__card">
					<div class="featured__content">
						<div class="featured__thumb__box">
							<div class="featured__thumb">
								<a href="<?php echo get_the_permalink();  ?>" class="featured__a">
									<img src="<?php the_post_thumbnail_url() ?>" alt="" class="featured__img">							
								</a>
							</div>
							<div class="featured__icon">
								<?php the_field('estado_comercial'); ?>
							</div>
						</div>
						<div class="featured__info">
							<div class="featured__meta">
								<div class="featuret__icon__wrapper">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 14c2.206 0 4-1.794 4-4s-1.794-4-4-4-4 1.794-4 4 1.794 4 4 4zm0-6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2z"></path><path d="M11.42 21.814a.998.998 0 0 0 1.16 0C12.884 21.599 20.029 16.44 20 10c0-4.411-3.589-8-8-8S4 5.589 4 9.995c-.029 6.445 7.116 11.604 7.42 11.819zM12 4c3.309 0 6 2.691 6 6.005.021 4.438-4.388 8.423-6 9.73-1.611-1.308-6.021-5.294-6-9.735 0-3.309 2.691-6 6-6z"></path></svg>
									<span class="-"><?php the_field('ciudad') ?></span>
								</div>
								<div class="featuret__icon__wrapper">
									<svg fill="#000000" width="800px" height="800px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M 4 4 L 4 28 L 28 28 L 28 19 L 13 19 L 13 18 L 13 16 L 13 14 L 13 12 L 13 10 L 13 8 L 13 4 L 4 4 z M 6 6 L 11 6 L 11 8 L 8 8 L 8 10 L 11 10 L 11 12 L 8 12 L 8 14 L 11 14 L 11 16 L 8 16 L 8 18 L 11 18 L 11 19.585938 L 6 24.585938 L 6 6 z M 12.414062 21 L 14 21 L 14 24 L 16 24 L 16 21 L 18 21 L 18 24 L 20 24 L 20 21 L 22 21 L 22 24 L 24 24 L 24 21 L 26 21 L 26 26 L 7.4140625 26 L 12.414062 21 z"/></svg>
									<span class="featured__date"><?php the_field('area_total'); ?>m<sup>2</sup></span>
								</div>
							</div>
							<h4 class="featured__title_prop"><?php the_title(); ?></h4>
							<div class="featured__footer">
								<span class="featured__price">
									<?php 
										$precio = get_field('precio');
										// setlocale( LC_MONETARY, 'es_CO' );
										// $fmt = new NumberFormatter( 'es_CO', NumberFormatter::CURRENCY );
										// echo $fmt->formatCurrency( floor($precio), "COP $")."\n";

										// $fmt = new \NumberFormatter( 'es_CO', \NumberFormatter::CURRENCY);
										// $fmt->setTextAttribute( $fmt::CURRENCY_CODE, 'COP' );
										// $fmt->setAttribute( $fmt::FRACTION_DIGITS, 0 );
										// echo $numberString = $fmt->format( $precio );
										$format = numfmt_create('es_CO', NumberFormatter::CURRENCY);
										echo numfmt_format( $format, $precio );
									?>
								</span>
								<span class="featured__fav">
									<a href="<?php echo get_the_permalink();  ?>">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M8.465 11.293c1.133-1.133 3.109-1.133 4.242 0l.707.707 1.414-1.414-.707-.707c-.943-.944-2.199-1.465-3.535-1.465s-2.592.521-3.535 1.465L4.929 12a5.008 5.008 0 0 0 0 7.071 4.983 4.983 0 0 0 3.535 1.462A4.982 4.982 0 0 0 12 19.071l.707-.707-1.414-1.414-.707.707a3.007 3.007 0 0 1-4.243 0 3.005 3.005 0 0 1 0-4.243l2.122-2.121z"></path><path d="m12 4.929-.707.707 1.414 1.414.707-.707a3.007 3.007 0 0 1 4.243 0 3.005 3.005 0 0 1 0 4.243l-2.122 2.121c-1.133 1.133-3.109 1.133-4.242 0L10.586 12l-1.414 1.414.707.707c.943.944 2.199 1.465 3.535 1.465s2.592-.521 3.535-1.465L19.071 12a5.008 5.008 0 0 0 0-7.071 5.006 5.006 0 0 0-7.071 0z"></path></svg>
									</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			<?php 
				endwhile;

			endif;	
			wp_reset_postdata();		
			?>
		</div>
		<?php $prop = get_page_by_path('propiedades');?>

		<a href="<?php the_permalink( $prop->ID ) ?>" class="btn-outline">Ver más</a>
	</section>