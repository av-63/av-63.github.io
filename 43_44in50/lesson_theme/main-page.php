<?php
/*
Template Name: Главная страница
*/
?>

    <?php get_header(); ?>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <?php 

        $image = get_field('avatar');

        if( !empty( $image ) ): ?>

            <!-- <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> -->

            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" style="margin: auto; height: 250px; width: 250px; object-fit: cover; border-radius: 50%;" />

        <?php endif; ?>

       <!-- <img class="img-fluid" src="<?php bloginfo('template_url');?>/img/profile.png" alt=""> -->

        <div class="intro-text">
          <span class="name"><?php bloginfo('title'); ?></span>  <!-- Start Bootstrap -->
          <hr class="star-light">
          <span class="skills"><?php bloginfo('description'); ?></span>  <!-- Web Developer - Graphic Artist - User Experience Designer -->
        </div>
      </div>
    </header>

    <?php get_footer(); ?>