// $(function () {
//   $(".popup-vimeo").magnificPopup({
//     disableOn: 700,
//     type: "iframe",
//     mainClass: "mfp-fade",
//     removalDelay: 160,
//     preloader: false,
//     fixedContentPos: false,
//   });
// });

function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    {
      pageLanguage: "en",
      includedLanguages: "ar,en",
      layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
    },
    "google_translate_element"
  );
}

// Function to monitor language changes and apply RTL when Arabic is selected
function monitorTranslationChanges() {
  const observer = new MutationObserver(() => {
    let lang = document.documentElement.lang; // Detect page language from <html>

    let navbar1 = document.querySelector(".navbar");
    let navbarBrand1 = document.querySelector(".navbar-brand");
    let navbarSupportedContent1 = document.querySelector(
      "#navbarSupportedContent"
    );
    let boxes = document.querySelectorAll(".our_services_section .box");
    let fpr_box_p = document.querySelectorAll(".our_services_section .box p");
    let for_box = document.querySelectorAll(
      ".our_services_section .image_box_content figure"
    );

    let value_box = document.querySelectorAll(".portfolio_box_content");
    let heading = document.querySelectorAll(".heading");
    let h2_ar = document.querySelectorAll(".contact-section .heading h2");
    let line = document.querySelectorAll(".heading figure");
    let useful_links = document.querySelectorAll(".middle-portion h5,.arrow");
    let outerDdiv = document.querySelectorAll(".arrow .outer-div");

    if (lang === "ar") {
      document.getElementById("main-header").setAttribute("dir", "rtl");
      document
        .getElementById("navbarSupportedContent")
        .setAttribute("dir", "rtl");

      navbarBrand1.classList.add("navbar-brand_rtl");

      boxes.forEach((box) => {
        box.classList.add("text-right");
      });

      heading.forEach((heading_box) => {
        heading_box.classList.add("text-right");
      });

      fpr_box_p.forEach((box1) => {
        box1.classList.add("text-right");
      });

      for_box.forEach((box_parent) => {
        box_parent.classList.add("right_under");
      });

      value_box.forEach((value_box_right) => {
        value_box_right.classList.add("text-right");
      });

      useful_links.forEach((useful_linkss) => {
        useful_linkss.classList.add("text-right");
      });

      line.forEach((lines) => {
        lines.style.right = "0px";
      });

      h2_ar.forEach((h2_ars) => {
        h2_ars.style.paddingRight = "0px";
      });

      outerDdiv.forEach((outerDdivs) => {
        outerDdivs.classList.add("flex_reverse1");
      });

      document
        .querySelector(".image_box_content")
        .classList.add("image_box_content_right");
    } else {
      document.getElementById("main-header").setAttribute("dir", "ltr");

      document
        .getElementById("navbarSupportedContent")
        .setAttribute("dir", "ltr");

      navbarBrand1.classList.remove("navbar-brand_rtl");

      boxes.forEach((box) => {
        box.classList.remove("text-right");
      });

      heading.forEach((heading_box) => {
        heading_box.classList.remove("text-right");
      });

      fpr_box_p.forEach((box1) => {
        box1.classList.remove("text-right");
      });

      for_box.forEach((box_parent) => {
        box_parent.classList.remove("right_under");
      });

      value_box.forEach((value_box_right) => {
        value_box_right.classList.remove("text-right");
      });

      useful_links.forEach((useful_linkss) => {
        useful_linkss.classList.remove("text-right");
      });

      // line.forEach((lines) => {
      //   lines.style.left = "0px";
      // });

      // h2_ar.forEach((h2_ars) => {
      //   h2_ars.style.paddingRight = "0px";
      // });

      outerDdiv.forEach((outerDdivs) => {
        outerDdivs.classList.remove("flex_reverse1");
      });

      document
        .querySelector(".image_box_content")
        .classList.remove("image_box_content_right");
    }
  });

  // Observe changes in <html> attribute (Google Translate modifies this)
  observer.observe(document.documentElement, {
    attributes: true,
    attributeFilter: ["lang"],
  });
}

function hideGoogleTranslateHeader() {
  let googleFrame = document.querySelector(".goog-te-banner-frame");
  if (googleFrame) {
    googleFrame.style.display = "none";
  }
  // document.body.style.top = "0px";
}

setTimeout(() => {
  monitorTranslationChanges();
  hideGoogleTranslateHeader();
}, 500);

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
