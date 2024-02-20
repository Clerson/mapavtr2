<?php 

  $vtrid = $_GET['vtrid'];
  $sql = "SELECT * FROM vtr WHERE vtrid = $vtrid";
  $res = $conn->query($sql);
  $row = $res->fetch_assoc();

  $vtrid = $row["vtrid"];
  $pref = $row["vtrpref"];
  $tipo = $row["vtrtipo"];
  $marcamod = $row["vtrmarcamod"];
  $ano = $row["vtrano"];
  $status = $row["vtrstatus"];
  $img = $row["vtrimg"];
  $placa = $row["vtrplaca"];
  $chassi = $row["vtrchassi"];
  $renavan = $row["vtrrenavan"];
  $combustivel = $row["vtrcombustivel"];
  $pneu = $row["vtrpneu"];
  $odomatual = $row["vtrodomatual"];
  $outros = $row["vtroutros"];
  $valoratualtgr = $row["vtrvaloratualtgr"];
  $especie = $row["vtrespecie"];
  $classe = $row["vtrclasse"];

?>
<div class="row my-1">
<div class="card p-0">
  <div class="card-header">
   <h5>#ID: <?=$vtrid;?> - <?=$tipo;?></h5>
  </div>
  <div class="card-body">
    <div class="table-responsive-sm">
      <table class="table">
          <tr>
            <td colspan="6">
               <img src='../veiculos/vtrimg/<?=$img;?>' width="100" height="100" class="rounded-circle" >
            </td>
        </tr>

          <tr>
            <th>
              PREFIXO:
            </th>
            <td>
              <?=$pref;?>
            </td>
            <th>
              MARCA/MODELO:
            </th>
            <td>
              <?=$marcamod;?>
            </td>
            <th>
              ANO:
            </th>
            <td>
              <?=$ano;?>
            </td>
          </tr>

          <tr>
            <th>
              PLACA:
            </th>
            <td>
              <?=$placa;?>
            </td>
            <th>
              CHASSI:
            </th>
            <td>
              <?=$chassi;?>
            </td>
            <th>
              RENAVAN:
            </th>
            <td>
              <?=$renavan;?>
            </td>
          </tr>

          <tr>
            <th>
              COMBUSTÍVEL:
            </th>
            <td>
              <?=$combustivel;?>
            </td>
            <th>
              PNEU:
            </th>
            <td>
              <?=$pneu;?>
            </td>
            <th>
              ODOMETRO(KM):
            </th>
            <td>
              <?=$odomatual;?>
            </td>
          </tr>

          <tr>
            <th>
              VALOR TGR(R$):
            </th>
            <td>
              <?=$valoratualtgr;?>
            </td>
            <th>
              ESPÉCIE:
            </th>
            <td>
              <?=$especie;?>
            </td>
            <th>
              CLASSE:
            </th>
            <td>
              <?=$classe;?>
            </td>
          </tr>
          
          <tr>
            <th>
              STATUS:
            </th>
            <td>
              <?=$status;?>
            </td>
            <th>
              OUTROS:
            </th>
            <td colspan="4">
              <?=$outros;?>
            </td>
          </tr>

      </table>
    </div>
  </div>

    <div class="card-footer">
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal<?=$vtrid;?>">Editar</button>
    </div>
  </div>
</div>
<!-- The Modal -->
<div class="modal fade" id="myModal<?=$vtrid;?>">
  <div class="modal-dialog  modal-xl modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?=$tipo;?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <?php include_once 'form.php';?>
      </div>

    </div>
  </div>
</div>