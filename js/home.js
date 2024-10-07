function homeFunctions() {
  effectMenu();
  sliderHome();
  switchSection('residencialBtn', 'residencialSection');
  sliderProjects();
  showModal();
  modalsColaborators()
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

//** carousel */
function sliderHome() {
  $('.carousel__home').slick({
    centerMode: true,
    centerPadding: '250px',
    slidesToShow: 1,
    prevArrow: '<button type="button" class="slick-prev__home"><p>←</p></button>',
    nextArrow: '<button type="button" class="slick-next__home"><p>→</p></button>',
    responsive: [
      {
        breakpoint: 769,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '150px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 1
        }
      }
    ]
  });
}

function sliderProjects() {
  $('.slider-projects').slick({
    dots: true,
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
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
}

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
}

window.onload = function() {
  // Activar Residencial al cargar la página
  switchSection('residencialBtn', 'residencialSection');

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
};



// ** show MODAL PROJECTS AND COLABORATORS**

// document.addEventListener('DOMContentLoaded', showModal);

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
      modal.style.display = 'flex'; // Mostrar modal
    }
  }

  // Función para cerrar modal
  function closeModal(modal) {
    if (modal) {
      modal.style.display = 'none'; // Ocultar modal
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
document.addEventListener('DOMContentLoaded', modalsColaborators);

function modalsColaborators() {
$(document).ready(function(){
  $('.modal__colaborators-slider-dwon').slick({
    dots: false,
    arrows: true,
    prevArrow: false,  // Ocultar la flecha izquierda
    nextArrow: '<button type="button" class="slick-next-icon"><i class="fa-solid fa-arrow-right"></i></button>',  // Usamos el icono de Font Awesome
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