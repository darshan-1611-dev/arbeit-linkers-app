// Header Scroll
let nav = document.querySelector(".navbar");

window.onscroll = function () {
    if (document.documentElement.scrollTop > 250) {
        nav.classList.add("header-scrolled");
    } else {
        nav.classList.remove("header-scrolled");
    }
}


// Hide Nav On Click
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");

navBar.forEach(function(e){
    e.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})


// Testimonial Section
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    // centeredSlides: true,
    slidesPerGroup:1,
    loop:true,
    loopFillGroupWithBlank:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints:{
        // when window width is >= 640px
        320: {
          slidesPerView: 1,
          spaceBetween: 30
        },
        // when window width is >= 480px
        650: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        920: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
});


// User Menu Toggler

function toggleUserMenu(){
    let user_menu = document.querySelector(".user-menu-toggler");
    if(user_menu.style.display === "none"){
        user_menu.style.display = "block";
    }else{
        user_menu.style.display = "none";
    }
    // console.log("Clicked");
}