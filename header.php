<!doctype html>
<html lang="en">

<head>
  <?php if (!defined('WPSEO_VERSION')) : ?>
    <?php if (is_category()) : ?>
      <title><?php echo $wp_query->get_queried_object()->cat_name; ?> | <?php echo get_bloginfo('name'); ?></title>
    <?php else : ?>
      <title><?php single_post_title(); ?> | <?php echo get_bloginfo('name'); ?></title>
    <?php endif; ?>

    <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php endif; ?>

  <!-- Metatags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="<?php echo get_post_custom_values('keywords')[0]; ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Belleza&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">

  <?php
  global $post;
  $post_slug = $post->post_name;
  ?>

  <style>
    <?php
    $criticalCSS = @include("assets/critical-css/" . $post_slug . ".css");

    echo $criticalCSS;
    ?>
  </style>

  <?php echo wp_head(); ?>
</head>

<?php if (is_home() || is_category()) : ?>
  <?php $post_slug = "blog"; ?>
<?php elseif (is_singular("post")) : ?>
  <?php $post_slug = "post"; ?>
<?php else : ?>
  <?php $post_slug = $post->post_name; ?>
<?php endif; ?>

<body <?php body_class(); ?>>
  <?php include(TEMPLATEPATH . '/includes/nav.php'); ?>
  <?php include(TEMPLATEPATH . '/includes/socials.php'); ?>

  <div class="global__wrapper" data-namespace="<?php echo $post_slug; ?>">