'use strict';



/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      elem[i].addEventListener(type, callback);
    }
  } else {
    elem.addEventListener(type, callback);
  }
}



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navTogglers = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

const toggleNavbar = function () {
  navbar.classList.toggle("active");
  overlay.classList.toggle("active");
}

addEventOnElem(navTogglers, "click", toggleNavbar);

const closeNavbar = function () {
  navbar.classList.remove("active");
  overlay.classList.remove("active");
}

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const activeElem = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

// Accordion
document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".item");
  const showMoreBtn = document.getElementById("showMoreBtn");
  let showMore = false;

  items.forEach((item, index) => {
    item.querySelector(".FAQ-title").addEventListener("click", () => {
      if (item.classList.contains("selected")) {
        item.classList.remove("selected");
        item.querySelector(".FAQ-content").classList.remove("show");
      } else {
        document.querySelectorAll(".item").forEach((el) => {
          el.classList.remove("selected");
          el.querySelector(".FAQ-content").classList.remove("show");
        });
        item.classList.add("selected");
        item.querySelector(".FAQ-content").classList.add("show");
      }
    });
  });

});

// addEventOnElem(window, "scroll", activeElem);


// SLider


// $('.custom-slider').slick({
//   slidesToShow: 4,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 2000,
//  responsive: [
//     {
//         breakpoint: 1200,
//         settings: {
//           slidesToShow: 3,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }
//       },
//     {
//         breakpoint: 900,
//         settings: {
//           slidesToShow: 2,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }
//       },
//     {
//         breakpoint: 550,
//         settings: {
//           slidesToShow: 1,
//           slidesToScroll: 1,
//           infinite: true,
//           dots: false
//         }
//       }
//     ]
// });


