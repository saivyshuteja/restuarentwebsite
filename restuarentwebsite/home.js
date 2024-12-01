let menu=document.querySelector('#menu');
let navbar=document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}
window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}
var swiper = new Swiper('.homeslider', {
 loop:true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
})

// loop:true,
// spaceBetween: 20,
// autoHeight:true,
// grabCursor:true,
// // Responsive breakpoints
// breakpoints: {
//   // when window width is >= 320px
//   640: {
//     slidesPerView: 2,
    
//   },
//   // when window width is >= 480px
//   768: {
//     slidesPerView: 3,
 
//   },
//   // when window width is >= 640px
//   1024: {
//     slidesPerView: 4,
    
//   }

let swiper = new Swiper('.reviews-slider', {
  loop:true,
  spaceBetween: 20,
  autoHeight:true,
  grabCursor:true,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    640: {
      slidesPerView: 1,
      
    },
    // when window width is >= 480px
    768: {
      slidesPerView: 2,
   
    },
    // when window width is >= 640px
    1024: {
      slidesPerView: 3,
      
    },
  }
 })