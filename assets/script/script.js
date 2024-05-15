// fixed header
window.addEventListener("scroll",()=>{
 if (window.scrollY > 120) {
document.querySelector("header").classList.add('fixedheader');
 }else {
document.querySelector("header").classList.remove('fixedheader');
 }
})
// scroll to top start here
document.addEventListener("DOMContentLoaded", function(event) {
        
  let offset = 50;
  let circleContainer = document.querySelector(".circle-container");
  let circlePath = document.querySelector('.circle-container path');
  let pathLength = circlePath.getTotalLength();
  circlePath.style.transition =           circlePath.style.WebkitTransition = 'none';
  circlePath.style.strokeDasharray = pathLength;
  circlePath.style.strokeDashoffset = pathLength;
  circlePath.getBoundingClientRect();
  circlePath.style.transition = circlePath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';

  let updateLoader = () => {

    let scrollTop = window.scrollY;
    let docHeight = document.body.offsetHeight;
    let winHeight = window.innerHeight;
    let height = docHeight - winHeight;
    let progress = pathLength - (scrollTop * pathLength / height);
    circlePath.style.strokeDashoffset = progress;

    if (scrollTop > offset) {
      circleContainer.classList.add("active");
    } else {
      circleContainer.classList.remove("active");
    }
          
  }

circleContainer.onclick = function(){
  window.scrollTo({ top: 0, behavior: 'smooth'});
}

window.onscroll = () => {
  updateLoader();
}

updateLoader();

});
// banner section start here
$('.banner-carousel').owlCarousel({
  loop:true,
  margin:10,
  dots:false,
  nav:true,
  mouseDrag:false,
  autoplay:true,
  autoplayTimeout:5000,
  animateOut: 'fadeOut',
  items:1,    
  navigationText: ["<i class='fal fa-arrow-left'></i>","<i class='fal fa-arrow-right'></i>"]

});
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}


// custom cursor start here
const cursor = document.querySelector('.cursor');

document.addEventListener('mousemove', e => {
    cursor.setAttribute("style", "top: "+(e.pageY - 0)+"px; left: "+(e.pageX - 0)+"px;");

})
let a = document.querySelectorAll("a");
a.forEach(e => {
  e.addEventListener("mouseenter",()=>{
    cursor.classList.add("cursoradd");

  })
  e.addEventListener("mouseleave",()=>{
    cursor.classList.remove("cursoradd");

  })
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  centeredSlides: true,
  loop:true,
  autoplay:true,
  breakpoints: {
    640: {
      slidesPerView: 1.25
    },
    1024: {
      slidesPerView: 2
    },
    1200:{
      slidesPerView: 4,
    }
  }
});
var swiper = new Swiper(".brand-carousel .mySwiper2", {
  slidesPerView: 2,
  spaceBetween: 13,
  centeredSlides: true,
  loop:true,
  breakpoints: {
    640: {
      slidesPerView: 3
    },
    1024: {
      slidesPerView: 4
    },
    1200:{
      slidesPerView: 5,
    }
  }
});

// scroll trigger start here
if (window.innerWidth > 992) {
  let reveal = document.querySelectorAll("section") 

reveal.forEach( (el) => {
  let headings = el.querySelectorAll("h2,h3,h4, p,img")
  let btn = el.querySelectorAll(".commonbtn,a,button,ul")
  
  let tl = gsap.timeline ()
  .from(headings, {y:80, stagger:0.05, opacity:0, duration:1, ease:"power3.out"})
  .from(btn, {y:80, opacity:0, duration:1.3, ease:"power3.out"},'-=0.6')
  
  ScrollTrigger.create ({
		  trigger: el,
			start: "center 130%", 
      end:"top 50%",
			markers: false,
			toggleActions: "play none none reverse ",
      animation:tl
      })
})
}else{
  console.log('stopped scroll trigger')
}

// testimonial carousel start here
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  items:1,
  dots:false,
  navText : ["<i class='fa-solid fa-arrow-left'></i>","<i class='fa-solid fa-arrow-right'></i>"]

})



// about us faq section start here
$(document).ready(function(){
  $('.accordion-list > li > .answer').hide();
    
  $('.accordion-list > li').click(function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".accordion-list > li.active .answer").slideUp();
      $(".accordion-list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    return false;
  });
  
});