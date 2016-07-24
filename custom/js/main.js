// --------------------------------------------------------- //
// DOCUMENT READY
// --------------------------------------------------------- //
$(document).ready(function() {

  $('.partners-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    infinite: true,
	slidesToShow: 4,
	slidesToScroll: 1,
	responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });

});

// --------------------------------------------------------- //
// DOCUMENT READY
// --------------------------------------------------------- //
$(window).load(function() {

	$('#loading').fadeOut();

});

// --------------------------------------------------------- //
// FUNCTION NAME
// --------------------------------------------------------- //
$('.box-dialog__head').click(function(){
  $('.box-dialog__head i').toggleClass('rotate');
  $('.box-dialog__content').slideToggle(300);
});

// --------------------------------------------------------- //
// MENU
// --------------------------------------------------------- //
$('.resp-menu-bt').click(function(){
  $('.site-navigation').fadeIn(300);
});
$('.close-resp-menu-bt').click(function(){
  $('.site-navigation').fadeOut(300);
});