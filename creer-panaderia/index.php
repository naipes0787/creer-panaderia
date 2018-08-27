<?php include_once 'includes/templates/header.php'; ?>
	<div class="container">
		<div class="row row-content">
			<div class="col-xs-12">
				<div id="mycarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
						<li data-target="#mycarousel" data-slide-to="1"></li>
						<li data-target="#mycarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img class="media-object img-thumbnail"
							 src="img/descuento.png" alt="Descuento">
							<div class="carousel-caption">
								<h2 class="carousel-header">Panettone  <span class="label label-danger">Descuento</span> <span class="badge">$20</span></h2>
								<p class="carousel-description">Panettone, mejor conocido como pan dulce, con chips de chocolate.
								Viene en tres tama&ntilde;os: peque&ntilde;o, mediano o grande.
								El precio publicado es por el peque&ntilde;o. </p>
							</div>
						</div>
						<div class="item">
							<img class="media-object img-thumbnail"
                        		src="img/promocion.png" alt="Promoci&oacute;n">
							<div class="carousel-caption">
								<h2 class="carousel-header">Combo para cuatro <span class="label label-danger label-xs">Nuevo</span></h2>
								<p class="carousel-description">En diciembre tenemos un combo de promoci&oacute;n para
		              cuatro personas: 4 bolas de fraile, 1 cremona, 6 medialunas y
		              una docena de bizcochos de grasa. Todo por $400!
								</p>
							</div>
						</div>
						<div class="item">
							<img class="media-object img-thumbnail"
		                       src="img/jose.png" alt="Jose De Lajonquiere">
							<div class="carousel-caption">
								<h2  class="carousel-header" translate="no">Jose De Lajonquiere</h2>
								<p class="carousel-description">L&iacute;der de cocina, especializado en panader&iacute;a y
									pasteler&iacute;a. Realiz&oacute; cursos en distintos
									institutos, entre ellos: LYC&Eacute;E, Gato Dumas y EAG.
								</p>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
          <div class="btn-group" id="carouselButtons">
            <button class="btn btn-danger btn-sm" id="carousel-pause">
        	    <span class="fa fa-pause" aria-hidden="true"></span>
            </button>
            <button class="btn btn-danger btn-sm" id="carousel-play">
        	    <span class="fa fa-play" aria-hidden="true"></span>
            </button>
          </div>
				</div>
			</div>
		</div>
      <div class="row row-content home-row">
        <div class="col-xs-12 col-sm-3 col-sm-push-9">
            <p style="padding:20px;"></p>
            <h3 align="center">Descuento en delicias</h3>
        </div>
        <div class="col-xs-12 col-sm-9 col-sm-pull-3">
            <div class="media">
                <div class="media-left media-middle media-images">
                    <a href="#">
                    <img class="media-object img-thumbnail"
                     src="img/descuento.png" alt="Descuento">
                    </a>
                </div>
                <div class="media-body">
                    <h2 class="media-heading">
                    	Panettone
                    	<span class="label label-danger">Descuento</span>
                    	<span class="badge">$20</span>
                    </h2>
                    <p>Panettone, mejor conocido como pan dulce, con chips de chocolate.
					Viene en tres tamaños: peque&ntilde;o, mediano o grande.
					El precio publicado es por el peque&ntilde;o.</p>
                </div>
            </div>
        </div>
      </div>
      <div class="row row-content home-row">
        <div class="col-xs-12 col-sm-3">
            <p style="padding:20px;"></p>
            <h3 align="center">Promoci&oacute;n de este mes!</h3>
        </div>
        <div class="col-xs-12 col-sm-9">
      		<div class="media">
          	<div class="media-body">
              <h2 class="media-heading">
                Combo para cuatro
                <span class="label label-danger">Nuevo</span>
							</h2>
              <p>En diciembre tenemos un combo de promoci&oacute;n para
              cuatro personas: 4 bolas de fraile, 1 cremona, 6 medialunas y
              una docena de bizcochos de grasa. Todo por $400! </p>
						</div>
						<div class="media-right media-middle media-images">
            	<a href="#">
            		<img class="media-object img-thumbnail" src="img/promocion.png" alt="Promoci&oacute;n">
              </a>
						</div>
					</div>
        </div>
      </div>
      <div class="row row-content home-row">
        <div class="col-xs-12 col-sm-3 col-sm-push-9">
          <p style="padding:20px;"></p>
          <h3 align="center">Conoc&eacute; a nuestro l&iacute;der de cocina</h3>
        </div>
        <div class="col-xs-12 col-sm-9 col-sm-pull-3">
          <div class="media">
            <div class="media-left media-middle media-images">
              <a href="#">
              <img class="media-object img-thumbnail" src="img/jose.png" alt="Jose De Lajonquiere">
              </a>
            </div>
            <div class="media-body">
              <h2 class="media-heading" translate="no">Jose De Lajonquiere</h2>
              <h4 class="media-subheading">L&iacute;der de cocina</h4>
              <p>Especializado en panader&iacute;a y
	   						pasteler&iacute;a. Realiz&oacute; cursos en distintos
	   						institutos, entre ellos: LYC&Eacute;E, Gato Dumas y EAG.
              </p>
            </div>
          </div>
        </div>
    </div>
  </div>
<?php include_once 'includes/templates/footer.php'; ?>
<script>
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
</script>
