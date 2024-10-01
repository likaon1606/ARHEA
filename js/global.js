var $ = jQuery,
  currentNamespace;

$(window).on("load", () => {
  currentNamespace = $(".global__wrapper").data("namespace");

  if (currentNamespace == "inicio") {
    homeFunctions();
    sliderHome();
  } 

  if (["inicio", "acerca-de", "proyectos", "colaboradores", "contacto"].includes(currentNamespace)) {
    effectMenu();
  }

  if (currentNamespace == "proyectos") {
    sliderProjects();
    showModal();
    switchSection();
  }

  if (currentNamespace == "colaboradores") {
    showModal();
    modalsColaborators();
  }
});

// Passive event listener
jQuery.event.special.touchstart = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.touchmove = {
  setup: function (_, ns, handle) {
    this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
  }
};
jQuery.event.special.wheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("wheel", handle, { passive: true });
  }
};
jQuery.event.special.mousewheel = {
  setup: function (_, ns, handle) {
    this.addEventListener("mousewheel", handle, { passive: true });
  }
};