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
    <link href="bower_components/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700" rel="stylesheet">
		<link href="css/bootstrap-social.css" rel="stylesheet">
		<link href="css/mystyles.css" rel="stylesheet">
	    <?php
	      $archivo = basename($_SERVER['PHP_SELF']);
	      $pagina = str_replace(".php", "", $archivo);
				if($pagina == 'gallery'){
		      echo '<link rel="stylesheet" href="css/lightbox.min.css">';
		    }
	    ?>
		</head>
		<body class="<?php echo $pagina; ?>">
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="nav-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
						data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">Créer</a>
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
							<li id="gallery-menu-item">
								<a class="menu-item" href="gallery.php">
									<i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Galer&iacute;a
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<?php include_once 'order.php'; ?>
			<div id="reserveModal" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title"><span id="order_label">Tu pedido</span>&nbsp;</h4>
						</div>
						<div class="modal-body">
							<form name="order_form" id="order_form" class="form-horizontal" method="post" action="mail.php">
								<div class="form-group has-feedback">
									<label for="nombre" class="col-sm-2 control-label">
										Nombre
									</label>
									<div class="col-sm-6">
										<input type="input" class="form-control" id="nombre" name="nombre" required>
		          		</div>
								</div>
								<div class="form-group has-feedback">
									<label for="mail_contacto" class="col-sm-2 control-label">
										Mail de contacto
									</label>
									<div class="col-sm-6">
										<input type="email" class="form-control" id="mail_contacto" name="mail_contacto" required>
		          		</div>
								</div>
								<div class="form-group has-feedback">
									<label for="nombre" class="col-sm-2 control-label">
										Pedido
									</label>
									<div class="col-sm-8">
										<textarea class="form-control" id="text_pedido" name="text_pedido" rows=8 placeholder="Aquí podés detallar tu pedido..." required></textarea>
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
								Podés <a href="tel:+5491151093079" class="alert-link">llamarnos</a> en caso de que tengas alguna consulta al 119999999
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
		          <div class="pedido">
		  					<a type="button" class="btn btn-warning btn-block btn-pedir" onclick="openReservation();">
		            		<span class="fas fa-concierge-bell icon-btn-pedido" aria-hidden="true"></span>Ped&iacute; presupuesto
		          	</a>
		          </div>
		        </div>
				  </div>
				</div>
	  	</header>
