$(function () {
  $(".popup-vimeo").magnificPopup({
    disableOn: 700,
    type: "iframe",
    mainClass: "mfp-fade",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });
});

window.addEventListener("scroll", function () {
  let dark_logo = document.getElementById("for_dark_logo");
  let light_logo = document.getElementById("for_white_logo");
  dark_logo.style.display = "none";
  let header = document.getElementById("main-header");
  if (window.scrollY > 50) {
    dark_logo.style.display = "block";
    light_logo.style.display = "none";
    header.classList.add("header-scrolled");
  } else {
    dark_logo.style.display = "none";
    light_logo.style.display = "block";
    header.classList.remove("header-scrolled");
  }
});

window.addEventListener("load", function () {
  let dark_logo = document.getElementById("for_dark_logo");
  let light_logo = document.getElementById("for_white_logo");
  dark_logo.style.display = "none";
  let header = document.getElementById("main-header");
  if (window.scrollY > 50) {
    dark_logo.style.display = "block";
    light_logo.style.display = "none";
    header.classList.add("header-scrolled");
  } else {
    dark_logo.style.display = "none";
    light_logo.style.display = "block";
    header.classList.remove("header-scrolled");
  }
});


