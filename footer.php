</div> 

<?php if (!is_page('contacto')): ?>
<section class="section__form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section__form-columns">
          <div class="form__left d-flex flex-column"  id="form__footer">
            <h2>BIENVENIDO A TU HOGAR IDEAL</h2>
            <p class="p__left">Escríbenos y en breve nos pondremos en contacto contigo.</p>

            <div class="form__info">
              <div class="info__item">
                <p class="info__item-title">UBICACIÓN</p>
                <p class="pipe"><?php echo siteImage("pipe_large", "pipe-large", "pipe largo para separar direcciones"); ?></p>
                <p class="info__item-txt">Paseo de Los Tamarindos 90, Torre 1 Piso 5,<br> Bosques de las Lomas,<br> 
                Ciudad de México, CDMX 05110</p>
              </div>
              <div class="info__item">
                <p class="info__item-title">TELÉFONO</p>
                <p class="pipe"><?php echo siteImage("pipe_small", "pipe-small", "pipe corto para separar direcciones"); ?></p>
                <p class="info__item-txt">55 2167 9575 / 77</p>
              </div>
              <div class="info__item">
                <p class="info__item-title">EMAIL</p>
                <p class="pipe"><?php echo siteImage("pipe_small", "pipe-small", "pipe corto para separar direcciones"); ?></p>
                <p class="info__item-txt">info@arhea.mx</p>
              </div>
            </div>
            
          </div>

          <div class="form__right">
            <form class="d-flex flex-column">
              <label for="name">Nombre*</label>
              <input type="text" id="name" name="name" required>
              <label for="email">Correo*</label>
              <input type="email" id="email" name="email" required>
              <label for="phone">Teléfono*</label>
              <input type="tel" id="phone" name="phone" required>

              <select name="form1">
                <option value="value1">¿Qué proyecto te interesa conocer?</option>
                <option class="option__select" value="value2">Woha</option>
                <option value="value3">Kabeek Marina & Condos</option>
                <option value="value4">Aldea Nizuc</option>
              </select>

              <label for="message">Mensaje (Opcional)</label>
              <textarea id="message" name="message"></textarea>
              <button class="btn__form" type="submit">ENVIAR</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<footer class="footer">
  <div class="footer__columns d-flex flex-wrap justify-content-between">
    <div class="footer__logo">
      <?php siteImage("arhea_footer.svg", "img-footer", "logo footer ARHEA"); ?>
      <p>Aviso de privacidad</p>
    </div>

    <div class="footer__column">
      <h3>ACERCA DE ARHEA</h3>
    </div>

    <div class="footer__column">
      <h3>PROYECTOS</h3>
      <ul>
        <li>Residencial</li>
        <li>Comercial</li>
        <li>Caribe</li>
      </ul>
    </div>

    <div class="footer__column">
      <h3>COLABORADORES</h3>
      <ul>
        <li>Roth Architecture</li>
        <li>Abax Arquitectos</li>
        <li>Legorreta + Legorreta</li>
        <li>Springall + MK</li>
      </ul>
    </div>
    
    <div class="footer__column __column-sordo">
      <ul>
        <li>Sordo Madaleno</li>
        <li>Artigas Arquitectos</li>
        <li>Sanzpont Arquitectura</li>
      </ul>
    </div>
  </div>
</footer>

<?php echo wp_footer(); ?>
</body>
</html>
