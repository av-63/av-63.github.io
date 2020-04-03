<?php
/*
Template Name: Страница работ
Template Post Type: post
*/
?>

    <?php get_header(); ?>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="text-center">
              <h1><?php the_title(); ?></h1>
              <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>