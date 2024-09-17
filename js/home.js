function homeFunctions() {
  homeIntro();
  sliderHome();
  effectMenu();
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






