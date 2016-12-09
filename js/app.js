var i = 0;
$(window).scroll(function () {
  var px = $(this).innerHeight();
  if (i == 1) {
    $('.header-full-height .nav').css('position', 'fixed');
  }else{
    if( window.pageYOffset > px ) {
      $('.header-full-height .nav').css('position', 'fixed').css('background-color', '#00AEB3');
      $('.header-full-height .nav .logo').css('opacity', '1');
    }else{
      $('.header-full-height .nav').css('position', 'relative').css('background-color', 'transparent');
      $('.header-full-height .nav .logo').css('opacity', '0');
    }
  }
  if( window.pageYOffset > px ) {
    $('.header-full-height .nav').css('position', 'fixed').css('background-color', '#00AEB3');
    $('.header-full-height .nav .logo').css('opacity', '1');
  }
});
$('#nav-trigger').click(function(){
    if (i == 0) {
      $('.header-full-height .nav').css('position', 'fixed');
      $('.hamburger:after').css('color', 'red');
      $('.logo').animate({
        left: "-50vw"
      }, 1000);

      $('#wrapper').animate({
        left: "47vw"
      }, 1200);

      $('.lists').animate({
        left: "-50vw"
      }, 750);

      $('.hamburger').animate({
        right: "45vw"
      }, 1000);

      i += 1;

    }else{
      $('.nav').css('position', 'fixed');
      $('.logo').animate({
        left: "0vw"
      }, 1000);

      $('.lists').animate({
        left: "-100vw"
      }, 1200);
      $('#wrapper').animate({
        left: "0vw"
      }, 1000);

      $('.hamburger').animate({
        right: "0vw"
      }, 1000);
      i -= 1;
    }
})

  $('.ancla').click(function(){
      var link = $(this);
      var anchor  = link.attr('href');
      $('.nav-active').removeClass('nav-active');
      link.addClass('nav-active');
      $('html, body').stop().animate({
          scrollTop: jQuery(anchor).offset().top
      }, 1000);
      return false;
  });

// function resise(px){
//     var px = px;
//   $(".height_fixin").css("height", px + "px");
//   // $("#wrapper .nosotros").css("height", px + "px");
//  //  $("#wrapper .servicios").css("height", px + "px");
//   // $("#wrapper .contacto").css("height", px + "px");
//   // $("#wrapper .section_title").css("height", px /2 + "px");
//   // $("#wrapper .header .logo").css("padding-top", px / 4 + "px");
//   lol(px);

// };

// function lol (px) {
//   $(window).scroll(function () {
//     if( window.pageYOffset > px -50 ) {
//       setTimeout(function(){
//         $('#nav').css('position', 'fixed').addClass('magictime boingInUp');
//       }, 0);
//     }else{
//         $("#nav").removeClass('magictime boingInUp').css('position', 'relative');

//     }
//   });
// }



//   var serviceColor = ["rgba(255, 117, 0, 0.78);",
//    "rgba(0, 174, 179, 0.82);",
//     "rgba(198, 71, 220, 0.68);",
//     "rgba(255, 17, 0, 0.9);",
//     "rgba(48, 73, 212, 0.84);",
//     "rgba(255, 117, 0, 0.70);"];

//   var serviceContent = ["<h1>Servicio 1</h1>",
//    "<h1>Servicio 2</h1>",
//     "<h1>Servicio 3</h1>",
//     "<h1>Servicio 4</h1>",
//     "<h1>Servicio 5</h1>",
//     "<h1>Servicio 6</h1>"];

//   $('.service-click').click(function(event){


//     var link = $(this).attr('id');
//     var positonColor = $(this).attr('data-id');
//     event.preventDefault();
//     $('.servicio .servicio-imagen').css('display', 'none');
//     $('.servicio a').css('display', 'none');
//     $('.servicio').addClass('servicio_list_box');
//     $('.service').addClass('service_list');
//     $('.servicio').removeClass('servicio').addClass('servicio_list', 600, "easeOutBounce");
//     $('.img_center').removeClass('img_center');
//     $('.append-service').remove();
//     $('.servicio_containter').append('<div class="append-service" style="opacity:1;position:absolute;top:0;left:-100%;left: 20.8%;width: 70%;height: 100%;background-color:' + serviceColor[positonColor] + '">'+ serviceContent[positonColor] +'</div>');
//     test();
//   });

// function test(){
//   $('.service_list').click(function(){
//     var positonColor = $(this).attr('data-id');
//     $('.append-service').remove();
//     $('.servicio_containter').append('<div class="append-service" style="opacity:1;position:absolute;top:0;left:20.8%;width: 0%;height: 100%;background-color:' + serviceColor[positonColor] + '">'+ serviceContent[positonColor] +'</div>');
//     $('.append-service').animate({
//     // opacity: 0.25,
//     width: '70%',
//     // left: "+=50",
//     // height: "toggle"
//   }, 1000, function() {
//     // Animation complete.
//   });
//   });
  
// }
