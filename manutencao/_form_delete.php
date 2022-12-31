<div class="modal fade" id="excluir<?=$id?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header btn-danger">
        <h4 class="modal-title">#<?=$id?> Excluir Manutenção em <?=$vtrtipo?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <p>Tem certeza que deseja excluir esse registro?</p>
         <a href="?delete=<?=$id?>" class="btn btn-danger">Sim</a> 
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>  
