<?php 
$sql_rel = "SELECT destino, count(*) AS qnt  FROM detmapa GROUP BY destino ORDER BY COUNT(*) DESC";
$res_rel = $conn->query($sql_rel);
$row_rel = $res_rel->fetch_assoc();
$num_rel = $res_rel->num_rows;


if($num_rel > 0) { ?>	
 		
		<ol class='list-group list-group-numbered'>

		<?php do { $qnt_rel = $row_rel['qnt']; ?>
		  <li class="list-group-item d-flex justify-content-between align-items-start">
		    <div class="ms-2 me-auto">
		      <div class="fw-bold"><?=$row_rel['destino'];?></div>
		     </div>
		    <span class="badge bg-primary rounded-pill"><?=$qnt_rel;?></span>
		  </li>
		 <?php } while ($row_rel = $res_rel->fetch_assoc());?>
		</ol>

	<?php }  else "A pesquisa não teve resultado";?>
