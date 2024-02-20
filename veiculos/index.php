<?php 

include_once "../templates/header.php";
require_once "../conexao.php";
?>

</div> <!-- FIM DA COLUNA ESQUERDA -->

<div class="col-sm">

  <div class="row">
    <nav class="navbar navbar-expand-sm navbar-dark bg-secondary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">

          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="/veiculos"><i class="fas fa-home"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#form_insert"><i class="fa fa-plus-circle"></i> Adicionar</a>
            </li>
          </ul>

          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="/veiculos"><i class="fa fa-truck"></i> VEÍCULOS</a>
            </li>
          </ul>
          
            <form action="" method="POST" class="row text-center">
              <div class="d-flex">
              <select class='form-select shadow-sm' id='idvtr' name='idvtr'>
              <option> Selecione viatura</option>
              <?php
                $sql = "SELECT vtrid, vtrimg, vtrtipo FROM vtr ORDER BY vtrtipo ASC";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
               do { ?> 
                <option value='<?=$row['vtrid']?>'>
                  <?=$row['vtrtipo']?>
                </option>
                <?php } while ($row=$res->fetch_assoc()) ?>
              </select>
                <input type="submit" class="btn btn-primary ms-1" name="">
              </div>
            </form>
          

        </div>
      </div>
    </nav>
  </div>

<!-- <div class="col-sm-2" style="overflow-y: scroll; height:600px"> -->


<div class="col-sm">

<?php 
if (!empty($_GET['acao'])) {
  if ($_GET['acao'] == 'view') {include_once 'view.php';}
} else { include_once 'list.php'; }


?>
</div>
</div>

<?php

include_once '../templates/footer.php';

?>

        <?php require 'insert.php';?>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"list.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>