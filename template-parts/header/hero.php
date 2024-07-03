<div class="hero">
    <div class="hero__overlay"></div>
    <?php 
        if( is_front_page() ):
            echo "<h1> Property Listing </h1>";
        elseif( is_home() ):
                $blog_id = get_option( 'page_for_posts' );
                echo "<h1>" . get_the_title( $blog_id ). "</h1>" ;
        else:
            echo "<h1>" . get_the_title() . "</h1>" ;
        endif;
    ?>
</div>