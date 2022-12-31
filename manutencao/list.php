
  <table class="table table-striped">
    <thead>
      <tr>
        <th># VTR</th>
        <th>DATA</th>
        <th>MANUTENÇÃO</th>
        <th>KM</th>
        <th>STATUS</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result->num_rows > 0) {

  do { 
    $id=$row['id'];
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
    $vtrtipo = $row["tipo"];
    $vtrimg = $row["img"];
    $vtrmantipo_id = $row["mantipo_id"];
    $vtrmantipo = $row["mantipo"];
    ?>

      <tr>
        <td><?=$id." ".$vtrtipo?></td>
        
        <td><?=$data?></td>

        <td><?=$vtrmantipo?></td>

        <td><?=$odom?></td>

        <td><?=$status?></td>

        <td>
          <?php if (!isset($_GET['excluir'])){ ?>
          <a href="_form_update.php?id=<?=$id?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
          <a href="?id=<?=$id?>&excluir=1" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
            <?php } 

            else { ?>

            <div class="bg-warning m-1 p-1 text-center rounded">Tem certeza que deseja excluir esse registro?</div>
                     <a href="?delete=<?=$id?>" class="btn btn-danger text-center"><i class="fas fa-trash"></i> Sim</a>
            <?php } ;?>
            </div> 
         
        </td>
      </tr>



  <?php 

} while($row = $result->fetch_assoc()) ;

} else {
  echo "Sem registro nesta tabela";
} $conn->close();?>
   
   </tbody>

</table>