import Swiper from "swiper";
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/scss/autoplay';
import 'swiper/scss/navigation';
import Masonry from "masonry-layout";

document.addEventListener('DOMContentLoaded', function(){
    var swiper = new Swiper(".swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
      speed: 400,
      preventClicks:true,
      noSwiping: true,
      autoplay: true,
      modules:[
        Navigation
      ],
      freeMode: false,
      loop:true,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev"
      },    
    })
    var swiper_cpt_gallery = new Swiper(".slide_cpt_gallery", {
      slidesPerView:1,
      spaceBetween:5,
      speed:400,
      centeredSlides:true,
      grabCursor:true,
      autoplay: {
        delay:5000
      },
      autoHeight:true,
      modules: [Navigation],
      freeMode:false,
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      }
    })
    
    // float menu
    let navbar__nav = document.querySelector('.navbar__nav');
    navbar__nav.addEventListener('click', () => {
      const burguer = document.querySelectorAll('.navbar__close, .navbar__hamburguer');  
      burguer.forEach( item => {
        item.classList.toggle('active')
      })

    })
    // scrollnav
    window.addEventListener('scroll', () => {
      let scrollnav = document.querySelector('.scrollnav');
      scrollnav.classList.toggle('down', window.scrollY > 50)
    });

    //back to top
    let btn_top = document.querySelector('.back__top');
    window.addEventListener('scroll', () => {
      btn_top.classList.toggle('btn_top', window.scrollY > 200);
    })

    btn_top.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top:0,
        behavior: 'smooth'
      })
    })

    //masonry
    var elem = document.querySelector('.media__gallery')
    var msnry = new Masonry( elem, {
      itemSelector: '.img_wrapper',
      columnWidth: '.img_wrapper',
      // percentPosition:true,
      gutter: 10,
      // horizontalOrder:true
    })

    
    
    

})