/*********************
 * index
 * -------------------
 * 0. common
 * 1. header / footer
 * 2. Swiper
 * 3. Faq Toggle
 * 4. Tab
 * 5. Muuri
 * 6. Luminous
 * 7. modal-video
 * 8. GSAP
 * 9. jarallax
 *********************/

/*********************
 * 0. common
 *********************/

// トップへ戻るボタン
$(document).ready(function () {
  var pagetop = $(".pagetop");
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
  pagetop.click(function () {
    $("body, html").animate({ scrollTop: 0 }, 500);
    return false;
  });
});

const articleLists = document.querySelectorAll(".blog__listInnerArticle");

articleLists.forEach(article => {
  const blogLink = article.querySelector(".blogLink");
  article.addEventListener("click", function () {
    const link = blogLink.getAttribute("href");
    window.location.href = link;
  });
});

/*********************
 * 1. header / footer
 *********************/

window.addEventListener("scroll", function () {
  if (window.innerWidth > 959) {
    const header = document.querySelector("header");
    header.classList.toggle("scroll-nav", window.scrollY > 500);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  var spMenuBtn = document.querySelector(".header__spMenuBtn");
  var bodyHtml = document.querySelectorAll("body, html");
  var spSideMenu = document.querySelector(".header__spSideMenu");
  var body = document.body;

  if (spMenuBtn) {
    spMenuBtn.addEventListener("click", function () {
      bodyHtml.forEach(function (element) {
        element.animate({ scrollTop: 0 }, 100);
      });

      spMenuBtn.classList.toggle("is-open");
      if (spSideMenu) {
        spSideMenu.classList.toggle("is-open");
      }
      if (spMenuBtn.classList.contains("is-open")) {
        body.style.position = "fixed";
        body.style.top = "0";
      } else {
        body.style.position = "";
        body.style.top = "";
      }
    });
  }
});

/*********************
 * 2. Swiper
 *********************/
const mvSwiper = new Swiper(".top__mv .swiper", {
  loop: true,
  slidesPerView: 1,
  effect: "fade",
  speed: 2000,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});

const mediaSwiper = new Swiper(".top__media .swiper", {
  loop: true,
  slidesPerView: 3,
  speed: 1000,
  spaceBetween: 35,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }
});

const breakPoint = 767;
let recommendSwiper;
let mySwiperBool;

window.addEventListener("load", () => {
  if (breakPoint < window.innerWidth) {
    mySwiperBool = false;
  } else {
    createSwiper();
    mySwiperBool = true;
  }
}, false);

window.addEventListener("resize", () => {
  if (breakPoint < window.innerWidth && mySwiperBool) {
    recommendSwiper.destroy(false, true);
    mySwiperBool = false;
  } else if (breakPoint >= window.innerWidth && !mySwiperBool) {
    createSwiper();
    mySwiperBool = true;
  }
}, false);

const createSwiper = () => {
  recommendSwiper = new Swiper(".top__blog .swiper", {
    loop: true,
    slidesPerView: 1.2,
    centeredSlides: true,
    spaceBetween: 12,
    speed: 2000,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true
    }
  });
};

/*********************
 * 3. Faq Toggle
 *********************/
$(function () {
  $(".top__faq__inner").on("click", function () {
    $(this).find(".top__faq__inner--qu").toggleClass("is-open");
    $(this).find(".top__faq__inner--an").slideToggle();
  });
});

/*********************
 * 4. Tab
 *********************/
$(function () {
  let tabs = $(".tab");
  $(".tab").on("click", function () {
    $(".active").removeClass("active");
    $(this).addClass("active");
    const index = tabs.index(this);
    $(".media__contents").removeClass("show").eq(index).addClass("show");

    // .grid 要素が存在するかを確認
    var gridElement = document.querySelector(".grid");
    if (gridElement !== null) {
      // .grid 要素が存在する場合のみ、Muuriの設定を実行
      var grid = new Muuri(".grid", {
        // Muuriの設定
        showDuration: 600,
        showEasing: "cubic-bezier(0.215, 0.61, 0.355, 1)",
        hideDuration: 600,
        hideEasing: "cubic-bezier(0.215, 0.61, 0.355, 1)",
        visibleStyles: {
          opacity: "1",
          transform: "scale(1)"
        },
        hiddenStyles: {
          opacity: "0",
          transform: "scale(0.5)"
        }
      });
    } else {}
  });
});

