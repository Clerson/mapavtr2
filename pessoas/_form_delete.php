<div class="modal fade" id="excluir<?php echo $row_pessoas['codmil'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">#<?php echo $row_pessoas['codmil']; ?> Excluir <?php echo $row_pessoas['grad'] ." ".$row_pessoas['nomeguerra']; ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="model.php?delete=<?php echo $row_pessoas['codmil'];?>" class="btn btn-danger">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>  
