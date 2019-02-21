$(function(){
  $('body.index .navbar-principal ul li#index-menu-item').
    addClass('active');
  $('body.contactus .navbar-principal ul li#contactus-menu-item').
    addClass('active');
  $('body.products .navbar-principal ul li#products-menu-item').
    addClass('active');
  $('body.gallery .navbar-principal ul li#gallery-menu-item').
    addClass('active');

  // Botones productos
  var btnPanaderia = document.getElementById('btn-panaderia');
  var btnPasteleria = document.getElementById('btn-pasteleria');
  var btnOtros = document.getElementById('btn-otros');
  btnPanaderia.addEventListener('click', showPanaderiaProducts);
  btnPasteleria.addEventListener('click', showPasteleriaProducts);
  btnOtros.addEventListener('click', showOtrosProducts);

  function showPanaderiaProducts(){
    var element = document.getElementById('panaderia');
    if(element.style.display == "block"){
      element.style.display = "none";
    } else {
      element.style.display = "block";
      document.getElementById('pasteleria').style.display = "none";
      document.getElementById('otros').style.display = "none";
    }
  }

  function showPasteleriaProducts(){
    var element = document.getElementById('pasteleria');
    if(element.style.display == "block"){
      element.style.display = "none";
    } else {
      element.style.display = "block";
      document.getElementById('panaderia').style.display = "none";
      document.getElementById('otros').style.display = "none";
    }
  }

  function showOtrosProducts(){
    var element = document.getElementById('otros');
    if(element.style.display == "block"){
      element.style.display = "none";
    } else {
      element.style.display = "block";
      document.getElementById('panaderia').style.display = "none";
      document.getElementById('pasteleria').style.display = "none";
    }
  }
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
