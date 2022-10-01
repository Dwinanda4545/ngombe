window.onload = function () {


  // your code 

  let loginForm = document.querySelector('.login-form');

  document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
  }

  let navbar = document.querySelector('.navbar');

  document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
  }

  window.onscroll = () => {
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
  }

  var swiper = new Swiper(".product-slider", {
    loop: true,
    spaceBetween: 20,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    centeredSlides: false,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      // 1020: {
      //   slidesPerView: 3,
      // },
    },
  });
};