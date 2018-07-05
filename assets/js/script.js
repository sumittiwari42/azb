// Dropdown Menu
if ($(this).width() > 768) {
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
}

$(document).ready(function(){
  $(".practicearea-tabs h4").click(function(){
    $(".practicearea-tabs ul").slideToggle();
  });  

	  $(".menu-item-has-children").addClass("dropdown");
    $(".menu-item-has-children > a").addClass("dropdown-toggle");
 	  $(".menu-item-has-children > a").attr("data-toggle" , "dropdown");
  	$(".sub-menu").addClass("dropdown-menu");
});    