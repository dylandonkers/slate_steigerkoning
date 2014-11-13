jQuery(document).ready(function($) {

  $(".category-item a").click(function() {
    $(".category-item a").removeClass("nav-product-active");
    if ($(this).parent().hasClass("category-id-1295")) {
      $(this).addClass("nav-product-active");
    } else if ($(this).parent().hasClass("category-id-1315")) {
      $(this).addClass("nav-product-active");
    } else if ($(this).parent().hasClass("category-id-1319")) {
      $(this).addClass("nav-product-active");
    }
  });


  if ($("ul.Navigation-list li:nth-child(2) a").hasClass("is-active")) {
    $(".category-id-1295 a").trigger("click");

  } else if ($("ul.Navigation-list li:nth-child(3) a").hasClass("is-active")) {
    $(".category-id-1315 a").trigger("click");
  } else {
    $(".category-id-1319 a").trigger("click");
  }
});
