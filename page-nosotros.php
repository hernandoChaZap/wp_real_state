<?php get_header(); ?>
<div class="header">
    <div class="overlay"></div>
    <?php 
        if( is_page() && !is_front_page() )    :
            echo "<h1>" . get_the_title() . "</h1";
        endif;
    ?>
</div>
<?php get_footer(); ?>
<!-- <h1>Titulo H1</h1>
<h2>Titulo H2</h2>
<h3>Titulo H3</h3>
<h4>Titulo H4</h4>
<h5>Titulo H5</h5>
<h6>Titulo H6</h6> -->
<button class="btn-primary">Primary</button>
<button class="btn-secondary">Secondary</button>
<button class="btn-outline">Tertiary</button>