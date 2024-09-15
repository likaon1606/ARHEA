<?php
/*
  Template Name: 00. Política de privacidad
*/
?>

<?php get_header(); ?>

<section class="privacy-policy__wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="privacy-policy__title">
          <?php the_title(); ?>
        </h1>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-xxl-6 col-xl-8 col-10">
        <div class="privacy-policy__content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>