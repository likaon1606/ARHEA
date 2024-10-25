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
                <li>Residencial</li>
                <li>Comercial</li>
                <li>Caribe</li>
              </ul>
            </li>

            <li class="nav__submenu-colaborators">
              <a href="<?php echo home_url('/colaboradores'); ?>">COLABORADORES</a>
              <ul class="nav__submenu__elements-colaboratos">
                <li>HKS</li>
                <li>Gensler</li>
                <li>Edsa</li>
                <li>Legorreta + Legorreta</li>
                <li>Artigas Arquitectos</li>
                <li>Sordo Madaleno</li>
                <li>Abax Arquitectos</li>
                <li>Roth Architecture</li>
                <li>Sanzpont Arquitectura</li>
                <li>Springall + MK</li>
                <li>Artch</li>
              </ul>
            </li>

            <li><a href="<?php echo home_url('/contacto'); ?>">CONTACTO</a></li>
          </ul>
        </div>

        <div class="landing__menu">
          <?php siteImage("logo_le", "img-banner-left", "Banner-left"); ?> 
          <?php siteImage("hamburguer", "img-hamburguer", "Menú"); ?> 
          <?php siteImage("close", "close__menu", "close menu"); ?>
        </div>

      </div>
    </div>
  </div>
</section>

      

            