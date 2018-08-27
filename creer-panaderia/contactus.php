<?php include_once 'includes/templates/header.php'; ?>
  <div class="container">
      <div class="row">
          <div class="col-xs-12">
             <h3>Contactanos</h3>
             <hr>
          </div>
      </div>
      <div class="row row-content row-contactus">
         <div class="col-xs-12">
            <h3>Información de ubicación</h3>
         </div>
          <div class="col-xs-12 col-sm-4 col-sm-offset-1 contact-class">
                 <h6>Nuestra direcci&oacute;n</h6>
                 <address>
			              Urquiza 2240<br>
			              Quilmes, Buenos Aires<br>
			              ARGENTINA<br>
						  		  <i class="fa fa-phone"></i>: 1151093079<br>
			              <i class="fa fa-envelope"></i>: <a href="mailto:pedidospanaderiajl@gmail.com">pedidospanaderiajl@gmail.com</a>
	           		 </address>
          </div>
          <div class="container-fluid">
              <h5 class="map-class col-xs-12 col-sm-6">Mapa</h5>
							<iframe class="col-xs-12 col-sm-6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.725375535823!2d-58.26803578427927!3d-34.737316080425146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32e645f941c2b%3A0x58dc08dc575f53f5!2sUrquiza+2240%2C+Quilmes%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1513270415984" height="300" frameborder="0" style="border:0"></iframe>
          </div>
					<br><br>
          <div id="btn-group-contactus-1" class="col-xs-12 col-sm-11 col-sm-offset-1">
              <div class="col-xs-12 btn-group" role="group" aria-label="...">
              	<a type="button" class="btn btn-success button-contactus" href="https://api.whatsapp.com/send?phone=+5491151093079">
              		<i class="fab fa-whatsapp"></i> Whatsapp
              	</a>
              	<a type="button" class="btn btn-info button-contactus">
              		<i class="fab fa-skype"></i> Skype
              	</a>
              	<a type="button" class="btn btn-primary button-contactus" href="mailto:pedidospanaderiajl@gmail.com">
              		<i class="fas fa-envelope"></i> Email
              	</a>
              </div>
          </div>
      </div>
      <div class="row row-content row-contactus">
         <div class="col-xs-12">
            <h3>Consultas y sugerencias</h3>
         </div>
          <div class="col-xs-12 col-sm-9">
              <form class="form-horizontal" role="form">
              	<div class="form-group">
              		<label for="firstname" class="col-xs-12 col-sm-2 control-label">
              			Nombre
              		</label>
              		<div class="col-xs-12 col-sm-10">
              			<input type="text" class="form-control" id="firstname" name="firstname" placeholder="Ingres&aacute; tu nombre" required>
              		</div>
              	</div>
              	<div class="form-group">
              		<label for="lastname" class="col-xs-12 col-sm-2 control-label">
              			Apellido
              		</label>
              		<div class="col-xs-12 col-sm-10">
              			<input type="text" class="form-control" id="lastname" name="lastname" placeholder="Ingres&aacute; tu apellido" required>
              		</div>
              	</div>
              	<div class="form-group">
              		<label for="telnum" class="col-xs-12 col-sm-2 control-label">
              			Tel&eacute;fono de contacto
              		</label>
              		<div class="col-xs-12 col-sm-4 col-md-3">
                		<div class="input-group">
                			<div class="input-group-addon">(</div>
                				<input type="tel" class="form-control" id="areacode" name="areacode" placeholder="C&oacute;digo de &aacute;rea">
                			<div class="input-group-addon">)</div>
                		</div>
              		</div>
              		<div class="col-xs-12 col-sm-6 col-md-7">
              			<input type="tel" class="form-control" id="telnum" name="telnum" placeholder="N&uacute;mero">
              		</div>
              	</div>
              	<div class="form-group">
              		<label for="emailid" class="col-xs-12 col-sm-2 control-label">
              			Email
              		</label>
              		<div class="col-xs-12 col-sm-10">
              			<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email" required>
              		</div>
              	</div>
              	<div class="form-group">
            			<label class="checkbox-inline col-xs-12 col-sm-2">
            				<strong>¿Por qué medio quer&eacute;s que te contactemos?</strong>
            			</label>
              		<div class="col-xs-12 col-sm-3">
              			<select class="form-control">
              				<option>Email</option>
											<option>Tel.</option>
              			</select>
              		</div>
              	</div>
              	<div class="form-group">
              		<label for="feedback" class="col-xs-12 col-sm-2 control-label">
              			Comentarios
              		</label>
              		<div class="col-xs-12 col-sm-10">
              			<textarea class="form-control" id="feedback" name="feedback" rows=12 placeholder="Dejanos aquí tu comentario" required></textarea>
              		</div>
              	</div>
              	<div class="form-group">
              		<div class="col-sm-offset-2 col-sm-10">
              			<button type="submit" class="btn btn-primary">
              				Enviar
              			</button>
              		</div>
              	</div>
              </form>
          </div>
           <div class="col-xs-12 col-sm-3">
              <p style="padding:20px;"></p>
          </div>
     </div>
  </div>
<?php include_once 'includes/templates/footer.php'; ?>
