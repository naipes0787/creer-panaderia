<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <link rel="icon" href="img/site_icon.png">
    <title>Cr&eacute;er Panader&iacute;a</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    <?php
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
    ?>
	</head>
	<body class="<?php echo $pagina; ?>">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="nav-header">
					<span class="menu-title">Créer</span>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-principal navbar-collapse collapse">
					<ul class="nav navbar-nav">
	        	<li id="index-menu-item">
							<a class="menu-item" href="index.php">
								<span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;Inicio
							</a>
						</li>
						<li id="contactus-menu-item">
	          	<a class="menu-item" href="contactus.php">
	            	<i class="fas fa-envelope"></i>&nbsp;&nbsp;Contacto
	            </a>
						</li>
						<li id="products-menu-item">
							<a class="menu-item" href="products.php">
								<i class="fas fa-utensils"></i>&nbsp;&nbsp;Nuestros Productos
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="reserveModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><span id="order_label">Tu pedido</span>&nbsp;</h4>
					</div>
					<div class="modal-body">
						<form name="order_form" id="order_form" class="form-horizontal" method="post" action="php/mails.php">
							<div class="form-group">
		          	<label for="chipa" class="col-sm-2 control-label">
		            	Chip&aacute;s
		            </label>
								<select name="chipa" id="chipa" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
							</div>
							<div class="form-group">
								<label for="cuerno" class="col-sm-2 control-label">
									Cuernitos
								</label>
								<select name="cuerno" id="cuerno" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
							</div>
							<div class="form-group">
		          	<label for="factura" class="col-sm-2 control-label">
		            	Facturas
		            </label>
								<select name="factura" id="factura" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="6">6</option>
									<option value="12">12</option>
									<option value="18">18</option>
									<option value="24">24</option>
									<option value="30">30</option>
									<option value="36">36</option>
								</select>
							</div>
							<div class="form-group">
		          	<label for="figaza" class="col-sm-2 control-label">
		            	Figazas
		            </label>
								<select name="figaza" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
							</div>
							<div class="form-group">
		          	<label for="grisin" class="col-sm-2 control-label">
		            	Grisines
		            </label>
								<select name="grisin" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
								<span>
									&nbsp;Integral
								</span>
								<input type="checkbox" name="grisinintegral" class="input-good-looking">
							</div>
							<div class="form-group">
		          	<label for="panettone" class="col-sm-2 control-label">
		            	Panettones
		            </label>
								<select name="panettone" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.5">1/2kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
							</div>
							<div class="form-group">
		          	<label for="panarabe" class="col-sm-2 control-label">
		            	Pan árabe
		            </label>
								<select name="panarabe" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
								<span>
									&nbsp;Integral
								</span>
								<input type="checkbox" name="panarabeintegral">
							</div>
							<div class="form-group">
								<label for="pancebolla" class="col-sm-2 control-label">
									Pan Cebolla
								</label>
								<select name="pancebolla" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
								<span>
									&nbsp;Integral
								</span>
								<input type="checkbox" name="pancebollaintegral">
							</div>
							<div class="form-group">
								<label for="panflauta" class="col-sm-2 control-label">
									Pan flautita
								</label>
								<select name="panflauta" class="selectpicker select-good-looking">
									<option selected value="0"> 0 </option>
									<option value="0.25">1/4kg</option>
									<option value="0.5">1/2kg</option>
									<option value="0.75">3/4kg</option>
									<option value="1">1kg</option>
									<option value="2">2kg</option>
									<option value="3">3kg</option>
								</select>
								<span>
									&nbsp;Integral
								</span>
								<input type="checkbox" name="panflautaintegral">
							</div>
							<h4 class="modal-header">Datos de envío</h4>
							<div class="form-group has-feedback">
								<label for="nombre" class="col-sm-2 control-label">
									Nombre
								</label>
								<div class="col-sm-4">
									<input type="input" class="form-control" id="nombre" name="nombre" required>
	          		</div>
							</div>
							<div class="form-group has-feedback">
								<label for="mail_contacto" class="col-sm-2 control-label">
									Mail de contacto
								</label>
								<div class="col-sm-4">
									<input type="email" class="form-control" id="mail_contacto" name="mail_contacto" required>
	          		</div>
							</div>
							<div class="form-group has-feedback">
	          		<label for="date" class="col-sm-2 control-label">
	          			D&iacute;a y horario
	          		</label>
	          		<div class="col-sm-4">
									<input type="date" class="form-control datetime-form" id="date" name="date" required>
	         				<span class="glyphicon glyphicon-calendar form-control-feedback " aria-hidden="true"></span>
	          		</div>
	          		<div class="col-sm-4">
									<input type="time" class="form-control datetime-form" id="time" name="time" min="9:00" max="18:00" step="1800" required>
	          			<span class="glyphicon glyphicon-time form-control-feedback" aria-hidden="true"></span>
	          		</div>
	          		<div class="col-sm-2">
	          		</div>
	          	</div>
	          	<div class="form-group">
	          		<div class="col-sm-offset-2 col-sm-10">
	          			<button type="submit" class="btn btn-primary">
	          				Pedir
	          			</button>
	          			<button type="button" class="btn btn-default btn-sm"
										data-dismiss="modal">
										Cancelar
									</button>
	          		</div>
							</div>
						</form>
						<div class="alert alert-warning alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							Por favor, <a href="tel:+5491151093079" class="alert-link">llamanos</a> en caso de que tengas alguna consulta.
						</div>
					</div>
				</div>
			</div>
		</div>
    <header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1 translate="no">Cr&eacute;er Panader&iacute;a</h1>
                    <p class="slogan">El amor a lo dulce junto a la devoci&oacute;n por el arte de cocinar
                    es lo que renueva nuestra inspiraci&oacute;n para crear las mejores
                    delicias de panader&iacute;a y pasteler&iacute;a.</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <img src="img/logo.png" class="img-responsive">
                </div>
				<div class="col-xs-12 col-sm-2">
          <div class="pedido">
  					<a type="button" class="btn btn-warning btn-block btn-pedir" onclick="openReservation();">
            		&nbsp;&nbsp;<span class="fas fa-concierge-bell" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Hac&eacute; tu pedido&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          	</a>
          </div>
        </div>
      </div>
    </div>
  </header>
