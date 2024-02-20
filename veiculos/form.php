<div class="row gx-1">

  <div class="col-3 text-center">
    <img class="card-img-top" src="vtrimg/<?=$img?>" alt="Card image">
    <form action="update_vtr_img.php" method="POST" enctype="multipart/form-data">
      <input type="file" class="form-control mt-2" name="fileToUpload" id="fileToUpload" required>
      <input type="text" name="vtrid" value="<?=$vtrid?>" hidden>
      <input type="submit"  class="btn btn-primary mt-2" value="Enviar" name="submit">
    </form>
  </div>

  <div class="col-sm">
        <a href="/manutencao/list2.php?idvtr=<?=$vtrid?>" class="btn btn-warning mb-2"><i class="fas fa-cog"></i> Manutenção</a>

          <form action='model.php' method='POST' class='row gx-1 gy-1 text-center'>

            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control" name="vtrtipo" value="<?=$tipo; ?>" placeholder="Nomenclatura"  required >
                  <label for='Nomenclatura'>Nomenclatura</label>
                </div>
              </div>
              <div class="col-sm" >  
                <div class="form-floating">
                  <input type="text" class="form-control" name="vtrpref" value="<?=$pref; ?>" placeholder="Prefixo"  >
                  <label for='pref'>Prefixo</label>
                </div>
              </div>
            
              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrmarcamod"   value="<?=$marcamod;?>" placeholder="Marca/Modelo"  >
                  <label for='marcamod'>Marca/Modelo</label>
                </div>
              </div>

            </div>

            <div class="row gx-1 gy-1">   

              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrano"  value="<?=$ano;?>" placeholder="Ano de fabricação" >
                  <label for='ano'>Ano/Modelo</label>
                </div>
              </div>

              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrplaca"  value="<?=$placa;?>" placeholder="Placa" >
                  <label for='placa'>Placa</label>
                </div>
              </div>
           
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrchassi"  value="<?=$chassi;?>" placeholder="Chassi" >
                  <label for='chassi'>Chassi</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrrenavan"  value="<?=$renavan;?>" placeholder="RENAVAN" >
                  <label for='renavan'>RENAVAN</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                 <select class="form-select"  name="vtrcombustivel"  value="<?=$combustivel;?>" placeholder="Combustível" >
                    <option value="Gasolina" <?php if($combustivel == 'Gasolina') echo 'selected';?>>Gasolina</option>
                    <option value="Etanol" <?php if($combustivel == 'Etanol') echo 'selected';?>>Etanol</option>
                    <option value="Diesel" <?php if($combustivel == 'Diesel') echo 'selected';?>>Diesel</option>
                    <option value="Diesel S10" <?php if($combustivel == 'Diesel S10') echo 'selected'?>>Diesel S10</option>
                  </select> 
                  <label for='Combustível'>Combustível</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrpneu"  value="<?=$pneu;?>" placeholder="Pneu" >
                  <label for='pneu'>Pneu</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" >
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrodomatual"  value="<?=$odomatual;?>" placeholder="000000">
                  <label for='odomatual'>Odometro atual (Mapa)</label>
                 </div>
              </div>

              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtroutros"  value="<?=$outros;?>" placeholder="Outros">
                  <label for='outros'>Observações</label>
                 </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">
              <div class="col-sm" > 
                <div class="form-floating">
                  <input type="text" class="form-control"  name="vtrvaloratualtgr"  value="<?=$valoratualtgr;?>" placeholder="Valor Atual TGR" >
                  <label for='valoratualtgr'>Valor Atual TGR</label>
                </div>
              </div>

              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrespecie"  value="<?=$especie;?>" placeholder="Espécie" >
                    <option value="ABT" <?php if($especie == 'ABT') echo 'selected';?>>ABT</option>
                    <option value="ASA" <?php if($especie == 'ASA') echo 'selected';?>>ASA</option>
                    <option value="AT" <?php if($especie == 'AT') echo 'selected';?>>AT</option>
                    <option value="ATC" <?php if($especie == 'ATC') echo 'selected';?>>ATC</option>
                    <option value="ATP" <?php if($especie == 'ATP') echo 'selected';?>>ATP</option>
                    <option value="AV" <?php if($especie == 'AV') echo 'selected';?>>AV</option>
                    <option value="MN" <?php if($especie == 'MN') echo 'selected';?>>MN</option>
                    <option value="MOTOCICLETA" <?php if($especie == 'MOTOCICLETA') echo 'selected';?>>MOTOCICLETA</option>
                    <option value="UR" <?php if($especie == 'UR') echo 'selected';?>>UR</option>
                    <option value="URS" <?php if($especie == 'URS') echo 'selected';?>>URS</option>
                  </select>
                  <label for='especie'>Espécie</label>
                </div>
              </div>
            </div>

            <div class="row gx-1 gy-1">        
              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrclasse"  value="<?=$classe;?>" placeholder="Classe" >
                    <option value="Administrativa" <?php if($classe == 'Administrativa') echo 'selected';?>>Administrativa</option>
                    <option value="Salvamento" <?php if($classe == 'Salvamento') echo 'selected';?>>Salvamento</option>
                    <option value="Resgate" <?php if($classe == 'Resgate') echo 'selected';?>>Resgate</option>
                    <option value="Náutica" <?php if($classe == 'Náutica') echo 'selected';?>>Náutica</option>
                    <option value="Incêndio" <?php if($classe == 'Incêndio') echo 'selected';?>>Incêndio</option>
                  </select>
                  <label for='classe'>Classe</label>
                </div>
              </div>
              <div class="col-sm" >
                <div class="form-floating">
                  <select class="form-select"  name="vtrstatus"  value="<?=$status;?>" placeholder="Status" >
                    <option value="ATIVA" <?php if($status == 'ATIVA') echo 'selected';?>>Ativa</option>
                    <option value="INATIVA" <?php if($status == 'INATIVA') echo 'selected';?>>Inativa</option>
                  </select>
                  <label for='status'>Status</label>
                </div>
              </div>
            </div>
           
            <input type="text" name="vtrid" value="<?=$vtrid;?>" hidden>
            
            <div class="form-floating">
              <button type="submit" class="btn btn-primary" name="envia" value="envia">Enviar</button>
            </div>

          </form>

  </div> <!-- FIM DA COL -->
        
</div> <!-- FIM DA ROW -->


