<?php
/*
  Template Name: 05. Contacto
*/
?>



<?php get_header(); ?>
<section class="contact__banner">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo siteImage("Contacto__banner", "contact__img-principal", "Fondo de la pestaña contacto"); ?>
      </div>
    </div>
  </div>
</section>

<section class="form__contacto__final">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section__form-columns-final">
          <div class="form__left-final d-flex flex-column">
            <div class="__final-txt">
              <h2>
                BIENVENIDO A TU HOGAR IDEAL
              </h2>
              <p>
                Escríbenos y en breve nos pondremos en contacto contigo.
              </p>
            </div>

            <div class="form__right-final">
              <div class="form__container">
                <div>
                  <label for="name">Nombre*</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div>
                  <label for="phone">Teléfono*</label>
                  <input type="tel" id="email" name="email" required>
                </div>
                <div>
                  <label for="email">Correo*</label>
                  <input type="email" id="phone" name="phone" required>
                </div>
                <div>
                  <!-- <label for="project"> dsadsadsa</label> -->
                  <select id="project" name="project">
                    <option value="" disabled selected hidden>¿Qué proyecto te interesa conocer?</option>
                    <option class="option__select" value="value1">Woha</option>
                    <option value="value2">Kabeek Marina & Condos</option>
                    <option value="value3">Aldea Nizuc</option>
                  </select>
                </div>
                <div>
                  <label for="message">Mensaje (Opcional)</label>
                  <textarea id="message" name="message"></textarea>
                </div>
              </div>
              <button class="btn__form-final" type="submit">ENVIAR</button>
              <div class="form__info-final">
                <div class="info__item-final">
                  <p class="info__item-title-final">UBICACIÓN</p>
                  <p class="pipe-final">
                    <?php echo siteImage("pipe_large", "pipe-large-final", "pipe largo para separar direcciones"); ?>
                  </p>
                  <p class="info__item-txt-final">
                    Paseo de Los Tamarindos 90, Torre 1 Piso 5,<br>
                    Bosques de las Lomas,<br>
                    Ciudad de México, CDMX 05110
                  </p>
                </div>
  
                <div class="container__info__item-final">
                  <div class="info__item-final">
                    <p class="info__item-title-final">TELÉFONO</p>
                    <p class="pipe-final">
                      <?php echo siteImage("pipe_small", "pipe-small-final", "pipe corto para separar direcciones"); ?>
                    </p>
                    <p class="info__item-txt-final">55 2167 9575 / 77</p>
                  </div>
                  <div class="info__item-final">
                    <p class="info__item-title-final">EMAIL</p>
                    <p class="pipe-final">
                      <?php echo siteImage("pipe_small", "pipe-small-final", "pipe corto para separar direcciones"); ?>
                    </p>
                    <p class="info__item-txt-final">info@arhea.mx</p>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?> 