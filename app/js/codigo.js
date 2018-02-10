$(document).ready(function() {
 
  $("#banner").owlCarousel({
 
  /*  navigation : true, // Show next and prev buttons */
      slideSpeed : 500,
      paginationSpeed : 1000,
      singleItem:true, 
      autoPlay: 5500
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});