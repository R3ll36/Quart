<?php
/*Template Name: Homepage */
?>

<div class="hero swiper-container">
    <div class="swiper-wrapper">
        <?php if( have_rows('slider') ): while ( have_rows('slider') ) : the_row(); ?>
            <div class="swiper-slide">
                <?php $image = get_sub_field('image'); if( $image ) { echo wp_get_attachment_image( $image, 'large' ); } ?>
                <div class="hero__info">
                    <div class="hero__text-top"><?php the_sub_field('text_top') ?></div>
                    <h2 class="hero__title"><?php the_sub_field('title') ?></h2>
                    <p class="hero__text"><?php the_sub_field('info') ?></p>
                </div>
            </div>
        <?php  endwhile; endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<?php get_footer(); ?>