jQuery(document).ready(function($) {
  $("#shoppingcart").click(function() {
    $(".dropdown-menu").slideToggle();
  })
  $(".assortiment-link-scroll").click(function() {
    $('html,body').animate({
        scrollTop: $(".contact-page-p").offset().top
      },
      'slow');
  });
});
