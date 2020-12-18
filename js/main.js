$(document).ready(function () {  
  "use strict";

  $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
  }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
  });

  $(window).scroll(function(){
    var barra = $(window).scrollTop();
    var posicion = barra * 1000;
    $('bg_ventajas1').css({ 'background-position': '90 ' + posicion + 'px' });
  });
  
  var win = $(window);
  win.on("scroll", function () {
    var wScrollTop  = $(window).scrollTop();    
      if (wScrollTop > 150) {
        $("#main-header").addClass("header-colored");
      } else {
        $("#main-header").removeClass("header-colored");
      }
  });

  $('.owl-1').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: true,
    responsiveClass:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{ 
        items:3
      }
    }
  });
  
  var selector = $('.owl-1');
  $('.my-next-button').click(function() {
    selector.trigger('next.owl.carousel');
  });
  
  $('.my-prev-button').click(function() {
    selector.trigger('prev.owl.carousel');
  });

  /* Carousel #2 (Prensa Section) */
  $('.owl-2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:7000,
    responsiveClass:true,
    navText: [" <i class='fas fa-chevron-left'></i>","<i class='fas fa-chevron-right'></i>"],
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{ 
        items:3
      },
      1025:{
        nav:false,
      }
    }
  });

  /* Carousel #3 (Prefabricados Section) */
  $('.owl-3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    autoplay:true,
    autoplayTimeout:7000,
    responsiveClass:true,
    navText: [" <i class='fas fa-chevron-circle-left'></i>","<i class='fas fa-chevron-circle-right'></i>"],
    responsive:{
      0:{
        nav:false,
        items:2
      },
      600:{
        nav:false,
        items:3  
      },
      1000:{ 
        items:4
      }
    }
  });

  $('.owl-clientes').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots: true,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:7000,
    responsiveClass:true,
    navText: [" <i class='fas fa-chevron-circle-left'></i>","<i class='fas fa-chevron-circle-right'></i>"],
    responsive:{
      0:{
        items:2
      },
      600:{
        items:3
      },
      1000:{ 
        items:4
      }
    }
  });

  /* projects section */
  var  scrollButton = $('#scroll-top');
  win.on('scroll', function () {
    if ($(this).scrollTop() >= 700) {
      scrollButton.show();
    } else {
      scrollButton.hide();
    }
  });

  /* Click On Button To Scroll Top */
  scrollButton.on('click', function () {
    $('html,body').animate({ scrollTop : 0 }, 1100);
  });

  // section video youtube
  // poster frame click event
  $(document).on('click','.js-videoPoster',function(ev) {
    ev.preventDefault();
    var $poster = $(this);
    var $wrapper = $poster.closest('.js-videoWrapper');
    videoPlay($wrapper);
  });

  // play the targeted video (and hide the poster frame)
  function videoPlay($wrapper) {
    var $iframe = $wrapper.find('.js-videoIframe');
    var src = $iframe.data('src');
    $wrapper.addClass('videoWrapperActive');
    $iframe.attr('src',src);
  }

  // stop the targeted/all videos (and re-instate the poster frames)
  function videoStop($wrapper) {
    // if we're stopping all videos on page
    if (!$wrapper) {
      var $wrapper = $('.js-videoWrapper');
      var $iframe = $('.js-videoIframe');
    // if we're stopping a particular video
    } else {
      var $iframe = $wrapper.find('.js-videoIframe');
    }
    // reveal poster
    $wrapper.removeClass('videoWrapperActive');
    // remove youtube link, stopping the video from playing in the background
    $iframe.attr('src','');
  }

  $('a[href^="#"]').click(function() {
    var destino = $(this.hash);
    if (destino.length == 0) {
      destino = $('a[name="' + this.hash.substr(1) + '"]');
    }
    if (destino.length == 0) {
      destino = $('html');
    }
    $('html, body').animate({ scrollTop: destino.offset().top }, 1100);
    return false;
  });

  $(function () {
    $('.floating-wpp').floatingWhatsApp({
      phone: '57 3182153129',
      popupMessage: 'Este chat esta disponible para resolver sus inquietudes. Le responderemos en el menor tiempo posible.',
      showPopup: true,
      message: 'Escribe aqui ...',
      headerTitle: 'Chat Reciclados Industriales',
      position: 'left'
    });
  });
});

$(window).on("load",function (){
  $('.load-wrapp ').fadeOut(1900);  
});

$(document).ready(function() {
  
});
/* Pestañas de productos */
// Tabs por defecto      
(sessionStorage.getItem("tabMenu") == null) ? sessionStorage.setItem('tabMenu', 'tab_1') :  console.log('error');

tabLi = document.querySelectorAll(".tabMenu li");
tabs = document.querySelectorAll(".tabMenu li span");

tabs.forEach(tab => {  
                
  tab.addEventListener('click', function(event) {

    var anchor = document.getElementById('product').offsetTop;
    window.scrollTo(0, anchor);

    sessionStorage.setItem('tabMenu', tab.className);              

    // Tab no activa
    tabLi.forEach(t => {                       
        t.setAttribute('class', 'tabLi');
    })

    tabContent = document.querySelectorAll(".tabContent");
    tabContent.forEach(element => {

      // Seleccionando la segunda clase
      let className = (element) ? element.className.split(" ") : null;
      // Ocultar o mostrar TabContent
      (tab.className == className[1]) ? element.style.display = "block" : element.style.display = "none";
      (tab.className == className[1]) ? tab.parentElement.setAttribute('class', 'tabLi active') : undefined;

    });
  })

  activeTab = '.'+sessionStorage.getItem("tabMenu");         
  (activeTab) ? document.querySelector(".tabMenu " + activeTab).click() : document.querySelector(
  ".tabMenu .tab_1").click();
        
});
/* Fin Pestañas de productos */
