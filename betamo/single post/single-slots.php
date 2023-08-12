<?php
/* Template Name: Post slots */
 /* Template Post Type: Slots */
?>


<?php get_header()?>

<div class="single-slot">
    <section class="single-slots-back">
        <img src="<?php echo get_field('img-back'); ?>" alt="<?php echo get_field('alt-back'); ?>">
    </section>
    <div class="single-slots-demo-back play">
        <div class="single-slots-demo-back-cont">
            <div class="single-slots-demo-back-image">
                <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                    <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                </a>
                <img src="<?php echo get_field('img-frame'); ?>" alt="<?php echo get_field('alt-back'); ?>">
            </div>
        </div>
        <div class="single-slots-demo-back-play" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/play.svg);"></div>
    </div>
    <div class="single-slots-demo-block">
        <div class="single-slots-demo-back-cont">
            <div class="single-slots-demo-back-iframe">
                <a href="/" class="single-slots-demo-back-title-icon" aria-label="Close">
                    <div class="close-demo-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/close.svg);"></div>
                </a>
                <div class="full-btn">
                    <div class="full-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/full-screen.svg);"></div>
                </div>
                <?php echo get_field('iframe');?>
            </div>
        </div>
    </div>
    <section class="main-text slot">
        <div class="main-text-block-content slot">
            <h1 class="single-slots-title"><?php the_title(); ?></h1>
            <?php echo the_content(); ?>
        </div>
    </section>
</div>

<div class="fixed-footer">
    <div class="fixed-footer-links">
        <div class="fixed-footer-links-left">
            <a href="#" class="fixed-footer-link-item">
                <div class="fixed-footer-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/popular.svg);"></div>
                <span>Most Popular</span>
                <div class="fixed-footer-down" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/down-slots.svg);"></div>
            </a>
            <a href="#" class="fixed-footer-link-item">
                <div class="fixed-footer-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/clock.svg);"></div>
                <span>Last Played</span>
                <div class="fixed-footer-down" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/down-slots.svg);"></div>
            </a>
            <a href="#" class="fixed-footer-link-item">
                <span>Responsible Gaming</span>
            </a>
            <div class="fixed-footer-input">
                <div class="fixed-footer-input-block">
                    <input class="search-block-slot" type="text" placeholder="Find your game">
                    <a href="#" class="search-block-slot-btn">
                        <div class="search-block-slot-btn-icon" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/search.svg);"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="fixed-footer-date">
            <span id="doc_time"></span>
        </div>
    </div>
</div>

<?php get_footer('slots')?>

