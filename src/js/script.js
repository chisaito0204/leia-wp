/*********************
 * index
 * -------------------
 * 0. common
 * 1. header / footer
 * 2. Swiper
 * 3. Tab
 *********************/


/*********************
 * 0. common
 *********************/

// トップへ戻るボタン
$(document).ready(function() {
  var pagetop = $('.pagetop');
    $(window).scroll(function () {
       if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
       } else {
            pagetop.fadeOut();
            }
       });
       pagetop.click(function () {
           $('body, html').animate({ scrollTop: 0 }, 500);
              return false;
   });
});

/*********************
 * 1. header / footer
 *********************/

window.addEventListener("scroll", function () {
if ( window.innerWidth > 959 ) {
  const header = document.querySelector("header");
  header.classList.toggle("scroll-nav", window.scrollY > 500);
 }
});


document.addEventListener('DOMContentLoaded', function () {
  var spMenuBtn = document.querySelector('.header__spMenuBtn');
  var bodyHtml = document.querySelectorAll('body, html');
  var spSideMenu = document.querySelector('.header__spSideMenu');
  var body = document.body;

  if (spMenuBtn) {
    spMenuBtn.addEventListener('click', function () {

      bodyHtml.forEach(function (element) {
        element.animate({ scrollTop: 0 }, 100);
      });

      spMenuBtn.classList.toggle('is-open');
      if (spSideMenu) {
        spSideMenu.classList.toggle('is-open');
      }
      if (spMenuBtn.classList.contains('is-open')) {
        body.style.position = 'fixed';
        body.style.top = '0';
      } else {
        body.style.position = '';
        body.style.top = '';
      }
      
    });
  }
});


/*********************
 * 2. Swiper
 *********************/
const mvSwiper = new Swiper('.top__mv .swiper', {
    loop: true,
    slidesPerView: 1,
    effect: 'fade',
    speed: 2000,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
});

const mediaSwiper = new Swiper('.top__media .swiper', {
  loop: true,
  slidesPerView: 3,
  speed: 1000,
  spaceBetween: 35,
  autoplay: {
    delay: 10000,
    disableOnInteraction: false
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
});

const breakPoint = 767;
let recommendSwiper;
let mySwiperBool;

window.addEventListener('load', () => {
  if (breakPoint < window.innerWidth) {
    mySwiperBool = false;
  } else {
    createSwiper();
    mySwiperBool = true;
  }
}, false);

window.addEventListener('resize', () => {
  if (breakPoint < window.innerWidth && mySwiperBool) {
    recommendSwiper.destroy(false, true);
    mySwiperBool = false;
  } else if (breakPoint >= window.innerWidth && !(mySwiperBool)) {
    createSwiper();
    mySwiperBool = true;
  }
}, false);

const createSwiper = () => {
  recommendSwiper = new Swiper('.top__blog .swiper', {
    loop: true,
    slidesPerView: 1.2,
    centeredSlides : true,
    spaceBetween: 12,
    speed: 2000,
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  });
}


/*********************
 * 3. Faq Toggle
 *********************/
  $(function () {
    $('.top__faq__inner').on('click', function () {
      $(this).find('.top__faq__inner--qu').toggleClass("is-open");
      $(this).find('.top__faq__inner--an').slideToggle();
    });
  });

  /*********************
 * 4. Tab
 *********************/
  $(function() {
    let tabs = $(".tab");
    $(".tab").on("click", function() {
        $(".active").removeClass("active");
        $(this).addClass("active");
        const index = tabs.index(this);
        $(".media__contents").removeClass("show").eq(index).addClass("show");
    });
  });



