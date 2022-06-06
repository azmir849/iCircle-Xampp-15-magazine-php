$(function(){
  // serach
  $(document).ready(function(){
    $(".search").click(function(){
      $(".searchBar").toggle();
    });
  });


// Navbar Part  
$(window).scroll(function(){
  if ($(this).scrollTop() > 5) {
     $('.navBar').addClass('navBarNewClass');
  } else {
     $('.navBar').removeClass('navBarNewClass');
  }
});
// Banner Slider
$('.banner').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll:1,
  arrows:true,
  autoplay: true, 
  autoplaySpeed: 4000,
  speed: 800,
  dots:false,
  prevArrow:'<i class="fas fa-chevron-left Prev"></i>', 
  nextArrow:'<i class="fas fa-chevron-right Next"></i>',
  responsive: [
    {
      breakpoint: 968,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 767,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '0px',
        slidesToShow:1
      }
    }
  ]
});

   // Back to Top 
   var btn = $('.backtotop');
   $(window).scroll(function() {
     if ($(window).scrollTop() > 100) {
       btn.addClass('show');
     } else {
       btn.removeClass('show');
     }
   });
   btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
 
  

});

