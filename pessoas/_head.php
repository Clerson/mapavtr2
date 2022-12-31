<?php include_once "../templates/header.php";?> 
<?php include "model.php" ;?>

<div class='btn btn-light shadow-sm' data-bs-toggle="modal" data-bs-target="#insert"><i class="fas fa-plus-circle"></i></div>
<li class="nav-item me-2"><a href="/pessoas" class="btn btn-light"><i class="fas fa-users"></i> Pessoas</a></li>
<li class="nav-item me-2">
    <input class="form-control" type="text" placeholder="Pesquisar pessoas"  name="search_text" id="search_text">
</li>
<li class="nav-item me-2">
    <span class="btn btn-light">Número de militares ativos: <b><?=mysqli_num_rows($result_pessoas)?></b></span>
</li>

  <!-- <li class="nav-item me-2 d-flex">
    <form action="" method="POST" class="d-flex">
      <select class="form-select me-2" name="pstatus">
        <option value="" >"Filtrar por status"</option>
        <option value="s" selected>Ativos</option>
        <option value="n" >Inativos</option>
      </select>
      <input type="submit" class="btn btn-primary" name="">
    </form>
</li> -->
</ul>
</nav>
  
</div> 

<div class="row p-1 rounded-3 bg-light">