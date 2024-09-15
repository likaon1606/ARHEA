function homeFunctions() {
  homeIntro();
  sliderHome();
}

function homeIntro() {
  //
}

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
