<?php
/*
  Template Name: 03. Proyectos
*/
?>

<section class="projects__content">
  <?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
      <div class="banner__project-content">
        <h1 class="banner__project-title">CARTERA DE<br>PROYECTOS<br>INMOBILIARIOS</h1>
        <p class="banner__project-subtitle">En <strong>Arhea Property Development</strong> llevamos a cabo <strong>proyectos <br>residenciales, comerciales y mixtos</strong> a través de una efectiva <br>coordinación de equipos de trabajo multidisciplinarios.</p>
        <button class="projects__btn__info">MÁS INFORMACIÓN</button>

        <div class="banner__project-submenu">
          <ul class="banner__project-links">
            <li><a href="#">RESIDENCIAL</a></li>
            <li class="project__links"><a href="#">COMERCIAL</a></li>
            <li class="project__links"><a href="#">EL CARIBE</a></li>
          </ul>
        </div>       
      </div>
      </div>
    </div>
  </div>

  <?php echo siteImage("projects_img", "project__banner-img", "Banner Principal de la pestaña proyectos"); ?>   
</section>

<section class="projects__section">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="projects__section-title">
          <h1><span>Explora nuestra oferta</span><br>residencial, comercial y en <br>El Caribe</h1>
          <p>Cada espacio busca alcanzar la completa satisfacción de <br>nuestros socios, clientes, proveedores y asociados.
          </p>
        </div>

        <div class="projects__submenu">
          <a href="#" class="active__projects"><button>RESIDENCIAL</button></a>
          <a href="#"><button>COMERCIAL</button></a>
          <a href="#"><button>EL CARIBE</button></a>
        </div>

        <div class="projects__img__submenu" id="residencialSection">
          <!-- Imágenes de RESIDENCIAL -->
          <?php echo siteImage("ALTHAUS_SAN_ÁNGEL", "project__residencial-img", "ALTHAUS_SAN_ÁNGEL"); ?>
          <?php echo siteImage("ALTHAUS_PEDREGAL", "project__residencial-img", "ALTHAUS_PEDREGAL"); ?>
          <?php echo siteImage("NUBE_52", "project__residencial-img", "NUBE_52"); ?>
          <?php echo siteImage("ARUNA_RESIDENCIAL", "project__residencial-img", "ARUNA_RESIDENCIAL"); ?>
          <?php echo siteImage("LOMAS_ALTAS_247", "project__residencial-img", "LOMAS_ALTAS_247"); ?>
          <?php echo siteImage("LOMAS_ALTAS_253", "project__residencial-img", "LOMAS_ALTAS_253"); ?>
          <?php echo siteImage("TIRO_PICHON_60", "project__residencial-img", "TIRO_PICHON_60"); ?>
          <?php echo siteImage("HAMBURGO_14", "project__residencial-img", "HAMBURGO_14"); ?>
          <?php echo siteImage("CAÑADA_VISTA_HERMOSA", "project__residencial-img", "CAÑADA_VISTA_HERMOSA"); ?>
          <?php echo siteImage("DR_ATL_225", "project__residencial-img", "DR_ATL_225"); ?>
        </div>

        <div class="projects__img__submenu" id="comercialSection" style="display: none;">
          <!-- Imágenes de COMERCIAL -->
          <h1>Imágenes de COMERCIAL</h1>
        </div>

        <div class="projects__img__submenu" id="caribeSection" style="display: none;">
          <!-- Imágenes de EL CARIBE -->
          <h1>Imágenes de EL CARIBE</h1>
        </div>
        
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>