jQuery(document).ready(function($) {
   var s = window.location.href + '/';
   var x = window.location.href;
   

  if (s.indexOf("/verhuur/") > -1 || s.indexOf("1296") > -1 || s.indexOf("1305") > -1 || s.indexOf("1333") > -1 || s.indexOf("1322") > -1 || s.indexOf("1311") > -1
    || s.indexOf("1317") > -1 || s.indexOf("1332") > -1 || s.indexOf("1308") > -1 || s.indexOf("1326") > -1 || s.indexOf("1316") > -1 || s.indexOf("1321") > -1
    || s.indexOf("1310") > -1 || s.indexOf("1314") > -1 || s.indexOf("1294") > -1 || s.indexOf("1289") > -1 || s.indexOf("1328") > -1 || s.indexOf("1301") > -1
    || s.indexOf("1301") > -1 || s.indexOf("1301") > -1
    || s.indexOf("1309") > -1   || s.indexOf("1304") > -1 ){
    $("#sytematic_webshop_categorywidget-3 ul li:nth-child(4)").addClass("hide-sidenav-title");
    if ($(window).width() > 700){  
       $("#sytematic_webshop_categorywidget-3 ul li:nth-child(2)").addClass("show-sidenav");
    }   
  }
  else if (s.indexOf("/verkoop/") > -1 ) {
    $("#sytematic_webshop_categorywidget-3 ul li:nth-child(1)").addClass("hide-sidenav-title");
    if ($(window).width() > 700){ 
      $("#sytematic_webshop_categorywidget-3 ul li:nth-child(5)").addClass("show-sidenav");
    }
  }
 
  /*$(".category-item a").click(function() {
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
  }*/
});
