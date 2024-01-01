<?php 

include_once "../templates/header.php";

require_once "model.php";

?>
  <form action="" method="POST" class="d-flex">
    <select class="form-select me-2" name="vtrstatus">
      <option value="" >"Filtrar por status"</option>
      <option value="ATIVA" >Ativas</option>
      <option value="INATIVA" >Inativas</option>
    </select>
    <div class="row">
      <input type="submit" class="btn btn-primary" name="">
    </div>
  </form>

<span class="p-1 m-2">Número de viaturas: <b><?=$res->num_rows?></b></span>

  <div class="list-group mb-1">

    <a href="?acao=ins" class="list-group-item list-group-item-action"><i class="fas fa-plus-circle"></i> Adicionar</a>

  </div> 
  
</div> <!-- FIM DA COLUNA ESQUERDA -->

<div class="col-sm-2" style="overflow-y: scroll; height:600px">

	
<?php if ($res->num_rows > 0) {
 
do { 

    $id = $row["vtrid"];
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

    if(isset($_GET['vtrtipo'])) $tipo = $_GET['vtrtipo']; else $_GET['vtrtipo'] = "";
?>

<div>
	<div class="list-group list-group-flush p-1">
	<a href='?id=<?=$id;?>' class="list-group-item list-group-item-action" <?php if(($id == $_GET['id']) OR ($tipo == $_GET['vtrtipo'])) echo 'active';?> aria-current="true">
	  <div class="d-flex justify-content-between">
	    <img src='../veiculos/vtrimg/<?=$img;?>' width="60" height="60" class="rounded-circle" >
	    <h5><?=$tipo;?></h5>
	  </div>
	</a>
	</div>
 </div>



 <?php

} while ($row = mysqli_fetch_assoc($res))   ;} ?>
</div>
<div class="col-sm">

<?php 

if (!empty($_GET['id'])) { include_once 'form.php';};
if ((!empty($_GET['acao'])) && ($_GET['acao'] == 'ins')) { include_once 'form.php';}


?>

</div>

<?php

include_once '../templates/footer.php';

?>
