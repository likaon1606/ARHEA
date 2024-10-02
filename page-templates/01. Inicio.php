<?php
/*
  Template Name: 01. Inicio
*/
?>


<?php get_header(); ?>

<section class="home__content__principal">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="home__content col-12 col-md-6 col-lg-4">
          <h1 class="home__title">DESARROLLOS <br> INMOBILIARIOS <br> DE VALOR</h1>
          <p class="home__subtitle">Creamos espacios que eleven la manera de vivir de sus habitantes en colaboración con las <strong>firmas de arquitectura líderes a nivel mundial.</strong></p>
          <button class="home__contact-btn">CONTÁCTANOS</button>
          <?php echo siteImage("banner_principal", "home__banner__image", "Banner Principal"); ?>
        </div>
        
        <div class="home__submenu-link">
          <ul class="home__banner__links">
            <li><a href="#">RESIDENCIAL</a></li>
            <li class="pl__links"><a href="#">COMERCIAL</a></li>
            <li class="pl__links"><a href="#">EL CARIBE</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container">
    <div class="row d-flex align-items-end justify-content-center">

      <div class="left-section col-12 col-md-6">
        <p class="about-title">Acerca de Nosotros</p>
        <h1>ARHEA<br>PROPERTY<br>DEVELOPMENT</h1>
        <button class="button-about">Conoce más</button>
      </div>

      <div class="right-section col-12 col-md-6">
        <div class="line mt-3">
          <p>
            Con más de 25 años de experiencia en el sector inmobiliario y una profunda comprensión de la diversidad de cada proyecto, nuestra prioridad es conformar el equipo perfecto para cada desarrollo.
          </p>
          <a href="#" class="brochure-link">
            <button class="about__btn-brochure">
              Descarga nuestro brochure
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section__development">
  <div class="development__container">
    <?php echo siteImage("img-developmente", "development__image", "development fondo"); ?>
    <div class="development__contain">
      <div>
        <h1>ARHEA PROPERTY DEVELOPMENT<br>EN NÚMEROS</h1>
      </div>
      <div>
        <p>Nuestro compromiso es proporcionarte transparencia y confiabilidad en cada paso del camino</p>
      </div>
    </div>

      <div class="development-nums d-flex">
        <div>
          <h3 id="num1" class="animate-on-scroll col-12">+0</h3>
          <p>Proyectos creados</p>
        </div>
        <div>
          <h3 id="num2" class="animate-on-scroll col-12">+0</h3>
          <p>Desarrollo en construcción</p>
        </div>
        <div>
          <h3 id="num3" class="animate-on-scroll col-12">+0</h3>
          <p>Años de experiencia</p>
        </div>
        <div>
          <h3 id="num4" class="animate-on-scroll col-12">+0</h3>
          <p>Colaboradores</p>
        </div>
      </div>

      <div class="btn__development">
        <button>
          INVIERTE CON NOSOTROS
        </button>
      </div>
  </div>
</section>

<section class="inovation">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="inovation__txt">
          <h1>INNOVACIÓN EN CONSTRUCCIÓN</h1>
          <p>Conoce nuestra cartera de <strong>desarrollos inmobiliarios</strong> de tipo residencial, comercial y en el Caribe.</p>
          <button class="btn-inovation">VER MÁS PROYECTOS</button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 
<section id="carousel">
  <div class="container">
    <div class="row clasesdes">
    <div class="img__carousel">
        <div class="carousel__content">
          <h3>WOHA</h3>
          <p>PUERTO CANCÚN</p>
          <p class="p__carousel">Departamentos con eficiente diseño y funcionalidad en Puerto Cancún, desde 115 m².</p>
          <a class="btn__cardcarousel" href="#">
            <button>VER MÁS</button>
          </a>
      </div>
        <?php echo siteImage("woha", "slick__img", "en venta woha"); ?>
      </div>

      <div class="img__carousel">
        <div class="carousel__content">
          <h3>LOMAS ALTAS 247</h3>
          <p>CIUDAD DE MÉXICO</p>
          <p class="p__carousel">Departamentos de lujo desde 700 m², con amplio jardín privado y vistas a una hermosa cañada boscosa.</p>
          <a class="btn__cardcarousel" href="#">
            <button>VER MÁS</button>
          </a>
      </div>
        <?php echo siteImage("lomas", "slick__img", "en venta lomas"); ?>
      </div>

      <div class="img__carousel">
        <div class="carousel__content">
          <h3>CASA DEL PARQUE</h3>
          <p>CIUDAD DE MÉXICO</p>
          <p class="p__carousel">Proyecto de retiro de departamentos para adultos mayores con distintas opciones de residencias asistidas.</p>
          <a class="btn__cardcarousel" href="#">
            <button>VER MÁS</button>
          </a>
      </div>
        <?php echo siteImage("parque", "slick__img", "en venta casa del parque"); ?>
      </div>

      <div>
      <div class="carousel__content">
        <h3>KABEEK MARINA & CONDOS</h3>
        <p>CANCÚN</p>
        <p class="p__carousel">Departamentos con eficiente diseño y funcionalidad en Puerto Cancún, desde 115 m².</p>
        <a class="btn__cardcarousel" href="#">
          <button>VER MÁS</button>
        </a>
      </div>
        <?php echo siteImage("kabeek", "slick__img", "en venta kabeek"); ?>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="red__inmob">
  <h2>Una red inmobiliaria<br>con alcance global</h2>
  <p class="p__inmob">Establecemos alianzas estratégicas con los <strong>estudios de arquitectura de mayor prestigio</strong>, garantizando así<br>la excelencia en todos nuestros proyectos.</p>

  <div class="grid">
    <div class="grid__box">
      <p>HKS</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>GENSLER</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>EDSA</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>LEGORRETA + LEGORRETA</p>
      <p>+</p>
    </div>
    
    <div class="grid__box">
      <p>ARTIGAS ARQUITECTOS</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>SORDO MADALENO</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>ABAX ARQUITECTOS</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>ROTH ARCHITECTURE</p>
      <p>+</p>
    </div>

    <div class="grid__box">
      <p>SANZPONT ARQUITECTURA</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>SPRINGALL + MK</p>
      <p>+</p>
    </div>
    <div class="grid__box">
      <p>ARTCH</p>
      <p>+</p>
    </div>
  </div>
</section> -->


<?php get_footer(); ?>