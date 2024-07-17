<?php 
/**
 * Template Name: Agentes
 */
get_header();
$args = [
    'post_type'      => 'agente',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'rand',
    'order'          => 'DESC'
];
$agente = new WP_Query( $args );
?>
<section class="agentes">
    <div class="agentes__data">
        <h2>Lista de agentes</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate soluta illo dolores magnam delectus earum provident magni ratione iste hic.            
        </p>
    </div>
    <div class="agentes__loop">
        <?php 
            if( $agente->have_posts() ):
                while( $agente->have_posts() ):
                    $agente->the_post();                 
        ?>
            <div class="agentes__card">
                <div class="agentes__card__img">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="agentes__card__data">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                        <p><?php the_field('cargo'); ?></p>
                </div>
                <div class="agentes__card__social">
                    <?php 
                        if(have_rows('redes')):
                            while(have_rows('redes')):
                                the_row(); ?>
                                <a href="<?php echo get_sub_field('url_del_prefil') ?>" class="red" title="<?php echo get_sub_field('nombre_del_perfil') ?>">
                                 <i class="fa-brands fa-<?php echo get_sub_field('social'); ?>"></i>                                    
                                </a>
                           <?php endwhile;
                        endif;
                    ?>
                </div>
            </div>
        <?php 
                endwhile;
            endif;
        ?>
    </div>
</section>






<?php get_footer(); ?>