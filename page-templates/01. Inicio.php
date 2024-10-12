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
        
        <!-- Carrusel de Imágenes -->
        <div class="home__carousel">
          <?php echo siteImage("banner_principal", "home__banner__image", "Banner Principal"); ?>
          <?php echo siteImage("banner__principal_second", "home__banner__image", "Banner Secundario"); ?>
          <?php echo siteImage("banner__principal_three", "home__banner__image", "Banner Tercero"); ?>
        </div>

        <div class="home__content col-12 col-md-6 col-lg-4">
          <h1 class="home__title">DESARROLLOS <br> INMOBILIARIOS <br> DE VALOR</h1>
          <p class="home__subtitle">Creamos espacios que eleven la manera de vivir de sus habitantes en colaboración con las <strong>firmas de arquitectura líderes a nivel mundial.</strong></p>
          <button class="home__contact-btn">CONTÁCTANOS</button>
        </div>

        <!-- Submenú -->
        <div class="home__submenu-link">
          <ul class="home__banner__links">
            <li><button class="carousel__button active">RESIDENCIAL</button></li>
            <li class="pl__links"><button class="carousel__button">COMERCIAL</button></li>
            <li class="pl__links"><button class="carousel__button">EL CARIBE</button></li>
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
        <button class="button-about">CONOCE MÁS</button>
      </div>

      <div class="right-section col-12 col-md-6">
        <div class="line">
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
        <p id="num1" class="animate-on-scroll col-12">
          <span>+0</span>
          <span>+5</span>
          <span>+10</span>
          <span>+15</span>
          <span>+20</span>
          <span>+25</span>
        </p>
        <p>Proyectos creados</p>
      </div>
      <div>
        <p id="num2" class="animate-on-scroll col-12">
          <span>+0</span>
          <span>+1</span>
          <span>+2</span>
          <span>+3</span>
        </p>
        <p>Desarrollo en construcción</p>
      </div>
      <div>
        <p id="num3" class="animate-on-scroll col-12">
          <span>+0</span>
          <span>+5</span>
          <span>+10</span>
          <span>+15</span>
          <span>+20</span>
          <span>+25</span>
        </p>
        <p>Años de experiencia</p>
      </div>
      <div>
        <p id="num4" class="animate-on-scroll col-12">
          <span>+0</span>
          <span>+5</span>
          <span>+10</span>
          <span>+15</span>
          <span>+20</span>
          <span>+25</span>
        </p>
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


<section id="carousel">
  <div class="container">
    <div class="row carousel__home">
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

      <div class="img__carousel">
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
    <div class="slider__rows">
      <?php siteImage('boton-izq.svg', 'arrow__left'); ?>
      <?php siteImage('boton-der.svg', 'arrow__right'); ?>
    </div>
    </div>
  </div>
</div>
</section>


<section class="red__inmob">
  <h2>Una red inmobiliaria con alcance global</h2>
  <p class="p__inmob">Establecemos alianzas estratégicas con los <strong>estudios de arquitectura de mayor prestigio</strong>, garantizando así la excelencia en todos nuestros proyectos.</p>

  <div class="grid">
    <div class="grid__box">
      <p>HKS</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>GENSLER</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>EDSA</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>LEGORRETA + LEGORRETA</p>
      <p class="p__grid">+</p>
    </div>
    
    <div class="grid__box">
      <p>ARTIGAS ARQUITECTOS</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>SORDO MADALENO</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>ABAX ARQUITECTOS</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>ROTH ARCHITECTURE</p>
      <p class="p__grid">+</p>
    </div>

    <div class="grid__box">
      <p>SANZPONT ARQUITECTURA</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>SPRINGALL class="p__grid" + MK</p>
      <p class="p__grid">+</p>
    </div>
    <div class="grid__box">
      <p>ARTCH</p>
      <p class="p__grid">+</p>
    </div>
  </div>
</section>


<?php get_footer(); ?>