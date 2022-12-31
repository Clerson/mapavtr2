<div class="modal fade" id="insert">
  <div class="modal-dialog" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title"><i class="fas fa-truck"></i> Inserindo Novo Veículo</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-1 gy-1 text-center">
          <div class="col-sm">

            <form action='model.php' method='POST' class='row gx-1 gy-1 text-center'>

              <div class="input-group">
                <span class="input-group-text">Nomenclatura</span>
                <input type="text" class="form-control" name="vtrtipo" required  placeholder="Nomenclatura" >
              </div>
              <div class="input-group">
                <span class="input-group-text">Prefixo</span>
                <input type="text" class="form-control" name="vtrpref" required  placeholder="Prefixo" > 
              </div>
              <div class="input-group">
                <span class="input-group-text">Marca/Modelo</span>
                <input type="text" class="form-control"  name="vtrmarcamod"  placeholder="Marca/Modelo" required >
              </div>
              <div class="input-group">
                <span class="input-group-text">Ano de fabricação</span>
                <input type="number" class="form-control"  name="vtrano"  value="<?=date('Y');?>" placeholder="Ano de fabricação" required>
              </div>
              <div class="input-group">
                <span class="input-group-text">Status</span>
                <select class="form-select"  name="vtrstatus" placeholder="Status" required>
                  <option value="ATIVA">Ativa</option>
                  <option value="INATIVA">Inativa</option>
                </select>
              </div>
            
              <div class="form-floating">
                <button type="submit" class="btn btn-primary " name="acao" value="vtrinsert">Enviar</button>
              </div>
            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>