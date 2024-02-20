<div class="modal fade" id="form_insert">
  <div class="modal-dialog  modal-xl modal-dialog-centered">
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
            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control" name="vtrtipo" value="" placeholder="Nomenclatura"  required >
                  <label for='Nomenclatura'>Nomenclatura</label>
                </div>
              </div>
              <div class="col-sm" >  
                <div class="form-floating">
                  <input type="text" class="form-control" name="vtrpref" value="" placeholder="Prefixo"  >
                  <label for='pref'>Prefixo</label>
                </div>
              </div>
            
              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrmarcamod"   value="" placeholder="Marca/Modelo"  >
                  <label for='marcamod'>Marca/Modelo</label>
                </div>
              </div>
            </div>
            <div class="row gx-1 gy-1">     
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrano"  value="" placeholder="Ano de fabricação" >
                  <label for='ano'>Ano/Modelo</label>
                </div>
              </div>

              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrplaca"  value="" placeholder="Placa" >
                  <label for='placa'>Placa</label>
                </div>
              </div>
           
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrchassi"  value="" placeholder="Chassi" >
                  <label for='chassi'>Chassi</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrrenavan"  value="" placeholder="RENAVAN" >
                  <label for='renavan'>RENAVAN</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                 <select class="form-select"  name="vtrcombustivel"  value="" placeholder="Combustível" >
                    <option value="Gasolina">Gasolina</option>
                    <option value="Etanol">Etanol</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Diesel S10">Diesel S10</option>
                  </select> 
                  <label for='Combustível'>Combustível</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrpneu"  value="" placeholder="Pneu" >
                  <label for='pneu'>Pneu</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrodomatual"  value="" placeholder="000000">
                  <label for='odomatual'>Odometro atual (Mapa)</label>
                 </div>
              </div>

              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtroutros"  value="" placeholder="Outros">
                  <label for='outros'>Observações</label>
                 </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrvaloratualtgr"  value="" placeholder="Valor Atual TGR" >
                  <label for='valoratualtgr'>Valor Atual TGR</label>
                </div>
              </div>

              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrespecie"  value="<?=$especie;?>" placeholder="Espécie" >
                    <option value="ABT">ABT</option>
                    <option value="ASA">ASA</option>
                    <option value="AT">AT</option>
                    <option value="ATC">ATC</option>
                    <option value="ATP">ATP</option>
                    <option value="AV">AV</option>
                    <option value="MN">MN</option>
                    <option value="MOTOCICLETA">MOTOCICLETA</option>
                    <option value="UR">UR</option>
                    <option value="URS">URS</option>
                  </select>
                  <label for='especie'>Espécie</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">        
              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrclasse"  value="" placeholder="Classe" >
                    <option value="Administrativa">Administrativa</option>
                    <option value="Salvamento">Salvamento</option>
                    <option value="Resgate">Resgate</option>
                    <option value="Náutica">Náutica</option>
                    <option value="Incêndio">Incêndio</option>
                  </select>
                  <label for='classe'>Classe</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrstatus"  value="" placeholder="Status" >
                    <option value="ATIVA">Ativa</option>
                    <option value="INATIVA">Inativa</option>
                  </select>
                  <label for='status'>Status</label>
                </div>
              </div>
            </div>
           
            <input type="text" name="vtrid" value="">
            
            <div class="form-floating">
              <button type="submit" class="btn btn-primary" name="envia" value="envia">Enviar</button>
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