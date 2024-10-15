var currentNamespace,$=jQuery;function homeFunctions(){effectMenu(),sliderBannerHome(),animatedNumsDevelopment(),sliderHome(),switchSection("residencialBtn","residencialSection"),showModalProjects(),sliderProjects(),sliderModalsColaborators(),showModalColaborators(),arrowsProjects()}function effectMenu(){const e=document.querySelector(".img-hamburguer"),t=document.querySelector(".close__menu"),o=document.querySelector(".menu-overlay");e.addEventListener("click",(function(){o.classList.toggle("active"),o.classList.contains("active")?(e.style.display="none",t.style.display="block"):(e.style.display="block",t.style.display="none")})),t.addEventListener("click",(function(){o.classList.remove("active"),t.style.display="none",e.style.display="block"})),window.addEventListener("scroll",(function(){var e=document.querySelector(".landing__menu");window.scrollY>100?e.classList.add("sticky"):e.classList.remove("sticky")}))}function sliderBannerHome(){$(".home__carousel").slick({slidesToShow:1,slidesToScroll:1,autoplay:!0,autoplaySpeed:3e3,arrows:!1,dots:!1,fade:!0,speed:1e3}),$(".home__carousel").on("beforeChange",(function(e,t,o,s){$(".carousel__button").removeClass("active"),$(".carousel__button").eq(s).addClass("active")}))}function animatedNumsDevelopment(){document.querySelectorAll(".animate-on-scroll").forEach((e=>{const t=e.querySelectorAll("span");let o=0;const s=new IntersectionObserver((e=>{e.forEach((e=>{e.isIntersecting&&(!function(){t.forEach(((e,t)=>{e.style.transform=`translateY(${100*t}%)`}));const e=setInterval((()=>{o++,o>=t.length?clearInterval(e):t.forEach(((e,t)=>{e.style.transform=`translateY(-${100*o}%)`}))}),500)}(),s.unobserve(e.target))}))}));s.observe(e)}))}function sliderHome(){const e=document.querySelector(".arrow__left"),t=document.querySelector(".arrow__right");$(".carousel__home").slick({centerMode:!0,dots:!0,autoplay:!0,centerPadding:"240px",//! cambios
slidesToShow:1,prevArrow:e,nextArrow:t,responsive:[{breakpoint:769,settings:{arrows:!0,centerMode:!0,centerPadding:"120px",slidesToShow:1}},{breakpoint:480,settings:{arrows:!1,centerMode:!0,centerPadding:"30px",slidesToShow:1}}]})}function switchSection(e,t){const o=document.querySelectorAll(".projects__submenu a"),s=document.querySelectorAll(".projects__img__submenu");o.forEach((e=>e.classList.remove("active__projects"))),s.forEach((e=>e.style.display="none")),document.getElementById(t).style.display="flex",document.getElementById(e).classList.add("active__projects"),document.getElementById("residencialBtn").addEventListener("click",(function(e){e.preventDefault(),switchSection("residencialBtn","residencialSection")})),document.getElementById("comercialBtn").addEventListener("click",(function(e){e.preventDefault(),switchSection("comercialBtn","comercialSection")})),document.getElementById("caribeBtn").addEventListener("click",(function(e){e.preventDefault(),switchSection("caribeBtn","caribeSection")}))}function sliderProjects(){$(".slider-projects").slick({dots:!1,infinite:!0,speed:300,slidesToShow:1,slidesToScroll:1,prevArrow:document.querySelector(".slider__rows-projects .left__arrow__projects"),nextArrow:document.querySelector(".slider__rows-projects .right__arrow__projects"),responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1,infinite:!0,dots:!0}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]});const e=document.querySelector(".slider__rows-projects .left__arrow__projects"),t=document.querySelector(".slider__rows-projects .right__arrow__projects");e&&e.addEventListener("click",(function(){$(".slider-projects").slick("slickPrev")})),t&&t.addEventListener("click",(function(){$(".slider-projects").slick("slickNext")}))}function showModalProjects(){const e=document.querySelectorAll(".submenu-residencial-btn"),t=document.querySelectorAll(".close-modal-projects");e.forEach((e=>{e.addEventListener("click",(function(){const e=this.getAttribute("data-target");console.log(`Abriendo modal de residencial con ID: ${e}`),function(e,t){const o=document.querySelector(`.${e}[data-id="${t}"]`);if(o){o.classList.add("is-visible");const e=document.querySelector(".slider__rows-projects");e&&(e.style.display="flex"),$(o).data("slick-initialized")||sliderProjects()}}("modal-residencial",e)}))})),t.forEach((e=>{e.addEventListener("click",(function(){const e=this.closest(".modal-residencial");e&&function(e){if(e){e.classList.remove("is-visible");const t=document.querySelector(".slider__rows-projects");t&&(t.style.display="none")}}(e)}))}))}function sliderModalsColaborators(){$(document).ready((function(){$(".modal__colaborators-slider-dwon").slick({dots:!1,arrows:!0,prevArrow:!1,nextArrow:'<button type="button" class="slick-next-icon"><i class="fa-solid fa-arrow-right"></i></button>',infinite:!0,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1}}]})}))}function showModalColaborators(){const e=document.querySelectorAll(".logos__colaboratos-btn"),t=document.querySelectorAll(".close-modal-colaborators");e.forEach((e=>{e.addEventListener("click",(function(){!function(e,t){const o=document.querySelector(`.${e}[data-id="${t}"]`);o&&o.classList.add("is-visible")}("modal__colaborators",this.getAttribute("data-target"))}))})),t.forEach((e=>{e.addEventListener("click",(function(){const e=this.closest(".modal__colaborators");e&&function(e){e&&e.classList.remove("is-visible")}(e)}))}))}$(window).on("load",(()=>{"inicio"==(currentNamespace=$(".global__wrapper").data("namespace"))&&(effectMenu(),sliderBannerHome(),animatedNumsDevelopment(),sliderHome()),["inicio","acerca-de","proyectos","colaboradores","contacto"].includes(currentNamespace)&&effectMenu(),"proyectos"==currentNamespace&&(switchSection("residencialBtn","residencialSection"),showModalProjects(),sliderProjects()),"colaboradores"==currentNamespace&&(showModalColaborators(),sliderModalsColaborators())})),jQuery.event.special.touchstart={setup:function(e,t,o){this.addEventListener("touchstart",o,{passive:!t.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,t,o){this.addEventListener("touchmove",o,{passive:!t.includes("noPreventDefault")})}},jQuery.event.special.wheel={setup:function(e,t,o){this.addEventListener("wheel",o,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,t,o){this.addEventListener("mousewheel",o,{passive:!0})}},$(document).ready((function(){sliderBannerHome()})),window.onload=animatedNumsDevelopment,$(document).ready((function(){sliderHome()})),$(document).ready((function(){sliderProjects()})),$(document).ready((function(){showModalProjects()}));