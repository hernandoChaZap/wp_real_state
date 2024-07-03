<div class="navbar container">
    <div class="navbar__logo">
        <?php the_custom_logo();?>
    </div>
    <nav id="" class="navbar__nav">
        <a href="#float_menu" class="navbar__hamburguer">
             <svg class="navbar__icon" xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18"/></svg>
        </a>
        <a href="#" class="navbar__close">
            <svg class="navbar__icon" xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round"  stroke-linejoin="round" stroke-width="2" d="m7 7l10 10M7 17L17 7"/></svg>
        </a>
    </nav>
    <button class="btn-primary navbar__button">Contáctanos</button>
</div>
<div class="navbar scrollnav">
    <div class="navbar__logo">
        <?php the_custom_logo();?>
    </div>
    <nav id="" class="">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar__menu',
                'container'      => '',
            )
        );
        ?>
    </nav>
    <button class="btn-primary navbar__button">Contáctanos</button>
</div>
