<?php 
include_once "../templates/header.php";
require_once '../conexao.php';    


$idmapa = $_GET['idmapa'];
$sql_detmapa = "SELECT idvtr FROM detmapa WHERE idmapa=$idmapa GROUP BY idvtr ";  
$result_detmapa = $conn->query($sql_detmapa);  
$row_detmapa = $result_detmapa->fetch_assoc(); 

if ($result_detmapa->num_rows > 0) {
  
echo "<div>";

do {

    $idvtr = $row_detmapa['idvtr'];
    $sql = "SELECT vtrid, vtrimg, vtrtipo FROM vtr WHERE vtrid=$idvtr";  
    $res = $conn->query($sql);  
    $row = $res->fetch_assoc();

      $id = $row['vtrid'];
      $img =  $row['vtrimg'];
      $tipo = $row['vtrtipo'];

  ;?>

  <div class="list-group list-group-flush">
    <a href='?idmapa=<?=$idmapa;?>&idvtr=<?=$idvtr;?>' class="list-group-item list-group-item-action
      <?php if((isset($_GET['idvtr'])) && $_GET['idvtr'] == $idvtr) { echo "active";};?>
      " >
      <div class="d-flex justify-content-between">
        <img src='../veiculos/vtrimg/<?=$img;?>' width="50" >
        <h6><?=$tipo;?></h6>
      </div>
    </a>
  </div>

 <?php } while ($row_detmapa = $result_detmapa->fetch_assoc());

  echo "</div>";
};

  echo "</div>";
      
    $sql = "SELECT * FROM mapas WHERE idmapa = $idmapa";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();

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

<div class="col-sm">
  <div class="row">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary p-0">
      <div class="container-fluid">
      <a class="navbar-brand" href="?idmapa=<?=$idmapa;?>">
        <img src="../img/<?=$alaimg;?>" width="30" height="30" class="rounded-circle">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="?idmapa=<?=$idmapa;?>"><b><?=$row['ala'];?></b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0)"><?=date('d/m/y', (strtotime($row["data"])));?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?idmapa=<?=$idmapa;?>&acao=ins"><i class="fa fa-plus-circle"></i> Adicionar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="row">

  <div class="container-fluid mb-1">

    <?php
    $sql_rel = "SELECT destino, count(*) AS qnt  FROM detmapa WHERE idmapa = $idmapa GROUP BY destino ORDER BY qnt DESC";
    $res_rel = $conn->query($sql_rel);
    $row_rel = $res_rel->fetch_assoc();
    

    if($res_rel->num_rows > 0) { 

     do {  $qnt_rel = $row_rel['qnt']; ?>

        <a href="?idmapa=<?=$idmapa;?>&dest=<?=$row_rel['destino'];?>">
          <span class="badge rounded-pill bg-info text-dark"><?=$row_rel['destino'];?> <span class="badge bg-primary"><?=$qnt_rel;?></span></span>
        </a>

    <?php } while ($row_rel = $res_rel->fetch_assoc());

    };

      $sql_status = "SELECT detmp_status, count(*) AS qnt  FROM detmapa WHERE idmapa = $idmapa AND detmp_status = 'aberta'  GROUP BY detmp_status";
      $res_status = $conn->query($sql_status);
      $row_status = $res_status->fetch_assoc();
      $num_status = $res_status->num_rows;

      if($res_status->num_rows > 0) { 
        
     do {  $qnt_status = $row_status['qnt']; ?>

          <a href="?idmapa=<?=$idmapa;?>&status=<?=$row_status['detmp_status'];?>">
            <span class="badge rounded-pill bg-warning text-dark"><?=$row_status['detmp_status'];?> <span class="badge bg-primary"><?=$qnt_status;?></span></span>
          </a>
    <?php } while ($row_rel = $res_rel->fetch_assoc()); 

      };

  echo "</div></div>";


if($result_detmapa->num_rows > 0) {

echo "<div class='row'>";
  

      if(!empty($_GET['idvtr'])) { include_once "analit.php"; };

       if(!empty($_GET['dest'])) { include_once "analit.php";};

       if(!empty($_GET['status'])) { include_once "analit.php";};

      if(!empty($_GET['iddetmp'])) { include_once "form.php";};

      if((!empty($_GET['acao']) && ($_GET['acao'] == 'ins'))) { include_once "form.php" ;};

      
      if(!empty($_GET['rel'])) {

        if($_GET['rel'] == 'status') { include_once "rel_status.php"; }

        if($_GET['rel'] == 'dest') { include_once "rel_dest.php"; }

      ;}
      
  echo "</div>";

} else include_once "form.php";

include '../templates/footer.php';?>



