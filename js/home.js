function homeFunctions() {
  effectMenu();
  sliderBannerHome();
  animatedNumsDevelopment();
  sliderHome();
  switchSection('residencialBtn', 'residencialSection');
  showModal();
  sliderProjects();
  modalsColaborators();
}

// ** effect menu *

function effectMenu() {
  // Select icons hamburguer/close
  const hamburguerIcon = document.querySelector('.img-hamburguer');
  const closeIcon = document.querySelector('.close__menu');
  const menuOverlay = document.querySelector('.menu-overlay');

  // Event click show/hide menu
  hamburguerIcon.addEventListener('click', function() {
    menuOverlay.classList.toggle('active');
    
    // show/hide icon hamburguer/close
    if (menuOverlay.classList.contains('active')) {
      hamburguerIcon.style.display = 'none';
      closeIcon.style.display = 'block'; // show icon close
    } else {
      hamburguerIcon.style.display = 'block';
      closeIcon.style.display = 'none'; // hide icons close
    }
  });

  // Event click to close with icon Close
  closeIcon.addEventListener('click', function() {
    menuOverlay.classList.remove('active');
    closeIcon.style.display = 'none'; // hide icon Close
    hamburguerIcon.style.display = 'block'; // Show icon hamburguer
  });

  window.addEventListener('scroll', function() {
    var menu = document.querySelector('.landing__menu');
    if (window.scrollY > 100) {
      menu.classList.add('sticky');
    } else {
      menu.classList.remove('sticky');
    }
  });
  
}

function sliderBannerHome() {
  $('.home__carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: false,
    dots: false,
    fade: true,
    speed: 1000,
  });

  // Actualizar la franja blanca en los botones del carrusel
  $('.home__carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $('.carousel__button').removeClass('active');
    $('.carousel__button').eq(nextSlide).addClass('active');
  });
}

$(document).ready(function(){
  sliderBannerHome();
});

function animatedNumsDevelopment() {
  const numsToAnimate = document.querySelectorAll('.animate-on-scroll');

  numsToAnimate.forEach((numElement) => {
    const spans = numElement.querySelectorAll('span');
    let currentIndex = 0;

    function animateNumber() {
      spans.forEach((span, index) => {
        span.style.transform = `translateY(${index * 100}%)`;
      });

      const interval = setInterval(() => {
        currentIndex++;
        if (currentIndex >= spans.length) {
          clearInterval(interval); 
        } else {
          spans.forEach((span, index) => {
            span.style.transform = `translateY(-${currentIndex * 100}%)`;
          });
        }
      }, 500); 
    }

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateNumber();
          observer.unobserve(entry.target); 
        }
      });
    });

    observer.observe(numElement);
  });
}

window.onload = animatedNumsDevelopment;

//** carousel middle home */
function sliderHome() {

  const prevArrow = document.querySelector(".arrow__left");
  const nextArrow = document.querySelector(".arrow__right");

  $('.carousel__home').slick({
    centerMode: true,
    dots: true,
    // autoplay: true,
    centerPadding: '240px',
    slidesToShow: 1,
    prevArrow: prevArrow,
    nextArrow: nextArrow,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '120px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 1
        }
      },
    ]
  });
}


// Inicializar el slider al cargar el documento
$(document).ready(function() {
  sliderHome();
});



// ** active section projects*

function switchSection(activeBtnId, activeSectionId) {
  
  const buttons = document.querySelectorAll('.projects__submenu a');
  const sections = document.querySelectorAll('.projects__img__submenu');

  // Quitar la clase 'active__projects' de todos los botones
  buttons.forEach(button => button.classList.remove('active__projects'));

  // Ocultar todas las secciones
  sections.forEach(section => section.style.display = 'none');

  // Mostrar la sección activa
  document.getElementById(activeSectionId).style.display = 'flex';

  // Añadir la clase 'active__projects' al botón correspondiente
  document.getElementById(activeBtnId).classList.add('active__projects');

  document.getElementById('residencialBtn').addEventListener('click', function(e) {
    e.preventDefault();
    switchSection('residencialBtn', 'residencialSection');
  });

  document.getElementById('comercialBtn').addEventListener('click', function(e) {
    e.preventDefault();
    switchSection('comercialBtn', 'comercialSection');
  });

  document.getElementById('caribeBtn').addEventListener('click', function(e) {
    e.preventDefault();
    switchSection('caribeBtn', 'caribeSection');
  });
  
}


//** SLIDER SECTION MODAL PROJECTS */

function sliderProjects() {
  $('.slider-projects').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
}


// ** show MODAL PROJECTS AND COLABORATORS**

function showModal() {
  // Seleccionamos los botones de ambos tipos
  const buttonsResidencial = document.querySelectorAll('.submenu-residencial-btn');
  const buttonsColaborators = document.querySelectorAll('.logos__colaboratos-btn');
  
  // Seleccionamos los botones de cerrar para ambos tipos de modales
  const closeButtonsResidencial = document.querySelectorAll('.close-modal');
  const closeButtonsColaborators = document.querySelectorAll('.close-modal-colaborators');

  // Función para abrir modal
  function openModal(modalClass, id) {
    const modal = document.querySelector(`.${modalClass}[data-id="${id}"]`);
    if (modal) {
      modal.classList.add('is-visible'); // Mostrar modal usando clases
    }
  }

  // Función para cerrar modal
  function closeModal(modal) {
    if (modal) {
      modal.classList.remove('is-visible'); // Ocultar modal quitando la clase
    }
  }

  // Asociar evento de click a los botones de "residencial"
  buttonsResidencial.forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');
      console.log(`Abriendo modal de residencial con ID: ${targetId}`);
      openModal('modal-residencial', targetId);
    });
  });

  // Asociar evento de click a los botones de "colaborators"
  buttonsColaborators.forEach(button => {
    button.addEventListener('click', function () {
      const targetId = this.getAttribute('data-target');
      console.log(`Abriendo modal de colaborators con ID: ${targetId}`);
      openModal('modal__colaborators', targetId);
    });
  });

  // Asociar evento de cerrar para modales de "residencial"
  closeButtonsResidencial.forEach(button => {
    button.addEventListener('click', function () {
      const modal = this.closest('.modal-residencial');
      if (modal) {
        closeModal(modal);
      }
    });
  });

  // Asociar evento de cerrar para modales de "colaborators"
  closeButtonsColaborators.forEach(button => {
    button.addEventListener('click', function () {
      const modal = this.closest('.modal__colaborators');
      if (modal) {
        closeModal(modal);
      }
    });
  });
}



//** */ SLIDER MODALS COLABORATORS

function modalsColaborators() {
$(document).ready(function(){
  $('.modal__colaborators-slider-dwon').slick({
    dots: false,
    arrows: true,
    prevArrow: false,  // Ocultar la flecha izquierda
    nextArrow: '<button type="button" class="slick-next-icon"><i class="fa-solid fa-arrow-right"></i></button>',  
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});
}






