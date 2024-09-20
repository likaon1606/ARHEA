<div class="container__menu">  
  <div class="menu-overlay">
    <ul class="menu-list">
      <li><a href="<?php echo home_url(); ?>">INICIO</a></li>
      <li><a href="<?php echo home_url('/acerca-de'); ?>">ACERCA DE ARHEA</a></li>
      <li><a href="<?php echo home_url('/proyectos'); ?>">PROYECTOS</a></li>
      <li><a href="<?php echo home_url('/colaboradores'); ?>">COLABORADORES</a></li>
      <li><a href="<?php echo home_url('/contacto'); ?>">CONTACTO</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="row">
      <div class="landing__menu">
        <?php siteImage("banner-left", "img-banner-left", "Banner-left"); ?> 
        <?php siteImage("hamburguer", "img-hamburguer", "Menú"); ?> 
        <?php siteImage("close", "close__menu", "close menu"); ?>
      </div>
    </div>
  </div>
</div>