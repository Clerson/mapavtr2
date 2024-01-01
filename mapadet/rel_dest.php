<div class='col-sm'>

  <div class='row'>
<?php
$sql_rel = "SELECT destino, count(*) AS qnt  FROM detmapa WHERE idmapa = $idmapa GROUP BY destino ORDER BY qnt DESC";
$res_rel = $conn->query($sql_rel);
$row_rel = $res_rel->fetch_assoc();
$num_rel = $res_rel->num_rows;

if($num_rel > 0) { ?>

	<div class="col-4">
	
		<ol class='list-group list-group-numbered'>

		<?php do { $qnt_rel = $row_rel['qnt']; ?>
		  <li class="list-group-item d-flex justify-content-between align-items-start <?php if($row_rel['destino'] == $_GET['dest']) echo 'active';?>">
		    <div class="ms-2 me-auto">
		      <div class="fw-bold"><a href="?idmapa=<?=$idmapa;?>&rel=dest&dest=<?=$row_rel['destino'];?>"><?=$row_rel['destino'];?></a></div>
		     </div>
		    <span class="badge bg-primary rounded-pill"><?=$qnt_rel;?></span>
		  </li>
		 <?php } while ($row_rel = $res_rel->fetch_assoc());?>
		</ol>
</div>
<div class="col-sm"  style="overflow-y: scroll; height:400px;">		

	<?php 
	if(!empty($_GET['dest'])) {
		$idmapa = $_GET['idmapa'];
		$dest = $_GET['dest'];
      	$sql_det = "SELECT * FROM detmapa, vtr, pessoas  WHERE idmapa = $idmapa AND vtrid = idvtr AND idpessoa = codmil AND destino = '$dest' ORDER BY iddetmp DESC ";
      	$result_det = $conn->query($sql_det);  
      	$row_det = $result_det->fetch_assoc();
			

			if($result_det->num_rows>0) {

				do { 

					$iddetmp = $row_det['iddetmp'];
				    $idvtr = $row_det["vtrid"];
				    $img = $row_det["vtrimg"];
				    $tipo = $row_det["vtrtipo"];
				    $nomeguerra = $row_det["nomeguerra"];
				    $grad = $row_det["grad"];
				    $pessoaimg = $row_det["img"];
				    $horasaida = $row_det["horasaida"];
				    $destino = $row_det["destino"];
				    $status = $row_det["detmp_status"];

		     ;?>
			
       <div class="list-group">
        <a href="?idmapa=<?=$idmapa;?>&idvtr=<?=$idvtr;?>&iddetmp=<?=$iddetmp;?>" class="list-group-item list-group-item-action <?php if($iddetmp == $_GET['iddetmp']) echo 'active';?>" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <img  src="../veiculos/vtrimg/<?=$img?>" width="60px">
            <img  src="../pessoas/pessoas_img/<?=$pessoaimg; ?>" class="rounded-2" width="30" height="38">
            <h5><?=$tipo?></h5>
          </div>
          
         </a>
       </div>
			


				<?php } while($row_det = $result_det->fetch_assoc());

			};

			 };?>



</div>
	</div>
</div>
	<?php }  else "A pesquisa não teve resultado";?>

