<?php   
include 'model.php';

      do { 

  $codmil = $row_pessoas["codmil"];
  $grad = $row_pessoas["grad"];
  $rg = $row_pessoas["rg"];
  $nomeguerra = $row_pessoas["nomeguerra"];
  $nome = $row_pessoas["nome"];
  $contato = $row_pessoas["contato"];
  $img = $row_pessoas["img"];
  $pstatus = $row_pessoas["pstatus"];

    
    ?>

    <div class='container1 col-sm-2 m-0 shadow-sm rounded-3'>
      <a href='#' data-bs-toggle="modal" data-bs-target="#updatepessoa<?=$codmil?>">
        <img class="image"  src="pessoas_img/<?=$img;?>" alt="Card image" width="200" height="200">
        <div class="middle">
          <div class="vtrtitle"><?=$grad."<b> ".$nomeguerra." <br/>".$rg;?></b></div>
        </div>
      </a>  
    </div>



<?php 

include '_form_update.php';

include '_form_delete.php';

} while($row_pessoas = mysqli_fetch_assoc($result_pessoas))  ;?>
