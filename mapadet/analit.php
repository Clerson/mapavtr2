    <div class="col-sm-3 p-1 list-group" style="min-height:470px; overflow-y: scroll">
    <?php
 
    if(!empty($_GET['idvtr'])) {
      $idvtr = $_GET['idvtr'];
      $sql_det = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa AND idvtr = $idvtr AND vtrid = idvtr AND idpessoa = codmil ORDER BY iddetmp DESC ";
    }

    if(!empty($_GET['dest'])) { 
        $dest = $_GET['dest'];        
        $sql_det = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa  AND vtrid = idvtr AND idpessoa = codmil AND destino = '$dest'  ORDER BY iddetmp DESC ";
    }

    if(!empty($_GET['status'])) { 
        $status = $_GET['status'];        
        $sql_det = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa  AND vtrid = idvtr AND idpessoa = codmil AND detmp_status = '$status'  ORDER BY iddetmp DESC ";
    }

    // if(!empty($_GET['iddetmp'])) {

    //       $iddetmp = $_GET['iddetmp'];
    //       $sql_det = " SELECT * FROM detmapa, vtr, pessoas  WHERE iddetmp = $iddetmp AND idvtr = vtrid AND idpessoa = codmil";
    // }

      $result_det = $conn->query($sql_det);  
      $row_det = $result_det->fetch_assoc();

 do { 

      $iddetmp = $row_det['iddetmp'];
      $idvtr = $row_det["idvtr"];
      $vtrimg = $row_det["vtrimg"];
      $vtrtipo = $row_det["vtrtipo"];
      $idpessoa = $row_det["codmil"];
      $nomeguerra = $row_det["nomeguerra"];
      $grad = $row_det["grad"];
      $pessoaimg = $row_det["img"];
      $odomsaida = $row_det["odomsaida"];
      $odomentr = $row_det["odomentr"];
      $horasaida = $row_det["horasaida"];
      $horaentr = $row_det["horaentr"];
      $destino = $row_det["destino"];
      $status = $row_det["detmp_status"];
      $obs = $row_det["obs"];
      $num_rai = $row_det["num_rai"];


      ;?>
      <div class="list-group list-group-flush border-bottom">
        <a href="?idmapa=<?=$idmapa;?>&idvtr=<?=$idvtr;?>&iddetmp=<?=$iddetmp;?>" 
          class="list-group-item list-group-item-action
          <?php

            if((isset($_GET['iddetmp'])) && $_GET['iddetmp'] == $iddetmp) echo "active";

            elseif($status == "aberta") echo "bg-warning";

            elseif((isset($_GET['status'])) && $_GET['status'] == "aberta") echo "bg-warning";

          ?>
          "> 

          <div class="d-flex justify-content-between">
            <img  src="../veiculos/vtrimg/<?=$vtrimg?>" width="60">
            <h6><?=$vtrtipo;?></h6>
            <span><?=$status;?></span>
            <img  src="../pessoas/pessoas_img/<?=$pessoaimg; ?>" class="rounded-2" width="28" height="32" >
          </div>
         </a>
       </div>


<?php } while ($row_det = $result_det->fetch_assoc()) ; ?>

</div>
