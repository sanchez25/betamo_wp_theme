<?php
/*Template Name: Slots*/
?>

<?php get_header()?>

  <div class="main-content page">
    <section class="games-block">
      <div class="games-title">
        <h1 class="games-title-h1 page"><?php the_title(); ?></h1>
      </div>
      <?php
        if ($items = get_posts(array('numberposts' => 100, 'post_type' => 'Slots'))) {
          echo '<div class="games-block-list">';
            foreach($items as $item) {
              $drop = get_field('drop', $item->ID);
              $new = get_field('new', $item->ID);
              $hot = get_field('hot', $item->ID);
              $exclusive = get_field('exclusive', $item->ID);
              $provider = get_field('provider', $item->ID);
              $live = get_field('live', $item->ID);

              echo '<div class="game-card">';
                echo '<div class="game-card-block">';
                  echo get_the_post_thumbnail($item->ID);
                echo '</div>';
                echo '<div class="game-card-back">';
                  echo '<div class="game-card-back-buttons">';
                    echo '<a href="#" class="game-card-play-link">Play now</a>';
                    echo '<a href="'.get_permalink($item->ID).'" class="game-card-play-demo">Demo</a>';
                  echo '</div>';
                  if($provider) {
                    echo '<div class="game-card-back-provider">';
                      echo '<div class="game-card-back-provider-img" style="background-image: url('.$provider.');"></div>';
                    echo '</div>';
                  }
                echo '</div>';
                echo '<div class="game-card-labels">';
                  if($new) {
                    echo '<div class="game-card-label new">'.$new.'</div>';
                  }
                  if($hot) {
                    echo '<div class="game-card-label hot">'.$hot.'</div>';
                  }
                  if($exclusive) {
                    echo '<div class="game-card-label ex">'.$exclusive.'</div>';
                  }
                echo '</div>';
                echo '<div class="game-card-bottom">';
                  echo '<span class="game-card-bottom-title">'.$item->post_title.'</span>';
                  if($live) {
                    echo '<div class="game-card-bottom-live">'.$live.'</div>';
                  }
                echo '</div>';
                if($drop) {
                  echo '<div class="game-card-drops" style="background-image: url('.$drop.');"></div>';
                }
              echo '</div>';
            }
          echo '</div>';
        }
      ?>
    </section>
    <section class="main-text">
      <div class="main-text-block-content">
        <?php
          echo the_content(); 
        ?>
      </div>
    </section>
  </div>

<?php get_footer()?>