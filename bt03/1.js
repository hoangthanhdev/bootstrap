$(document).ready(function(){
  $(".navbar-right li:nth-child(2) a").click(function(){
    $("html, body").animate({scrollTop:1000},800);
  });
});
