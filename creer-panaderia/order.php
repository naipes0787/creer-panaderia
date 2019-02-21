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
              D&iacute;a de entrega
            </label>
            <div class="col-sm-5">
              <input type="date" class="form-control datetime-form form-with-icon" id="date" name="date" required>
              <i class="fas fa-calendar-alt"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <label for="date" class="col-sm-2 control-label">
              Horario de entrega
            </label>
            <div class="col-sm-4">
              <input type="time" class="form-control datetime-form form-with-icon" id="time" name="time" min="9:00" max="18:00" step="1800" required>
              <i class="far fa-clock"></i>
            </div>
          </div>

          <div class="form-group has-feedback">
            <div class="divTable col-sm-8">
              <div class="divTableBody">
                <div class="products-category">
  		  					<a type="button" id="btn-panaderia" class="btn btn-block btn-products">
  		            		Panadería
  		          	</a>
  		          </div>
                <div id="panaderia" class="contenedor-productos">
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;PRODUCTO</div>
                    <div class="divTableCell">&nbsp;PRECIO</div>
                    <div class="divTableCell">&nbsp;CANTIDAD</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Figaza de manteca</div>
                    <div class="divTableCell">&nbsp;$30 por kilo</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="figaza" name="nombre" size="4" required> kilos</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan alemán</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="panAleman" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan árabe</div>
                    <div class="divTableCell">&nbsp;$100 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="panArabe" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan de campo</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan de maíz</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan integral</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan lactal</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan multicereal</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan saborizado</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                </div>
                <div class="products-category">
  		  					<a type="button" id="btn-pasteleria" class="btn btn-block btn-products">
  		            		Pastelería
  		          	</a>
  		          </div>
                <div id="pasteleria" class="contenedor-productos">
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;PRODUCTO</div>
                    <div class="divTableCell">&nbsp;PRECIO</div>
                    <div class="divTableCell">&nbsp;CANTIDAD</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Alfajor de maicena</div>
                    <div class="divTableCell">&nbsp;$30 por kilo</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> kilos</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Budín</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Bocado de coco y ddl</div>
                    <div class="divTableCell">&nbsp;$100 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Dona</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Galletita de avena</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Galletita de manteca</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Medialuna de grasa</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Medialuna de manteca</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan de leche</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pastafrola</div>
                    <div class="divTableCell">&nbsp;$30 por kilo</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> kilos</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Scon</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Torta de manzana</div>
                    <div class="divTableCell">&nbsp;$100 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Torta de ricota</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                </div>
                <div class="products-category">
  		  					<a type="button" id="btn-otros" class="btn btn-block btn-products">
  		            		Otros
  		          	</a>
  		          </div>
                <div id="otros" class="contenedor-productos">
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;PRODUCTO</div>
                    <div class="divTableCell">&nbsp;PRECIO</div>
                    <div class="divTableCell">&nbsp;CANTIDAD</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Bizcochos de grasa</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Chipá</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Chips</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Cremona</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Cuernitos</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Focacha</div>
                    <div class="divTableCell">&nbsp;$30 por kilo</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> kilos</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Galletitas de cereal</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Galletitas de jengibre</div>
                    <div class="divTableCell">&nbsp;$100 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pan dulce</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Panettone</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Pizzetas</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Prepizza</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                  <div class="divTableRow">
                    <div class="divTableCell">&nbsp;Stollen</div>
                    <div class="divTableCell">&nbsp;$10 por unidad</div>
                    <div class="divTableCell">&nbsp;<input type="input" class="products-input" id="nombre" name="nombre" size="4" required> unidades</div>
                  </div>
                </div>
              </div>
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
