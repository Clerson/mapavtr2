<?php

$idvtr = $iddetmp = $vtrtipo = $idpessoa = $nome = $nomeguerra = $grad = $destino = $status = $obs = "";
$horasaida = $horaentr = date('H:i');
$vtrimg = "thumb.png";
$pessoaimg = "thumb.jpg";
$num_rai = 0;

if(!empty($_GET['iddetmp'])) {

  $iddetmp = $_GET['iddetmp'];
  $idvtr = $_GET['idvtr'];
  $sql_detform = "
                  SELECT iddetmp, 
                          idvtr, 
                          vtrimg, 
                          vtrtipo, 
                          codmil, 
                          nomeguerra, 
                          grad, 
                          img, 
                          odomsaida, 
                          odomentr, 
                          horasaida, 
                          horaentr, 
                          destino, 
                          detmp_status, 
                          obs, 
                          num_rai

                  FROM detmapa, 
                       vtr, 
                       pessoas

                  WHERE iddetmp = $iddetmp 
                        AND idvtr = vtrid 
                        AND idpessoa = codmil 
                        ORDER BY iddetmp DESC 
            
          ";

  $result_detform = $conn->query($sql_detform);  
  $row_detform = $result_detform->fetch_assoc();

  $iddetmp = $row_detform['iddetmp'];
  $idvtr = $row_detform["idvtr"];
  $vtrimg = $row_detform["vtrimg"];
  $vtrtipo = $row_detform["vtrtipo"];
  $idpessoa = $row_detform["codmil"];
  $nomeguerra = $row_detform["nomeguerra"];
  $grad = $row_detform["grad"];
  $pessoaimg = $row_detform["img"];
  $odomsaida = $row_detform["odomsaida"];
  $odomentr = $row_detform["odomentr"];
  $horasaida = $row_detform["horasaida"];
  $horaentr = $row_detform["horaentr"];
  $destino = $row_detform["destino"];
  $status = $row_detform["detmp_status"];
  $obs = $row_detform["obs"];
  $num_rai = $row_detform["num_rai"];
} 

  if(isset($_GET['vtrid'])) $vtrid = $_GET['vtrid'];
  if(isset($_GET['vtrtipo'])) $vtrtipo = $_GET['vtrtipo'];
  if(isset($_GET['idpessoa'])) $idpessoa = $_GET['idpessoa'];
  if(isset($_GET['pessoaimg'])) $pessoaimg = $_GET['pessoaimg'];
  if(isset($_GET['vtrimg'])) $vtrimg = $_GET['vtrimg'];    
  if(isset($_GET['odomsaida'])) $odomsaida = $_GET['odomsaida'];
  if(isset($_GET['odomsaida'])) $odomentr = $_GET['odomsaida']; 

