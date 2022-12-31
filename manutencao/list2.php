<?php include "_head.php";?>

<div class="row gx-1">

  <div class="col-2">
    <img class="card-img-top" src="../veiculos/vtrimg/<?=$vtrimg?>" alt="Card image">
    <div class="text-center"><p><?=$vtrtipo?></p></div>
  </div>

  <div class="col">

  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>DATA</th>
        <th>RESPONSÁVEL</th>
        <th>STATUS</th>
        <th>Opções</th>
      </tr>
    </thead>
    <tbody>

<?php if ($result->num_rows > 0) {

  do {      
    $vtrtipo = $row["tipo"];
    $vtrimg = $row["img"];
      $vtrodomatual = $row["odomatual"]; 
    $id=$row['id'];
    $idvtr = $row['idvtr'];
    $data=date('d/m/Y', (strtotime($row['data'])));
    $respons = $row["respons"];
    $status = $row["status"];
    ?>

      <tr>
        <td><?=$id?></td>
        
        <td><?=$data?></td>

        <td><?=$respons?></td>

        <td><i class="fas fa-circle" data-bs-toggle="tooltip" data-bs-placement="top" style="color: 
                    <?php
                      if($status == 'a') echo 'green';
                      if($status == 'p') echo 'orange';
                      if($status == 'c') echo 'blue';
                      if($status == 'x') echo 'red';
                    ?>";

                    font-size: 24px;

                    title="
                    <?php
                      if($status == 'a') echo 'ativo';
                      if($status == 'p') echo 'programado';
                      if($status == 'c') echo 'concluído';
                      if($status == 'x') echo 'cancelado';
                    ?>;

                    ">
                  </i></td>

        <td>
          <?php if (!isset($_GET['excluir'])){ ?>
          <a href="_form_update.php?id=<?=$id?>" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a>
          <a href="manutdet.php?idvtr=<?=$idvtr?>&id=<?=$id?>" class="btn btn-primary"><i class="fas fa-folder-open"></i></a>
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

  } while($row = mysqli_fetch_assoc($result)) ;

  } else {
    echo "Sem registro nesta tabela";
  } $conn->close();?>
     
     </tbody>

  </table>

</div>

</div>

<?php

include '../templates/footer.php';

?>
