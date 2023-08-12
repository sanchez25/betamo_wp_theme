<?php get_header(); ?>

  <div class="not-found-block">
    <div class="main-content error">
      <section class="error-block">
        <img src="<?php echo get_template_directory_uri() ?>/images/error-page.jpg" alt="404 error">
        <p class="error-block-text">
          Oops, The page you are looking for cannot be found. It may have been removed, had its name changed, or is temporarily unavailable. 
          Casino Team is really sorry we couldn't provide you with what you were searching for, but we promise to try our best to help you.
        </p>
        <a href="#" class="error-block-btn">Home</a>
      </section>
    </div>
  </div>

<?php get_footer('slots'); ?>
