<?php
/*
Template Name: Портфолио
*/
?>

    <?php get_header(); ?>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Portfolio</h2>
        <hr class="star-primary">
        <div class="row">

          <?php 
          // параметры по умолчанию
          $args = array(
            'numberposts' => 6,
            // 'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            // 'include'     => array(),
            // 'exclude'     => array(),
            // 'meta_key'    => '',
            // 'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          );

          $posts = get_posts( $args );

          foreach( $posts as $post ){ setup_postdata($post);
            ?>
            <div class="col-sm-4 portfolio-item">
              <a class="portfolio-link" href="<?php the_permalink(); ?>">
                <div class="caption">
                  <div class="caption-content">
                    <p><?php the_title(); ?><br><?php the_excerpt(); ?></p>
                  </div>
                </div>
                <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="" style="height: 300px; object-fit: cover;">
              </a>
            </div>
            <?php 
          }

          wp_reset_postdata(); // сброс
           ?>

        </div>
      </div>
    </section>

    <?php get_footer(); ?>