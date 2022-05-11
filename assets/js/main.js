(function ($) {
  "user strict";

  // preloader
  $(window).on('load', function () {
    $(".preloader").delay(500).animate({
      "opacity" : "0"
      }, 500, function() {
      $(".preloader").css("display","none");
    });
  });

  $(".wpcf7 select").niceSelect(),

// aos
AOS.init();


$('.video').lightcase();

$('.img-popup').lightcase();

//Create Background Image
(function background() {
  let img = $('.bg_img');
  img.css('background-image', function () {
    var bg = ('url(' + $(this).data('background') + ')');
    return bg;
  });
})();

setInterval(function(){ 
  $(".banner-group-shape").addClass("active")
}, 1000);

// scroll-to-top
var ScrollTop = $(".scrollToTop");
$(window).on('scroll', function () {
  if ($(this).scrollTop() < 100) {
      ScrollTop.removeClass("active");
  } else {
      ScrollTop.addClass("active");
  }
});

// header-fixed
var fixed_top = $(".header-section");
$(window).on("scroll", function(){
    if( $(window).scrollTop() > 300){  
        fixed_top.addClass("animated fadeInDown header-fixed");
    }
    else{
        fixed_top.removeClass("animated fadeInDown header-fixed");
    }
});

// navbar-click
$(".navbar li a").on("click", function () {
  var element = $(this).parent("li");
  if (element.hasClass("show")) {
    element.removeClass("show");
    element.children("ul").slideUp(500);
  }
  else {
    element.siblings("li").removeClass('show');
    element.addClass("show");
    element.siblings("li").find("ul").slideUp(500);
    element.children('ul').slideDown(500);
  }
});

window.addEventListener('resize', function () {
  if (screen.width > 1199) {
    $('.sub-menu').show();
  }else{
    $('.sub-menu').hide();
  }
}, true);

//Odometer
if ($(".statistics-item").length) {
  $(".statistics-item").each(function () {
    $(this).isInViewport(function (status) {
      if (status === "entered") {
        for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
          var el = document.querySelectorAll('.odometer')[i];
          el.innerHTML = el.getAttribute("data-odometer-final");
        }
      }
    });
  });
}

// custom cursor 
var cursor = $(".cursor"),
    follower = $(".cursor-follower");

var posX = 0,
    posY = 0;

var mouseX = 0,
    mouseY = 0;

TweenMax.to({}, 0.016, {
  repeat: -1,
  onRepeat: function() {
    posX += (mouseX - posX) / 9;
    posY += (mouseY - posY) / 9;
    
    TweenMax.set(follower, {
        css: {    
        left: posX - 12,
        top: posY - 12
        }
    });
    
    TweenMax.set(cursor, {
        css: {    
        left: mouseX,
        top: mouseY
        }
    });
  }
});

$(document).on("mousemove", function(e) {
    mouseX = e.clientX;
    mouseY = e.clientY;
});

$("a").on("mouseenter", function() {
    cursor.addClass("active");
    follower.addClass("active");
});
$("a").on("mouseleave", function() {
    cursor.removeClass("active");
    follower.removeClass("active");
});

$('input').attr('autocomplete','off');

//plan-tab-switcher
$('.plan-tab-switcher').on('click', function () {
  $(this).toggleClass('active');

  $('.plan-area').toggleClass('change-subs-duration');
});



// slider
// var swiper = new Swiper('.brand-slider', {
//   slidesPerView: 4,
//   spaceBetween: 30,
//   loop: true,
//   autoplay: {
//     speeds: 2000,
//     delay: 4000,
//   },
//   speed: 1000,
//   breakpoints: {
//     991: {
//       slidesPerView: 3,
//     },
//     767: {
//       slidesPerView: 2,
//     },
//     575: {
//       slidesPerView: 1,
//     },
//     420: {
//       slidesPerView: 1,
//     },
//   }
// });

var swiper = new Swiper('.feature-slider', {
  slidesPerView: 3,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

var swiper = new Swiper('.project-slider', {
  slidesPerView: 3,
  spaceBetween: 30,
  centeredSlides: true,
  loop: true,
  navigation: {
    nextEl: '.slider-next',
    prevEl: '.slider-prev',
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    1300: {
      slidesPerView: 2,
      centeredSlides: false,
    },
    1199: {
      slidesPerView: 2,
      centeredSlides: false,
    },
    991: {
      slidesPerView: 2,
      centeredSlides: false,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
      centeredSlides: false,
    },
  }
});

var swiper = new Swiper('.gallery-widget-item-slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.slider-next',
    prevEl: '.slider-prev',
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 1,
    },
    767: {
      slidesPerView: 1,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

var swiper = new Swiper('.service-slider', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

var swiper = new Swiper('.team-slider', {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  navigation: {
    nextEl: '.slider-next',
    prevEl: '.slider-prev',
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

var swiper = new Swiper('.blog-slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.slider-next',
    prevEl: '.slider-prev',
  },
  autoplay: {
    speeds: 2000,
    delay: 4000,
  },
  speed: 1000,
  breakpoints: {
    991: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    575: {
      slidesPerView: 1,
    },
  }
});

// menu
$('.menu-toggler').on('click', function(){
  $('.header-bottom-area').toggleClass('open');
});

// init Isotope
var $grid = $('.grid').isotope({
  // options
  itemSelector: '.grid-item',
  // percentPosition: true,
    masonry: {
      columnWidth: '.grid-item'
    }
});
var $gallery = $(".grid").isotope({
      
});
// filter items on button click
$('.filter-btn-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
$('.filter-btn-group').on( 'click', 'button', function() {
$(this).addClass('active').siblings().removeClass('active');
});

$(window).on('load', function() {
  galleryMasonaryTwo();
})

function galleryMasonaryTwo(){
  // filter functions
  var $grid = $(".grid");
  var filterFns = {};
  $grid.isotope({
      itemSelector: '.grid-item',
      masonry: {
        columnWidth: 0,
      }
  });
  // bind filter button click
  $('ul.filter').on('click', 'li', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    $grid.isotope({
      filter: filterValue
    });
  });
  // change is-checked class on buttons
  $('ul.filter').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'li', function () {
      $buttonGroup.find('.active').removeClass('active');
      $(this).addClass('active');
    });
  });
}
  //menu
  // $(".menu-toggler").click(function(){
  //   $(".header-bottom-area").addClass("show");
  //   $(".search-bar,.header-links-area,.header-action-area").addClass("ds-none");
  //   $(this).addClass('nextclick');

  // });


  //   $(".menu-toggler-two").click(function(){
  //     $(".header-menu-content").addClass("open");
  //   $(".search-bar,.header-links-area,.header-action-area").removeClass("ds-none");
  //   $(".menu-toggler-wrapper").addClass("ds-none");
    
  // });
  
  

})(jQuery);