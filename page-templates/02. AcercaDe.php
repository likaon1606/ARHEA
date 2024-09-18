<?php
/*
  Template Name: 02. Acerca De
*/
?>

<section class="about__me">
  <?php get_header(); ?>

  <div class="about__content">
    <h1 class="about__title">ARHEA<br>PROPERTY<br>DEVELOPMENT</h1>
    <p class="about__subtitle">Somos una <strong> desarrolladora de proyectos inmobiliarios</strong><br> comprometidos a crear ambientes cálidos, acogedores y que <br> fomenten el bienestar de sus habitantes.</p>
    
    <div class="about__submenu-link">
      <button class="about__projects-btn">CONOCER PROYECTOS</button>
      <button class="about__info-btn">Más información</button>
    </div>
  </div>
  
  <?php echo siteImage("banner__about", "about__image", "Imagen de about Principal"); ?>
</section>

<section class="about__gray-section">
<div class="container">
    <div class="row">
      <div class="col-12">
        <div class="about__content-gray">
          <div class="about__gray-title">
            <h1>En <span>Arhea Property <br>Development</span> <br>entendemos <br>que un hogar <br>es más que <br>espacio físico</h1>
          </div>
          <div class="about__gray-description">
            <p>Un hogar es un santuario donde se crean  recuerdos, se fortalecen lazos familiares, se hacen realidad sueños y se transforman vidas. 
            </p>
            <p>Creemos que todos merecen habitar en un hogar que los inspire a crecer y prosperar, ya sea persiguiendo una pasión, compartiendo momentos con seres queridos o simplemente encontrando paz y tranquilidad en su propio espacio.
            </p>
            <p>NUESTRAS RESIDENCIAS ESTÁN DISEÑADAS PARA SACAR LO MEJOR DE LAS PERSONAS.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about__img-simple">
  <div class="container-fluid">
    <?php echo siteImage("img-simple__about", "about__image-simple", "Imagen de about simple sin textos"); ?>
  </div>
</section>

<section class="about__values">
  <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="about__values-content">
            <h1>¿QUÉ NOS HACE DIFERENTES?</h1>
            <p class="about__subtitle">En <strong>Arhea Property Development</strong> trabajamos todos los días para que encuentres el <br>hogar de tus sueños.
            <div class="about__mision-vision">
              <div class="about__mision">
                <h3>MISIÓN</h3>
                <p>Diseñar y construir <strong>ambientes acogedores y de calidad.</strong> Con atención meticulosa al detalle y pasión por el diseño, ofrecemos hogares funcionales y estéticamente inspiradores que reflejan los valores y aspiraciones de sus habitantes.
                </p>
              </div>
              <div class="about__vision">
                <h3>VISIÓN</h3>
                <p>Crear <strong>residencias que establezcan una conexión profunda con su entorno,</strong> donde cada hogar trasciende su función como lugar de residencia para reflejar los deseos, valores y aspiraciones de cada individuo.
                </p>
              </div>
            </div>
          </div>
          </p>
        </div>
      </div>
    </div>
</section>

<section class="about__values-image-half">
  <div class="about__image-half">
    <div class="about__black">
      <div class="__black-description">
        <h1>CORE VALUES</h1>
        <p>Desafiamos constantemente los límites del diseño para crear <br>hogares funcionales y estéticamente inspiradores.
        </p>
        <button class="__black-description-btn">VER PROYECTOS</button>
      </div>
      <div class="__black-description">
        <h2>ATENCIÓN AL DETALLE</h2>
        <h2 class="__black-separator">DISEÑO</h2>
        <h2>CALIDAD</h2>
      </div>
    </div>
    <div class="about__blue"></div>
    <?php echo siteImage("image__half", "about__image-in-half", "Imagen dividida a la mitad entre dos contenedores"); ?>
  </div>
</section>






<?php get_footer(); ?>