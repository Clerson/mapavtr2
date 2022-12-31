<div class="modal fade" id="insert">
  <div class="modal-dialog modal-md" >
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-warning"><h4><i class="fas fa-wrench"></i> NOVA MANUTENÇÃO</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">

          <div class="col-sm">

            <form action='' method='POST' class='row gx-1 gy-1 text-center'>

              <div class="input-group row gx-2 gy-1 mb-2 text-center">

              <div class='form-floating col-sm'> 

                <select class='form-select' name='idvtr' onchange='atualizaOdomVtr(this.value)' required>

                  <?php

                   do  { ?> 
                    <option value='<?=$row_vtr["vtrid"]?>'><?=$row_vtr["vtrtipo"]?></option>
                    <?php } 
                  
                  while ($row_vtr = mysqli_fetch_assoc($result_vtr)); 

                   ?>
                </select>
                <label for='idvtr'>Veículo:</label>
              
              </div>


              <div class='form-floating col-sm'>
                <input type="date" class="form-control" value="<?=date('Y-m-d')?>" name="data" required>
                <label for='data'>Data:</label>
              </div>

              <div class='form-floating'> 

                <select class='form-select' name='tipoid' required>

                  <?php
                    $sql_manut_tipo = "SELECT * FROM manut_tipo";
                    $result_manut_tipo = mysqli_query($conn, $sql_manut_tipo);
                    $row_manut_tipo = mysqli_fetch_assoc($result_manut_tipo);

                   while ($row_manut_tipo = mysqli_fetch_assoc($result_manut_tipo)) { ?> 
                    <option value='<?=$row_manut_tipo["vtrmantipo_id"]?>'><?=$row_manut_tipo["vtrmantipo"]?></option>

                  <?php } 

                   ?>
                </select>
                <label for='tipoid'>Manutenção realizada:</label>
              </div>
              
              <div class='form-floating' id="odom">
                <input type="number" class="form-control" name="odom" required>
                <label for='odom'>KM atual (Mapa VTR):</label>
              </div>

              <div class='form-floating'>
                <input type="text" class="form-control" name="respons">
                <label for='respons'>Responsável pelo serviço:</label>
              </div>

              <div class='form-floating'>
              <textarea class="form-control" name="observ"></textarea>
                <label for='observ'>Observações:</label>
              </div>

              <div class="form-floating col-sm"> 
                <select class="form-select" name="status" required>
                  <option value='a'>Ativa</option>
                  <option value='p'>Programada</option>
                  <option value='c'>Concluída</option>
                  <option value='x'>Cancelada</option>
                </select>
                <label for="status">Status:</label>
              </div>

              <div class="form-floating">
                <button type="submit" class="btn btn-primary " name="acao" value="insert">Enviar</button>
              </div>
</div>

            </form>

        </div>

      </div>

    </div>

    <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#excluir<?=$id; ?>">
          <i class='fas fa-trash'></i>
        </button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>

