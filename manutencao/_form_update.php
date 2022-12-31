<?php require '_head.php';

    $id=$_GET['id'];
    $idvtr = $row['idvtr'];
    $data=date('d/m/Y', (strtotime($row['data'])));
    $data1=date('Y-m-d', (strtotime($row['data'])));
    $tipoid = $row["tipoid"];
    $odom = $row["odom"];    
    $vencim = date('d/m/Y', (strtotime($row["vencim"])));
    $vencim1 = date('Y-m-d', (strtotime($row["vencim"])));
    $proxodom = $row["proxodom"];
    $respons = $row["respons"];
    $status = $row["status"];
    $observ = $row["observ"];
    $vtrtipo = $row["vtrtipo"];;
    $vtrimg = $row["vtrimg"];
    $vtrmantipo_id = $row["vtrmantipo_id"];
    $vtrmantipo = $row["vtrmantipo"];
?>

        <div class="row gx-1">

          <div class="col-2">

            <img class="card-img-top" src="../veiculos/vtrimg/<?=$vtrimg?>" alt="Card image">
            <div class="text-center"><?=$vtrtipo?></div>
          </div>

          <div class="col">

            <form action='' method='POST' class='row gx-1 gy-1 text-center'>

                <div class='form-floating col-2'>
                  <input type="date" class="form-control" value="<?=date('Y-m-d')?>" name="data" required>
                  <label for='Data'>Data:</label>
                </div>
   
                <div class='form-floating col-3'>
                  <input type="number" class="form-control" name="odom" value="<?=$odom?>" required>
                  <label for='odom'>Odômetro (Mapa de Vtr):</label>
                </div>

                <div class='form-floating col-4'>
                  <input type="text" class="form-control" name="respons" value="<?=$respons?>">
                  <label for='respons'>Responsável pelo serviço:</label>
                </div>

                <div class="form-floating col-sm"> 
                  <select class="form-select"  name="status"  value="{$status}" required>
                    <option value="a" <?php if ($status=='a') echo 'selected' ;?>>Ativa</option>
                    <option value="p" <?php if ($status=='p') echo 'selected' ;?>>Programada</option>
                    <option value="c" <?php if ($status=='c') echo 'selected' ;?>>Concluída</option>
                    <option value="x" <?php if ($status=='x') echo 'selected' ;?>>Cancelada</option>
                  </select>
                  <label for="status">Status:</label>
                </div>

                <div class='form-floating'>
                <textarea class="form-control" name="observ"><?=$observ;?></textarea>
                  <label for='observ'>Observações:</label>
                </div>

                
              <input type="text" name="id" value="<?=$id?>" hidden>

              <input type="text" name="idvtr" value="<?=$idvtr?>" hidden>

              <div class="form-floating">
                <button type="submit" class="btn btn-primary " name="acao" value="update">Enviar</button>
              </div>

            </form>

          </div>

      </div>
<?php require '../templates/footer.php';?>