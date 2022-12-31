<?php include_once "../templates/header.php";

require_once 'model.php';?> 
 
<li class="nav-item me-2"><a href="/veiculos" class="btn btn-light"><i class="fas fa-ambulance"></i> Veículos</a></li>
<li class="nav-item me-2"><a href="/manutencao" class="btn btn-light"><i class="fas fa-wrench"></i> Manutenção</a></li>
<li class="nav-item me-2">
    <span class="btn btn-light">Número de manutenções: <b><?=$result->num_rows?></b></span>
</li>

</ul>
</nav>
  
</div> 

<div class="row p-1 rounded-3 bg-light">