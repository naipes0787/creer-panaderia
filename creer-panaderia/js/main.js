$(function(){
  $('body.index .navbar-principal ul li#index-menu-item').
    addClass('active');
  $('body.contactus .navbar-principal ul li#contactus-menu-item').
    addClass('active');
  $('body.products .navbar-principal ul li#products-menu-item').
    addClass('active');
});

$(document).ready(function(){
  $("#mycarousel").carousel( { interval: 4000 } );
  $("#carousel-pause").click(function(){
    $("#mycarousel").carousel('pause');
  });
  $("#carousel-play").click(function(){
    $("#mycarousel").carousel('cycle');
  });
});
function openReservation(){
  $("#reserveModal").modal('show');
}
function openLogin(){
  $("#loginModal").modal('show');
}
