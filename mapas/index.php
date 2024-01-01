<?php include_once "../templates/header.php";
require_once '../conexao.php';

$sql = "SELECT * FROM mapas ORDER BY idmapa DESC ";
      if(!empty($_POST['fdata'])) {

            $fdata = $_POST['fdata'];
            $fdata2 = date('Y-m-d H:i:s', strtotime($fdata));
            $sql = "SELECT * FROM mapas WHERE data LIKE '%$fdata2'";
        }

        if(!empty($_GET['idmapa'])) {
         $idmapa = $_GET['idmapa'];
          $sql = "SELECT * FROM mapas WHERE idmapa = $idmapa";
        }

$res = $conn->query($sql);
$row = $res->fetch_assoc();

$sql_p = "SELECT codmil, nomeguerra FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";

// include_once 'menu.php';

?>

        <div class="list-group mb-1">
          <a href="?p=ins" class="list-group-item list-group-item-action" aria-current="true"><i class="fas fa-plus-circle"></i> Adicionar</a>
          <a href="?p=rel" class="list-group-item list-group-item-action" aria-current="true"><i class='fas fa-file-alt'></i> Relatório</a>
        </div>
     
</div>

  <div class="col-sm-3" style="overflow-y: scroll; height: 500px;">

    <?php

    if($res->num_rows > 0) {
    
  do { 

    switch ($row['ala']) {
      case 'Alpha':
        $alaimg = 'alpha.jpeg';
        break;
      case 'Bravo':
        $alaimg = 'bravo.jpeg';
        break;
      case 'Charlie':
        $alaimg = 'charlie.jpeg';
        break;
      case 'Delta':
        $alaimg = 'delta.jpeg';
        break;
      }

    ?>

    <div class="list-group list-group-flush p-1">
      <a href="../mapadet/?idmapa=<?=$row['idmapa'];?>" class="list-group-item list-group-item-action" aria-current="true">
        <div class="d-flex w-100 justify-content-between">
          <img src="../img/<?=$alaimg;?>" width="40" height="40" class="rounded-circle" >
          <h5 class="mb-1"><?=$row['ala'];?></h5>
          <small><?=date('d/m/y', (strtotime($row["data"])));?></small>
        </div>
      </a>
    </div>

      <?php } while($row = $res->fetch_assoc());

   } else echo "Escolha uma data válida";?>

  </div>


<div class="col-sm">


<?php 

if(!empty($_GET['p'])) { 
  if($_GET['p'] == 'ins') {include_once 'form.php';} 
  if($_GET['p'] == 'rel') {include_once 'relat.php';}
}; ?>


<?php include_once '../templates/footer.php';?>






