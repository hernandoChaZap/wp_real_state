<div class="single__content">
    <div class="single__gallery">
        <h5 class="ribbon">
            <?php the_field('tipo_de_propiedad_'); ?>
            <span><?php the_field('estado_comercial'); ?></span>
        </h5>
        <div class="single__gallery__meta">
            <div>
                <span>
                    <i class="fa-solid fa-book-bookmark"></i>
                </span>
                <span>ID: </span>
                <span>
                    <?php the_field('id_propiedad') ?>
                </span>
            </div>
            <div>
                <span>
                    <i class="fa-solid fa-map-pin"></i>
                </span>
                <span>Direción</span>
                <span>
                    <?php the_field('direccion') ?>
                </span>
                <span>
                    (<?php the_field('ciudad') ?>)
                </span>
            </div>
            <div>
                <span>
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
                <?php echo get_the_date(); ?>
            </div>
        </div>
        <div class="single__gallery__social">
            <div class="single__gallery__fav">
                <span>
                    <i class="fa-regular fa-heart"></i>
                </span>
                <span>Agregar a favoritos</span>
            </div>
            <div class="single__gallery__icons__wrapper">
                <p>Compatir</p>
                <div class="single__gallery__icons">
                    <i class="fa-brands fa-square-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-square-x-twitter"></i>
                    <i class="fa-brands fa-linkedin"></i>
                </div>
            </div>
        </div>
        <div class="single__gallery__slide">
            <div class="slide_cpt_gallery" navigation="true">
                <div class="swiper-wrapper">
                <?php
                    $gallery = get_field('galeria');
                    foreach($gallery as $item): ?>
                        <div class="swiper-slide">
                            <img class="swiper_prop" src="<?php echo $item['sizes']['large'] ?>" alt="">
                        </div>
                    <?php    
                        endforeach;
                        // echo '<pre>';
                        // var_dump($item);
                        // echo '</pre>';
                ?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <!-- <ul class="control" id="cpt-control">
                <li class="prev">
                    <i class="fa-solid fa-angles-left"></i>
                </li>
                <li class="next">
                    <i class="fa-solid fa-angles-right"></i>
                </li>
            </ul> -->
        </div>
    </div>
    <div class="single__description">
        <h5 class="ribbon">Descripción</h5>
        <hr>
        <p>
            <?php the_content(); ?>
        </p>
    </div>
    <div class="prop__info">
        <h5 class="ribbon">Información básica</h5>
        <hr>
        <div class="prop__info__data">
            <div class="prop__info__l">
                <div class="">
                    ID:
                    <span>
                        <?php the_field('id_propiedad'); ?>
                    </span>
                </div>                 
                <div class="">
                    Área total:
                    <span>
                        <?php the_field('area_total'); ?>
                         m<sup>2</sup>
                    </span>
                </div>
                <div class="">
                    Niveles:
                    <span>
                        <?php the_field('nivel'); ?>
                    </span>
                </div>
                <div class="">
                    Departamento:
                    <span>
                        <?php the_field('estado'); ?>
                    </span>
                </div>
                <div class="">
                    Habitaciones:
                    <span>
                        <?php the_field('habitaciones'); ?>
                    </span>
                </div>
                <div class="">
                    Cocinas:
                    <span>
                        <?php the_field('cocinas'); ?>
                    </span>
                </div>
                <div class="">
                    Patio:
                    <span>
                        <?php
                            $patio = get_field('patio'); 
                            echo $patio == 1 ? 'Si' : 'No'
                        ?>
                    </span>
                </div>
            </div>
            <div class="prop__info__r">
                <div class="">
                    Año de construida:
                    <span>
                        <?php the_field('ano_de_construccion'); ?>
                    </span>
                </div>
                <div class="">
                    Área construida:
                    <span>
                        <?php the_field('area_construida'); ?>
                        m<sup>2</sup>
                    </span>
                </div>
                <div class="">
                    Zona:
                    <span>
                        <?php 
                            $zona = get_field('zona'); 
                            echo $zona['label'];
                        ?>
                    </span>
                </div>
                <div class="">
                    Código postal:
                    <span>
                        <?php the_field('codigo_postal'); ?>
                    </span>
                </div>
                <div class="">
                    Baños:
                    <span>
                        <?php the_field('Banos'); ?>
                    </span>
                </div>
                <div class="">
                    Garaje:
                    <span>
                        <?php the_field('Garaje'); ?>
                    </span>
                </div>
                <div class="">
                    Código postal:
                    <span>
                        <?php the_field('codigo_postal'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="amenities">
        <h5 class="ribbon">Amenities</h5>
        <hr>
        <div class="amenities_data">
            <?php 
                $amenities = get_field('adicionales');
                foreach( $amenities as $item ): ?>
                    <div>
                        <i class="fa-regular fa-square-check"></i>
                        <?php echo $item['label'] ?>
                    </div>
                <?php
                endforeach;
            ?>
        </div>
    </div>
    <div class="media">
        <h5 class="ribbon">Información adicional</h5>
        <hr>
        <div class="media__gallery">
            <?php
                $gallery = get_field('galeria');
                foreach($gallery as $item): ?>
                    <div class="img_wrapper">
                        <img src="<?php echo $item['sizes']['large'] ?>" alt="">
                    </div>
            <?php    
                endforeach;
                // echo '<pre>';
                // var_dump($item);
                // echo '</pre>';
            ?>
        </div>
    </div>
</div>