;?>

    <div class="col-sm">
      <?php if (!empty($_GET['alert'])) {
        if($_GET['alert'] == 'edit') echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Salvo!</strong> Este registro foi Editado e Salvo com sucesso.
          </div>
        ";
         if($_GET['alert'] == 'ins') echo "
          <div class='alert alert-success alert-dismissible'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Inserido!</strong> Este registro foi Inserido com sucesso.
          </div>
        ";
      ;};?>
      <form action='model.php' method='POST' class='row gx-2 gy-2 text-center'>
          <div class="form-floating border border-1 p-0 rounded-2 bg-light shadow-sm" style="width: 54px" id="vtr">
            <img src="../veiculos/vtrimg/<?=$vtrimg; ?>" alt="<?=$vtrtipo; ?>" width="52" height='58'>
          </div>
          <div class='col-sm form-floating'> 
            <select class='form-select shadow-sm' id='idvtr' name='idvtr' onchange='atualizaOdomVtr(this.value); mostrarFotoVtr(this.value)' required>
              <option value=''> Selecione viatura</option>
              <?php
                $sql = "SELECT vtrid, vtrimg, vtrtipo FROM vtr WHERE vtrstatus='ATIVA' ORDER BY vtrtipo ASC";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
               do { ?> 
                <option value='<?=$row['vtrid']?>' <?php if ($row['vtrtipo'] == $vtrtipo) echo "selected";?>>
                  <?=$row['vtrtipo']?>
                </option>
              <?php } while ($row=$res->fetch_assoc()) ?>
            </select>
            <label for='idvtr'>Veículo:</label>
          </div>

          <div class="form-floating p-0" style="width: 46px" id="img">
            <img src="../pessoas/pessoas_img/<?=$pessoaimg?>" class='rounded-2' width='46' height="56" alt="<?=$nomeguerra;?>">
          </div>
          <div class='form-floating col-sm' id="pessoa">
            <select class='form-select shadow-sm' name='pessoa' onchange="mudarFotoMotorista(this.value)" required>
              <option value=''> Selecione motorista</option>
              <?php 
                  $sql_p = "SELECT * FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";
                  $result_p = $conn->query($sql_p);
                  $row_p = $result_p->fetch_assoc();

                   do { ?>
                    <option value="<?=$row_p['codmil'];?>" <?php if ($row_p["codmil"] == $idpessoa) echo "selected";?>>
                      <?=$row_p['nomeguerra'];?>
                    </option>  
                  <?php } while ($row_p = $result_p->fetch_assoc());
                ?>
            </select>
            <label for='pessoa' class='form-label'>Motorista:</label>
          </div>

          <div class="input-group" id='odomentr'>
            <span class="input-group-text"><i class="fas fa-tachometer-alt"></i></span>
            <span class="input-group-text">KM Saída:</span>
            <input type="number" class="form-control shadow-sm"  name="odomsaida" value="<?=$odomsaida;?>" placeholder="KM saída" required>
            <span class="input-group-text">KM Chegada:</span>
            <input type="number" class="form-control shadow-sm"  name="odomentr" value="<?=$odomentr;?>" min="<?=$odomsaida;?>" placeholder="kM chegada" required>
          </div>

          <div class="input-group">
            <span class="input-group-text"><i class='far fa-hourglass'></i></span>
            <span class="input-group-text">Hora saída:</span>
            <input type="time" class="form-control shadow-sm" name="horasaida"  value="<?=$horasaida;?>" required>
            <span class="input-group-text">Hora chegada:</span>
            <input type="time" id="horaentr" class="form-control shadow-sm"  name="horaentr" value="<?=$horaentr;?>" required>
            <button type="button" class="btn btn-info" onclick="atualizaHoraChegada()"><i class='far fa-hourglass'></i></button>
          </div>
          <div class="col-sm form-floating"> 
            <select class="form-select shadow-sm" name="destino" id="destino" onchange="mostrarCampoNumRai(this.value)"  required>
              <option value="9º BBM" <?php if($destino == '9º BBM') echo 'selected';?>>9º BBM</option>
              <option value="Abastecimento" <?php if($destino == 'Abastecimento') echo 'selected';?>>Abastecimento</option>
              <option value="Ocorrencia" <?php if(($destino == 'Ocorrencia') or ($destino == ''))  echo 'selected';?>>Ocorrência</option>
              <option value="Oficina" <?php if($destino == 'Oficina') echo 'selected';?>>Oficina</option>
              <option value="Ordem de Serviço" <?php if($destino == 'Ordem de Serviço') echo 'selected';?>>Ordem de Serviço</option>
              <option value="Orçamentos" <?php if($destino == 'Orçamentos') echo 'selected';?>>Orçamentos</option>
              <option value="Outros" <?php if($destino == 'Outros') echo 'selected';?>>Outros</option>
              <option value="Ponto Base" <?php if($destino == 'Ponto Base') echo 'selected';?>>Ponto Base</option>
              <option value="Posto Avançado" <?php if($destino == 'Posto Avançado') echo 'selected';?>>Posto Avançado</option>
              <option value="Prefeitura" <?php if($destino == 'Prefeitura') echo 'selected';?>>Prefeitura</option>
              <option value="QRF" <?php if($destino == 'QRF') echo 'selected';?>>QRF</option>
              <option value="Viagem" <?php if($destino == 'Viagem') echo 'selected';?>>Viagem</option>
              <option value="Vistoria" <?php if($destino == 'Vistoria') echo 'selected';?>>Vistoria</option>
            </select>
            <label for="destino">Destino:</label>
          </div>

          <div class="col-sm-2 form-floating" id="rai">
            <input type='int' class='form-control input-group-text shadow-sm' name='num_rai' value='<?=$num_rai;?>'>
            <label for='num_rai'>Num RAI:</label>
          </div>

        <div class="col-sm form-floating"> 
          <select class="form-select shadow-sm" name="status" id="status" onchange="mudaCorStatus(this.value)" required>
            <option value='aberta' <?php if($status == 'aberta') echo 'selected';?>>Aberta</option>
            <option value='fechada' <?php if($status == 'fechada') echo 'selected';?>>Fechada</option>
            <option value='cancelada' <?php if($status == 'cancelada') echo 'selected';?>>Cancelada</option>
          </select>
          <label for="status">Status:</label>
        </div>

        <div class="form-floating"> 
          <textarea rows="5" cols="50" class="form-control shadow-sm" name="obs" placeholder="obs"><?=$obs;?></textarea>
          <label for="obs">Observações:</label>
        </div>
          <input type="text" name="idmapa" value="<?=$idmapa;?>" hidden>
          <input type='text' name='iddetmp' value='<?=$iddetmp;?>' hidden>

        <div class="form-floating">
          <?php if(!empty($_GET['iddetmp'])) { ;?>
            <a href="?idmapa=<?=$idmapa;?>&acao=ins&vtrtipo=<?=$vtrtipo;?>&idpessoa=<?=$idpessoa;?>&odomsaida=<?=$odomentr;?>&vtrimg=<?=$vtrimg;?>&pessoaimg=<?=$pessoaimg;?>" class="btn btn-info"><i class="fas fa-plus-circle"></i> Nova Rota / Duplicar</a>
          <?php } ;?>
          
          <button type="submit" class="btn btn-success"><i class="far fa-thumbs-up"></i> Salvar</button>
        </div>
      </form>
 </div> 
 
<script>
function atualizaHoraChegada() {  
    var d = new Date();
    var currentHours = d.getHours();
    var currentMins = d.getMinutes();
    currentHours = ("0" + currentHours).slice(-2);
    currentMins = ("0" + currentMins).slice(-2);
   document.getElementById("horaentr").value = currentHours + ":" + currentMins;
   document.getElementById("status").value = 'fechada';
   document.getElementById("status").style.background = '';
 };

 if (document.getElementById("status").value == 'aberta') {
      document.getElementById("status").style.background = "#ffcc00"};

  if (document.getElementById("destino").value != 'Ocorrencia') {
    document.getElementById("rai").style.display = "none"};

function mostrarCampoNumRai(val) {
    if (val == 'Ocorrencia') { document.getElementById("rai").style.display = "block";
  }
    else { document.getElementById("rai").style.display = "none"; }
};
  
</script>

<script type="text/javascript" src="scripts.js"></script>