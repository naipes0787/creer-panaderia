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
            <label for="nombre" class="col-sm-2 control-label">
              Pedido
            </label>
            <div class="col-sm-4">
              <textarea class="form-control" style="width:auto!important!" id="text_pedido" name="text_pedido" rows=7 cols=8 placeholder="Aquí podés detallar tu pedido..." required></textarea>
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
