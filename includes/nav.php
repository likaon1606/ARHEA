<section class="container__menu">  
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="menu-overlay">
          <ul class="menu-list">
            <li><a href="<?php echo home_url(); ?>">INICIO</a></li>
            <li><a href="<?php echo home_url('/acerca-de'); ?>">ACERCA DE ARHEA</a></li>
            <li class="nav__submenu-projects">
              <a href="<?php echo home_url('/proyectos'); ?>">PROYECTOS</a>
              <ul class="nav__submenu__elements-projects">
                <a href="<?php echo home_url('/proyectos #buttons__projects'); ?>" id="links__page">
                  <li>Residencial</li>
                </a>
                <a href="<?php echo home_url('/proyectos #buttons__projects'); ?>" id="links__page">
                  <li>Comercial</li>
                </a>
                <a href="<?php echo home_url('/proyectos #buttons__projects'); ?>" id="links__page">
                  <li>Caribe</li>
                </a>
              </ul>
            </li>

            <li class="nav__submenu-colaborators">
              <a href="<?php echo home_url('/colaboradores'); ?>">COLABORADORES</a>
              <ul class="nav__submenu__elements-colaboratos">
                <a href="<?php echo home_url('/colaboradores #HKS'); ?>" id="links__page">
                  <li>HKS</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #GENSLER'); ?>" id="links__page">
                  <li>Gensler</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #EDSA'); ?>" id="links__page">
                  <li>Edsa</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Legorreta'); ?>" id="links__page">
                  <li>Legorreta + Legorreta</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Artigas'); ?>" id="links__page">
                  <li>Artigas Arquitectos</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Sordo'); ?>" id="links__page">
                  <li>Sordo Madaleno</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Abax'); ?>" id="links__page">
                  <li>Abax Arquitectos</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #roth'); ?>" id="links__page">
                  <li>Roth Architecture</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Sanzpont'); ?>" id="links__page">
                  <li>Sanzpont Arquitectura</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #Springall'); ?>" id="links__page">
                  <li>Springall + MK</li>
                </a>
                <a href="<?php echo home_url('/colaboradores #artch'); ?>" id="links__page">
                  <li>Artch</li>
                </a>
              </ul>
            </li>

            <li><a href="<?php echo home_url('/contacto'); ?>">CONTACTO</a></li>
          </ul>
        </div>

        <div class="landing__menu">
          <a href="<?php echo home_url(); ?>">
            <?php siteImage("logo_arhea.svg", "img-banner-left", "Banner-left"); ?> 
          </a>
          <?php siteImage("hamburguer.svg", "img-hamburguer", "Menú"); ?> 
          <?php siteImage("close.svg", "close__menu", "close menu"); ?>
        </div>

      </div>
    </div>
  </div>
</section>

      

            