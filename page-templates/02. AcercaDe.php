<?php
/*
  Template Name: 02. Acerca De
*/
?>

<section class="about__me">
  <?php get_header(); ?>

  <div class="about__content">
        <h1 class="about__title">DESARROLLOS <br> INMOBILIARIOS <br> DE VALOR</h1>
        <p class="about__subtitle">Creamos espacios que eleven la manera de vivir de sus <br> habitantes en colaboración con las <strong>firmas de arquitectura <br> líderes a nivel mundial.</strong></p>
        <button class="about__contact-btn">CONTÁCTANOS</button>

        <div class="about__submenu-link">
          <ul class="about__links">
            <li><a href="#">RESIDENCIAL</a></li>
            <li class="about__links"><a href="#">COMERCIAL</a></li>
            <li class="about__links"><a href="#">EL CARIBE</a></li>
          </ul>
        </div>
        
      </div>
  
  <?php echo siteImage("banner_principal", "about__image", "Imagen de about Principal"); ?>
</section>

<?php get_footer(); ?>