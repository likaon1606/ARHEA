</div>

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

<footer class="footer">
  <div class="footer__container">
    <div class="footer__logo">
      <?php siteImage("banner-left", "img-footer", "logo footer ARHEA"); ?>
      <div class="footer__privacy">
      <p>Aviso de privacidad</p>
  </div>
    </div>

    <div class="footer__columns">
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

      <div class="footer__column">
        <ul>
          <li>Sordo Madaleno</li>
          <li>Artigas Arquitectos</li>
          <li>Sanzpont Arquitectura</li>
        </ul>
      </div>
    </div>

  </div>
</footer>


<?php echo wp_footer(); ?>
</body>

</html>