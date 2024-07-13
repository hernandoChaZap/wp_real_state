<?php get_header(); ?>
    <div class="hero_single" style="background-image: url(<?php the_post_thumbnail_url() ?>);">
        <div class="hero__overlay"></div>
        <h1><?php the_title()?></h1>
    </div>
    <div class="single">        
        <div class="single__body">
            <?php get_template_part('template-parts/single/cpt-content') ?>
            <?php get_template_part('template-parts/single/cpt-sidebar') ?>            
        </div>    
    </div>
<?php get_footer(); ?>