function homeFunctions() {
  homeIntro();
  sliderHome();
  effectMenu();
  setActiveButton();
}

function homeIntro() {
  //
}

//** carousel */
function sliderHome() {
  $('.clasesdes').slick({
    centerMode: true,
    centerPadding: '250px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '80px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '60px',
          slidesToShow: 1
        }
      }
    ]
  });
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

// Función que se ejecuta al cargar la página
window.onload = function() {
  // Activar Residencial al cargar la página
  switchSection('residencialBtn', 'residencialSection');

  // Añadir eventos de clic para cambiar de sección
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