/*********************
 * 5. Muuri ギャラリー切り替え
 *********************/
document.addEventListener("DOMContentLoaded", function () {});

/*********************
 * 6. Luminous
 *********************/
document.addEventListener("DOMContentLoaded", function () {
  new LuminousGallery(document.querySelectorAll(".luminous"));
});

/*********************
 * 7. modal-video
 *********************/

$(function () {
  $(".js-modal-video").modalVideo();
});

/*********************
 * 7. GSAP
 *********************/
/*!
 * GSAP 3.12.2
 * https://greensock.com
 *
 * @license Copyright 2008-2023, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for
 * Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */
/*!
 * ScrollToPlugin 3.12.2
 * https://greensock.com
 *
 * @license Copyright 2008-2023, GreenSock. All rights reserved.
 * Subject to the terms at https://greensock.com/standard-license or for
 * Club GreenSock members, the agreement issued with that membership.
 * @author: Jack Doyle, jack@greensock.com
 */

window.matchMedia("(max-width: 959px)").matches;
const getDeviceType = (tb = false) => {
  if (tb && window.matchMedia("(min-width: 960px) and (max-width: 1200px)").matches) {
    return "tb";
  } else if (window.matchMedia("(max-width: 959px)").matches) {
    return "sp";
  } else {
    return "pc";
  }
};

gsap.config({
  nullTargetWarn: false
});

gsap.utils.toArray(".top__title").forEach(target => {
  gsap.set(".top__title", {
    opacity: 0,
    y: 50
  });
  gsap.to(target, {
    opacity: 1,
    y: 0,
    ease: "power3.out",
    duration: 1,
    scrollTrigger: {
      trigger: target
    }
  });
});

const topAbout = gsap.timeline();
topAbout.set(".i01", {
  autoAlpha: 0,
  x: -20
});
topAbout.set(".t01", {
  autoAlpha: 0,
  x: 20
});
topAbout.set(".i02", {
  autoAlpha: 0,
  x: 20
});
topAbout.set(".t02", {
  autoAlpha: 0,
  x: -20
});
topAbout.set(".i03", {
  autoAlpha: 0,
  x: -20
});
topAbout.set(".t03", {
  autoAlpha: 0,
  x: 20
});

topAbout.to(".i01", {
  autoAlpha: 1,
  x: 0,
  duration: 0.5,
  ease: "power3.out"
});
topAbout.to(".t01", {
  autoAlpha: 1,
  x: 0,
  duration: 0.8,
  ease: "power3.out"
});
topAbout.to(".i02", {
  autoAlpha: 1,
  x: 0,
  duration: 0.5,
  ease: "power3.out"
});
topAbout.to(".t02", {
  autoAlpha: 1,
  x: 0,
  duration: 1,
  ease: "power3.out"
});
topAbout.to(".i03", {
  autoAlpha: 1,
  x: 0,
  duration: 0.5,
  ease: "power3.out"
});
topAbout.to(".t03", {
  autoAlpha: 1,
  x: 0,
  duration: 1,
  ease: "power3.out"
});

ScrollTrigger.create({
  trigger: ".top__about",
  animation: topAbout,
  // start: getDeviceType() === "sp" ? "top top+=10%" : "top top+=8%",
  paused: true
  // markers: true,
});

gsap.utils.toArray(".modTitle").forEach(target => {
  gsap.set(".modTitle", {
    opacity: 0,
    x: 50
  });
  gsap.to(target, {
    opacity: 1,
    x: 0,
    ease: "power3.out",
    duration: 1,
    scrollTrigger: {
      trigger: target
    }
  });
});

gsap.utils.toArray(".modSubTitle").forEach(target => {
  gsap.set(".modSubTitle", {
    opacity: 0,
    y: -100
  });
  gsap.to(target, {
    opacity: 1,
    y: 0,
    ease: "power3.out",
    duration: 1.8,
    scrollTrigger: {
      trigger: target
    }
  });
});

gsap.utils.toArray(".modFV__img").forEach(target => {
  gsap.set(".modFV__img", {
    autoAlpha: 0
  });
  gsap.to(target, {
    autoAlpha: 1,
    delay: 0.3,
    duration: 3,
    scrollTrigger: {
      trigger: target
    }
  });
});

/*********************
 * 9. jarallax
 *********************/

jarallax(document.querySelectorAll(".jarallax"));
