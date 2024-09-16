<?php
/*
  Template Name: 01. Inicio
*/
?>

<?php get_header(); ?>

<div class="init">
  
<section class="landing__content">
  <?php echo siteImage("banner_principal", "banner__image", "Banner Principal"); ?>
  <div class="landing__menu">
    <?php siteImage("banner-left","img-banner-left","Banner-left");?> 
    <?php siteImage("hamburguer","img-hamburguer","Menú");?> 
  </div>

  <div class="banner__content">
    <div>
    <h1 class="banner__title">DESARROLLOS <br> INMOBILIARIOS <br> DE VALOR</h1>
    <p class="banner__subtitle">Creamos espacios que eleven la manera de vivir de sus <br> habitantes en colaboración con las <strong>firmas de arquitectura <br> líderes a nivel mundial.</strong></p>

    <button class="contact-btn">CONTÁCTANOS</button>

      <div class="submenu-link">
        <ul class="banner__links">
          <li><a href="#">RESIDENCIAL</a></li>
          <li class="pl__links"><a href="#">COMERCIAL</a></li>
          <li class="pl__links"><a href="#">EL CARIBE</a></li>
        </ul>
      </div>
    </div>

    <div class="banner__social-icons">
      <div><a href="#"><?php siteImage("whatsapp","","WhatsApp");?></a></div>
      <div><a href="#"><?php siteImage("facebook","","Facebook");?></a></div>
      <div><a href="#"><?php siteImage("instagram","","Instagram");?></a></div>  
    </div>
  </div>
</section>


<section class="about">
    <div class="about-content">
      <p class="about-title">Acerca de Nosotros</p>
      <div class="left-section">
            <h1>ARHEA<br>PROPERTY<br>DEVELOPMENT</h1>
            <p>
                Con más de 25 años de experiencia en el sector inmobiliario y una profunda comprensión de la diversidad de cada proyecto, 
                nuestra prioridad es conformar el equipo perfecto para cada desarrollo.
            </p>
          </div>
          <div class="right-section">
            <button href="#" class="button-about">Conoce más</button>
            <div class="line">
              <a href="#" class="brochure-link">Descarga nuestro brochure</a>
              <hr>
            </div>
        </div>
    </div>
</section>

<section class="section__development">
  <?php echo siteImage("img-developmente", "development__image", "development fondo"); ?>

  <div class="development__container">
    <div class="development__contain">
      <div>
        <h1>ARHEA PROPERTY DEVELOPMENT<br>EN NÚMEROS</h1>
      </div>
      <div>
        <p>Nuestro compromiso es proporcionarte transparencia y confiabilidad en cada paso del camino</p>
      </div>
    </div>

      <div class="development-nums">
        <div>
          <h3 id="num1" class="animate-on-scroll">+0</h3>
          <p>Proyectos creados</p>
        </div>
        <div>
          <h3 id="num2" class="animate-on-scroll">+0</h3>
          <p>Desarrollo en construcción</p>
        </div>
        <div>
          <h3 id="num3" class="animate-on-scroll">+0</h3>
          <p>Años de experiencia</p>
        </div>
        <div>
          <h3 id="num4" class="animate-on-scroll">+0</h3>
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
  <h1>INNOVACIÓN EN CONSTRUCCIÓN</h1>
  <p>Conoce nuestra cartera de <strong>desarrollos inmobiliarios</strong> de tipo residencial, comercial y en el Caribe.</p>
  <button class="btn-inovation">VER MÁS PROYECTOS</button>
</section>

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
</section>





<section class="section__form">
  <div class="form__left">
    <h2>BIENVENIDO A TU<br>HOGAR IDEAL</h2>
    <p class="p__left">Escríbenos y en breve nos pondremos en contacto contigo.</p>
    
    <div class="form__info">
      <div class="info__item">
        <p>UBICACIÓN</p>
        <p id="pipe__form1">|</p>
        <p id="p__left">Paseo de Los Tamarindos 90, Torre 1 Piso 5,<br>Bosques de las Lomas,<br>
        Ciudad de México, CDMX 05110</p>
      </div>
      
      <div class="info__item">
        <p>TELÉFONO</p>
        <p id="pipe__form2">|</p>
        <p id="p__left">55 2167 9575 / 77</p>
      </div>

      <div class="info__item">
        <p>EMAIL</p>
        <p id="pipe__form3">|</p>
        <p id="p__left">info@arhea.mx</p>
      </div>
    </div>
  </div>

  <div class="form__right">
    <form>
      <label for="name">Nombre*</label>
      <input type="text" id="name" name="name" required>

      <label for="email">Correo*</label>
      <input type="email" id="email" name="email" required>

      <label for="phone">Teléfono*</label>
      <input type="tel" id="phone" name="phone" required>

      <label for="project">¿Qué proyecto te interesa conocer?</label>
      <select id="project" name="project">
        <option value="value1">Woha</option>
        <option value="value2">Kabeek Marina & Condos</option>
        <option value="value3">Aldea Nizuc</option>
      </select>

      <label for="message">Mensaje (Opcional)</label>
      <textarea id="message" name="message"></textarea>
      
      <button class="btn__form" type="submit">ENVIAR</button>
    </form>
  </div>
</section>

</div>


<?php get_footer(); ?>