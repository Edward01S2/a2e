/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import 'lity';
import Swiper, { Navigation, Autoplay, Pagination, EffectFade } from 'swiper';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { nodeName } from 'jquery';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
Swiper.use([Navigation, Autoplay, Pagination, EffectFade]);

$(document).ready(() => {

  const aboutSwiper = new Swiper('.about-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 32,
    speed: 1000,
    autoplay: {
      delay: 10000,
    },
    navigation: {
      nextEl: '.swiper-next',
      prevEl: '.swiper-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
    },
    on: {
      // slideChangeTransitionStart: function() {
      //   $('.subtitle-container').animate({'opacity' : 0}, 1000);
      // },
      slideChangeTransitionStart: function() {
        var active = $('.about-slider .swiper-slide-active').attr('data-subtitle');
        $('.subtitle-container').animate({'opacity': 0}, 500, function () {
          $('.slide-subtitle').text(active);
        }).animate({'opacity': 1}, 1000);
        //$('.slide-subtitle').text(active);
      }
    }
  });

  const processSwiper = new Swiper('.process-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
      delay: 10000,
    },
    navigation: {
      nextEl: '.process-swiper-next',
      prevEl: '.process-swiper-prev',
    },
    pagination: {
      el: '.process-swiper-pagination',
      type: 'bullets',
    },
  });

  const strategySwiper = new Swiper('.strategy-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoHeight: true,
    navigation: {
      nextEl: '.strategy-swiper-next',
      prevEl: '.strategy-swiper-prev',
    },
    pagination: {
      el: '.strategy-swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      768: {
        autoHeight: false,
      }
    },
    on: {
      slideChangeTransitionStart: function() {
        //if(strategySwiper.realIndex)
        let index = strategySwiper.realIndex;
        //console.log(index);
        //console.log(strategySwiper.realIndex)
        switch(index) {
          case 0:
            $('.stripe-1').css('background-color', '#3C70F5');
            $('.stripe-2').css('background-color', '#2F00F0');
            $('.stripe-3').css('background-color', '#2600C0');
            break;
          case 1:
            $('.stripe-1').css('background-color', '#2F00F0');
            $('.stripe-2').css('background-color', '#2600C0');
            $('.stripe-3').css('background-color', '#628BFA');
            break;
          case 2:
            $('.stripe-1').css('background-color', '#2600C0');
            $('.stripe-2').css('background-color', '#628BFA');
            $('.stripe-3').css('background-color', '#3C70F5');
            break;
          case 3:
            $('.stripe-1').css('background-color', '#628BFA');
            $('.stripe-2').css('background-color', '#3C70F5');
            $('.stripe-3').css('background-color', '#2F00F0');
            break;
        }
      },
      resize: function () {
        strategySwiper.update();
      }
    }
  });

  const directorSwiper = new Swiper('.director-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
      delay: 5000,
    },
    navigation: {
      nextEl: '.director-swiper-next',
      prevEl: '.director-swiper-prev',
    },
    pagination: {
      el: '.director-swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
        spaceBetween: 32,
        
      },
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
        spaceBetween: 64,
      },
      1280: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
        spaceBetween: 96,
      }
    },
  });

  const quoteSwiper = new Swiper('.quote-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoplay: {
      delay: 7000,
    },
    navigation: {
      nextEl: '.quote-swiper-next',
      prevEl: '.quote-swiper-prev',
    },
    pagination: {
      el: '.quote-swiper-pagination',
      type: 'bullets',
    },
  });

  const postsSwiper = new Swiper('.posts-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    spaceBetween: 16,
    navigation: {
      nextEl: '.posts-swiper-next',
      prevEl: '.posts-swiper-prev',
    },
    pagination: {
      el: '.posts-swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        centeredSlides: false,
        spaceBetween: 24,
        
      },
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        centeredSlides: false,
        spaceBetween: 32,
      },
      // 1280: {
      //   slidesPerView: 3,
      //   slidesPerGroup: 3,
      //   centeredSlides: false,
      //   spaceBetween: 96,
      // }
    },
  });

  const blogSwiper = new Swiper('.blog-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoHeight: true,
    navigation: {
      nextEl: '.blog-swiper-next',
      prevEl: '.blog-swiper-prev',
    },
    pagination: {
      el: '.blog-swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      768: {
        autoHeight: false,
      }
    },
  });

  const studySwiper = new Swiper('.study-slider', {
    slidesPerView: 'auto',
    grabCursor: true,
    centeredSlides: true,
    autoHeight: true,
    navigation: {
      nextEl: '.study-swiper-next',
      prevEl: '.study-swiper-prev',
    },
    pagination: {
      el: '.study-swiper-pagination',
      type: 'bullets',
    },
    breakpoints: {
      768: {
        autoHeight: false,
        spaceBetween: 32,
      }
    },
    on: {
      init: {

      }
    }
  });


  $(window).smartresize(function(e){
    var width = $(window).width();
    //console.log('window changed')
    if($('.strategy-slider').length) {
      strategySwiper.update();
    }
    if($('.about-slider').length) {
      aboutSwiper.update();
    }
    if($('.director-slider').length) {
      directorSwiper.update();
    }
    if($('.process-slider').length) {
      processSwiper.update();
    }
    if($('.blog-slider').length) {
      blogSwiper.update();
    }
    if($('.study-slider').length) {
      tudySwiper.update();
    }
    if($('.posts-slider').length) {
      postsSwiper.update();
    }
    //strategySwiper.update();

  });

  gsap.config({
    nullTargetWarn: false,
  });

  gsap.to('#nav', {
    scrollTrigger: {
      trigger: '.main',
      start: "top",
      endTrigger: "html",
      end:"bottom top",
      toggleClass: {targets: "#nav", className: "active"},
      // markers: true,
    }
  });

  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  const navLinks = gsap.utils.toArray(".nav-container .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
      }
    });
  });

  gsap.utils.toArray(".section").forEach((box, i) => {
    var id = box.getAttribute("id");
    gsap.to(box, {
      scrollTrigger: {
        trigger: box,
        start: "top 60%",
        end: "bottom 20%",
        //markers: true,
        toggleClass: {targets: ".nav-container a[href='#" + id + "']", className: "active"},
      },
    });
  });

  //Hero Animation
  var hero = gsap.timeline();
    hero.fromTo('#hero .triangle-left', {
      autoAlpha: 0,
      scale: 3,
      x: -100,
    }, {
      autoAlpha: 1,
      scale: 1,
      x: 0,
      duration: .75,
    }, 0);
    hero.fromTo('#hero .diagonal', {
      x: 100,
      scale: 3,
    }, {
      x: 0,
      scale: 1,
      duration: .75,
    }, 0);
    hero.fromTo('#hero h1', {
      y: 25,
      autoAlpha: 0,
    },{
      y: 0,
      autoAlpha: 1,
      duration: .5,
    }, 0.5);
    hero.fromTo('#hero .content', {
      y: 25,
      autoAlpha: 0,
    },{
      y: 0,
      autoAlpha: 1,
      duration: .5,
    }, 0.6);

  //Statistics Animation
  var headlines = gsap.utils.toArray('#statistics .headline');
  gsap.fromTo(headlines, {
    y: 25,
    autoAlpha: 0,
  },{
    y: 0,
    autoAlpha: 1,
    stagger: .3,
    duration: 1.25,
    scrollTrigger: {
      trigger: '#statistics',
      start: "top 65%",
      //markers: true,
    }
  })

  //var service = gsap.utils.toArray('#services .service-item');

  let serv01 = gsap.timeline({
    scrollTrigger: {
      trigger: '.service-item-1',
      start: "top 65%",
      //markers: true,
    }
  });
  serv01.to('#services .service-item-1 .svg-number path', {
    fill: "black",
  });
  // serv01.fromTo('#services .service-item-1 .content', {
  //   y: 25,
  //   autoAlpha: 0,
  //   },{
  //   y: 0,
  //   autoAlpha: 1,
  // });
  // serv01.fromTo('#services .service-item-1 button', {
  //   x: -25,
  //   autoAlpha: 0,
  //   },{
  //   x: 0,
  //   autoAlpha: 1,
  // });

  let serv02 = gsap.timeline({
    scrollTrigger: {
      trigger: '.service-item-2',
      start: "top 65%",
      //markers: true,
    }
  });
  serv02.to('#services .service-item-2 .svg-number path', {
    fill: "#FFC322",
    stroke: "#FFC322",
  });
  // serv02.fromTo('#services .service-item-2 .content', {
  //   y: 25,
  //   autoAlpha: 0,
  //   },{
  //   y: 0,
  //   autoAlpha: 1,
  // });
  // serv02.fromTo('#services .service-item-2 button', {
  //   x: -25,
  //   autoAlpha: 0,
  //   },{
  //   x: 0,
  //   autoAlpha: 1,
  // });

  let serv03 = gsap.timeline({
    scrollTrigger: {
      trigger: '.service-item-3',
      start: "top 65%",
      //markers: true,
    }
  });
  serv03.to('#services .service-item-3 .svg-number path', {
    fill: "black",
  });
  // serv03.fromTo('#services .service-item-3 .content', {
  //   y: 25,
  //   autoAlpha: 0,
  //   },{
  //   y: 0,
  //   autoAlpha: 1,
  // });
  // serv03.fromTo('#services .service-item-3 button', {
  //   x: -25,
  //   autoAlpha: 0,
  //   },{
  //   x: 0,
  //   autoAlpha: 1,
  // });

  //Quotes Animation
  var quotes = gsap.timeline({
    scrollTrigger: {
      trigger: '#quotes',
      start: "top 65%",
      //markers: true,
    }
  });
    quotes.fromTo('#quotes .triangle', {
      autoAlpha: 0,
      scale: 2,
      x: 50,
    }, {
      autoAlpha: 1,
      scale: 1,
      x: 0,
      duration: .75,
    }, 0);
    quotes.fromTo('#quotes .diagonal', {
      x: -100,
      scale: 3,
    }, {
      x: 0,
      scale: 1,
      duration: .75,
    }, 0);
    quotes.fromTo('#quotes .quote-slider', {
      y: 25,
      autoAlpha: 0,
    },{
      y: 0,
      autoAlpha: 1,
      duration: .5,
    }, 0.5);
    quotes.fromTo('#quotes .quote-svg', {
      y: 25,
      autoAlpha: 0,
    },{
      y: 0,
      autoAlpha: 1,
      duration: .5,
    }, 0.6);
    quotes.fromTo('#quotes .slider-controls', {
      y: 25,
      autoAlpha: 0,
    },{
      y: 0,
      autoAlpha: 1,
      duration: .5,
    }, 0.6);

    //Companies Animation

    const clientSwiper = new Swiper('.client-slider', {
      slidesPerView: 1,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      on: {
        init: function() {
          var row1 = gsap.utils.toArray('.logo-grid .logo-row-1 a');
          let comp = gsap.timeline();
          comp.fromTo(row1, {
            y: -35,
            autoAlpha: 0,
          },{
            y: 0,
            autoAlpha: 1,
            duration: 0.1,
            stagger: 0.1,
          }, 0);
        },
        slideChangeTransitionStart: function() {
          var active = clientSwiper.realIndex + 1;
          //console.log(active);
          var row = gsap.utils.toArray('.logo-grid .logo-row-' + active + ' a');
          let comp = gsap.timeline();
          comp.fromTo(row, {
            y: -35,
            autoAlpha: 0,
          },{
            y: 0,
            autoAlpha: 1,
            duration: 0.1,
            stagger: 0.1,
          }, 0);
          //console.log(row);
        },

      }
    });

    //Blog Page Animation
    var caseStudies = gsap.timeline({
      scrollTrigger: {
        trigger: '.study-title',
        start: "top 65%",
        //markers: true,
      }
    });
      caseStudies.fromTo('.study-row-1', {
        autoAlpha: 0,
        xPercent: 100,
      }, {
        autoAlpha: 1,
        xPercent: 0,
        duration: 2,
      }, 0);
      caseStudies.fromTo('.study-row-2', {
        autoAlpha: 0,
        xPercent: -100,
      }, {
        autoAlpha: 1,
        xPercent: 0,
        duration: 2,
      }, 0);

    //Contact Section Anim
    // gsap.utils.toArray(".parallax").forEach((section, i) => {
    //   section.bg = section.querySelector(".bg"); 

    //   // Do the parallax effect on each section
    //   if (i) {
    //     section.bg.style.backgroundPosition = `50% ${innerHeight / 2}px`;
    
    //     gsap.to(section.bg, {
    //       backgroundPosition: `50% ${-innerHeight / 2}px`,
    //       ease: "none",
    //       scrollTrigger: {
    //         trigger: section,
    //         scrub: true
    //       }
    //     });
    //   } 
    // });

});

(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
  // smartresize 
  jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');