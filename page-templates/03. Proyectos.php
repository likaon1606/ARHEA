<?php
/*
  Template Name: 03. Proyectos
*/
?>

<?php get_header(); ?>

<!--** MODALS PROJECTS **-->
<?php include get_template_directory() . '/includes/modalProjects.php'; ?>

<section class="projects__content">
  <div class="container">
    <div class="row">
      <div class="col-12">

       <!-- Carrusel de Imágenes -->
       <div class="home__carousel projects__carousel">
          <?php echo siteImage("projects_banner__first", "projects__banner__image", "Banner Principal"); ?>
          <?php echo siteImage("projects_banner__second", "projects__banner__image", "Banner Secundario"); ?>
          <?php echo siteImage("projects_banner__tird", "projects__banner__image", "Banner Tercero"); ?>
        </div>

        <div class="banner__project-content col-12 col-md-6 col-lg-4">
          <h1 class="banner__project-title">CARTERA DE PROYECTOS INMOBILIARIOS</h1>
          <p class="banner__project-subtitle">En <strong>Arhea Property Development</strong> llevamos a cabo <strong>proyectos residenciales, comerciales y mixtos</strong> a través de una efectiva coordinación de equipos de trabajo multidisciplinarios.</p>
          <button class="projects__btn__info">MÁS INFORMACIÓN</button>

          <div class="banner__project-submenu">
            <ul class="banner__project-links">
            <li><button class="carousel__button active">RESIDENCIAL</button></li>
            <li class="pl__links__projects"><button class="carousel__button">COMERCIAL</button></li>
            <li class="pl__links__projects"><button class="carousel__button">EL CARIBE</button></li>
            </ul>
          </div>       
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projects__title_banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="projects__section-title">
          <h1><span>Explora nuestra oferta </span>residencial, comercial y en El Caribe</h1>
          <p>
            Cada espacio busca alcanzar la completa satisfacción de nuestros socios, clientes, proveedores y asociados.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projects__section">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="projects__submenu">
          <a href="#" id="residencialBtn" class="active__projects"><button>RESIDENCIAL</button></a>
          <a href="#" id="comercialBtn"><button>COMERCIAL</button></a>
          <a href="#" id="caribeBtn"><button>EL CARIBE</button></a>
        </div>

        <!-- Imágenes de RESIDENCIAL -->
        <div class="slider__rows-projects">
         <?php siteImage('flecha_iz.svg', 'left__arrow__projects'); ?>
          <?php siteImage('flecha_der.svg', 'right__arrow__projects'); ?>
        </div>
        <div class="projects__img__submenu" id="residencialSection" style="display: flex;">


          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="1">
            <?php echo siteImage("ALTHAUS_SAN_ÁNGEL", "project__residencial-img", "ALTHAUS_SAN_ÁNGEL"); ?>
            <div class="submenu-residencial-txt">
              <h2>ALTAHUS SAN ÁNGEL</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                SAN ÁNGEL CIUDAD DE MÉXICO
              </p>
              <p>Edificio de vivienda en renta con 26 niveles y 242 unidades desde 42 m².</p>
              <button  class="submenu-residencial-btn" data-target="1">Ver más</button>
            </div>
          </div>


          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="2">
            <?php echo siteImage("ALTHAUS_PEDREGAL", "project__residencial-img", "ALTHAUS_PEDREGAL"); ?>
            <div class="submenu-residencial-txt">
              <h2>ALTHAUS PEDREGAL</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Pedregal, Ciudad de México
              </p>
              <p>Edificio de vivienda en renta con 29 niveles y 361 unidades desde 42 m².</p>
              <button class="submenu-residencial-btn" data-target="2">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="3">
            <?php echo siteImage("NUBE_52", "project__residencial-img", "ALTHAUS_SAN_ÁNGEL"); ?>
            <div class="submenu-residencial-txt">
              <h2>NUVE 52</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                San Jerónimo, Ciudad de México
              </p>
              <p>Único complejo en San Jerónimo con 13 apartamentos de lujo desde 250 m².</p>
              <button class="submenu-residencial-btn" data-target="3">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="4">
            <?php echo siteImage("ARUNA_RESIDENCIAL", "project__residencial-img", "LOMAS_ALTAS_253"); ?>
            <div class="submenu-residencial-txt">
              <h2>ARUNA RESIDENCIAL</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Contadero, Ciudad de México
              </p>
              <p>10 lujosas casas con las mejores vistas a las montañas de Contadero de 450 m² 
              cada una.</p>
              <button class="submenu-residencial-btn" data-target="4">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="5">
            <?php echo siteImage("LOMAS_ALTAS_247", "project__residencial-img", "LOMAS_ALTAS_253"); ?>
            <div class="submenu-residencial-txt">
              <h2>LOMAS ALTAS 247</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Lomas de Chapultepec, Ciudad de México
              </p>
              <p>Residencial exclusivo en las Lomas con 3 departamentos de alto lujo desde 700 m².</p>
              <button class="submenu-residencial-btn" data-target="5">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="6">
            <?php echo siteImage("LOMAS_ALTAS_253", "project__residencial-img", "LOMAS_ALTAS_253"); ?>
            <div class="submenu-residencial-txt">
              <h2>LOMAS ALTAS 253</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Lomas de Chapultepec, Ciudad de México
              </p>
              <p>Tres grandes departamentos con acabados de alta gama desde 1300 m².</p>
              <button class="submenu-residencial-btn" data-target="6">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="7">
            <?php echo siteImage("TIRO_PICHON_60", "project__residencial-img", "TIRO_PICHON_60"); ?>
            <div class="submenu-residencial-txt">
              <h2>TIRO AL PICHÓN 60</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Lomas Bezares, Ciudad de México
              </p>
              <p>Dos casas de diseño vanguardista y acabados de primer nivel desde 1000 m².</p>
              <button class="submenu-residencial-btn" data-target="7">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="8">
            <?php echo siteImage("HAMBURGO_14", "project__residencial-img", "HAMBURGO_14"); ?>
            <div class="submenu-residencial-txt">
              <h2>HAMBURGO 14</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Reforma Juárez, Ciudad de México
              </p>
              <p>Conjunto de 36 departamentos con extraordinaria orientación y vistas desde
              90 m².</p>
              <button class="submenu-residencial-btn" data-target="8">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="9">
            <?php echo siteImage("CAÑADA_VISTA_HERMOSA", "project__residencial-img", "CAÑADA_VISTA_HERMOSA"); ?>
            <div class="submenu-residencial-txt">
              <h2>CAÑADA DE VISTA HERMOSA</h2>
              <p class="residencial__gps">
              <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
              Vista Hermosa, Ciudad de México
              </p>
              <p>...</p>
              <button class="submenu-residencial-btn" data-target="9">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-residencial col-12 col-md-6 col-lg-4" data-id="10">
            <?php echo siteImage("DR_ATL_225", "project__residencial-img", "DR_ATL_225"); ?>
            <div class="submenu-residencial-txt">
              <h2>DOCTOR ATL 225</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Sta Maria La Ribera, Ciudad de México
              </p>
              <p>...</p>
              <button class="submenu-residencial-btn" data-target="10">Ver más</button>
            </div>
          </div>
        </div>


        <!-- Imágenes de COMERCIAL -->

        <div class="projects__img__submenu" id="comercialSection" style="display: none;">

          <div class="__images__submenu-comercial col-12 col-md-6 col-lg-4" data-id="11">
            <?php echo siteImage("PASEO_MOLINO", "project__residencial-img", "PASEO_MOLINO"); ?>
            <div class="submenu-residencial-txt">
              <h2>PASEO EL MOLINO</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Toluca, México
              </p>
              <p>Proyecto de usos mixtos con departamentos desde 70 m², oficinas y centro comercial.</p>
              <button class="submenu-residencial-btn" data-target="11">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-comercial col-12 col-md-6 col-lg-4">
            <?php echo siteImage("DEL_PARQUE", "project__residencial-img", "DEL_PARQUE"); ?>
            <div class="submenu-residencial-txt" data-id="12">
              <h2>CASA DEL PARQUE</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Tlalpan, Ciudad de México
              </p>
              <p>Proyecto de retiro para adultos mayores al sur de la Ciudad de México con 49 departamentos.</p>
              <button class="submenu-residencial-btn" data-target="12">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-comercial col-12 col-md-6 col-lg-4">
            <?php echo siteImage("JUNIOR_CLUB", "project__residencial-img", "JUNIOR_CLUB"); ?>
            <div class="submenu-residencial-txt" data-id="13">
              <h2>JUNIOR CLUB</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Condesa, Ciudad de México
              </p>
              <p>Complejo de usos mixtos con 1,900 m² de área comercial y casi 8,000 m²de construcción.</p>
              <button class="submenu-residencial-btn" data-target="13">Ver más</button>
            </div>
          </div>
        </div>

        <!-- Imágenes de EL CARIBE -->

        <div class="projects__img__submenu" id="caribeSection" style="display: none;">
          
          <div class="__images__submenu-caribe col-12 col-md-6 col-lg-4">
            <?php echo siteImage("caribeSection_WOHA", "project__residencial-img", "caribeSection_WOHA"); ?>
            <div class="submenu-residencial-txt" data-id="14">
              <h2>WOHA</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Puerto Cancún, Cancún
              </p>
              <p>Residencial High-End de departamentos con diseño y funcionalidad eficientes desde 115 m².</p>
              <button class="submenu-residencial-btn" data-target="14">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-caribe col-12 col-md-6 col-lg-4">
            <?php echo siteImage("caribeSection_KABEEK", "project__residencial-img", "caribeSection_KABEEK"); ?>
            <div class="submenu-residencial-txt" data-id="15">
              <h2>KABEEK MARINA & CONDOS</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Lago Nichupte, Cancún
              </p>
              <p>Condos diseñados bajo un exclusivo concepto de vida náutica de alto lujo de 500 m² cada uno.</p>
              <button class="submenu-residencial-btn" data-target="15">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-caribe col-12 col-md-6 col-lg-4">
            <?php echo siteImage("caribeSection_KAB_RESIDENCIAL", "project__kab-img", "caribeSection_KAB_RESIDENCIAL"); ?>
            <div class="submenu-residencial-txt" data-id="16">
              <h2>KABEEK RESIDENCIAL – PUERTO CANCÚN</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Puerto Cancún, Cancún
              </p>
              <p>30 amplios apartamentos con diseño atemporal de 450 m² cada uno.</p>
              <button class="submenu-residencial-btn" data-target="16">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-caribe col-12 col-md-6 col-lg-4">
            <?php echo siteImage("caribeSection_PUNTA", "project__residencial-img", "caribeSection_PUNTA"); ?>
            <div class="submenu-residencial-txt" data-id="17">
              <h2>LA PUNTA</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Puerto Cancún, Cancún
              </p>
              <p>Residencial náutico con 13 casas con acabados de máxima calidad y extraordinarias vistas a Los Canales de Puerto Cancún.</p>
              <button class="submenu-residencial-btn" data-target="17">Ver más</button>
            </div>
          </div>

          <div class="__images__submenu-caribe col-12 col-md-6 col-lg-4">
            <?php echo siteImage("caribeSection_NYZUC", "project__residencial-img", "PASEO_MOLINO"); ?>
            <div class="submenu-residencial-txt" data-id="18">
              <h2>ALDEA NIZUC</h2>
              <p class="residencial__gps">
                <?php echo siteImage("location.svg", "project__location-img", "icono de GPS"); ?>
                Cancún
              </p>
              <p>Proyecto residencial donde la arquitectura y la madre naturaleza se unen para crear un lugar nunca antes visto.</p>
              <button class="submenu-residencial-btn" data-target="18">Ver más</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> 



<?php get_footer(); ?>