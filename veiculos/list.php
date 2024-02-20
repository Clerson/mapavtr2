<div class="row bg-warning">
  <div class="container-fluid mb-1">
  <?php
  $res_status = $conn->query("SELECT vtrstatus, count(*) AS qnt FROM vtr GROUP BY vtrstatus");
  $row_status = $res_status->fetch_assoc();

  if($res_status->num_rows > 0) { 

     do { ?>

        <a href="?vtrstatus=<?=$row_status['vtrstatus'];?>">
          <span class="badge rounded-pill bg-info text-dark"><?=$row_status['vtrstatus'];?> <span class="badge bg-primary"><?=$row_status['qnt'];?></span></span>
        </a>

    <?php } while ($row_status = $res_status->fetch_assoc()); }; ?>
</div>
</div>

<div class="row text-center">
	
<?php

  $sql = "SELECT * FROM vtr";

  if(!empty($_POST['idvtr'])) { 
    $idvtr = $_POST['idvtr'];
    $sql .= " WHERE vtrid=$idvtr ORDER BY vtrtipo ASC";
    };

  $res = $conn->query($sql);
 
     $vtrid = $pref = $tipo = $marcamod = $ano = $status = $img = $placa = $chassi = $renavan = $combustivel = $pneu = $odomatual = $outros = $valoratualtgr = $especie = $classe = "";

  if ($res->num_rows > 0) {  

    $row = $res->fetch_assoc();

    do {
 
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

	<div class="card col-sm-2 p-0 m-1 shadow-sm
    <?php if($status == 'INATIVA') echo "bg-secondary";?>">
    <a href='#' class="nav-link"  data-bs-toggle="modal" data-bs-target="#form<?=$vtrid?>">
      <div class="card-header"><h5><?=$tipo;?></h5></div>
      <div class="card-body"><img src='../veiculos/vtrimg/<?=$img;?>' width="100" height="100" class="rounded-circle" ></div>
    </a>
  </div>
      <!-- The Modal -->
      <div class="modal fade" id="form<?=$vtrid?>">
        <div class="modal-dialog  modal-xl modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title"><?=$tipo;?></h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

                <?php require 'form.php'; ?>

              </div> <!-- FIM DA MODAL-BODY -->

          </div> <!-- FIM DA MODAL-CONTENT -->     

        </div> <!-- FIM DA MODAL-DIALOG -->

      </div> <!-- FIM DA MODAL -->

   <?php } while ($row = $res->fetch_assoc());} ?>

</div>