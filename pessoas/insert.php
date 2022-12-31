<div class="modal fade" id="insert">
  <div class="modal-dialog" >
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header bg-info">
        <h4 class="modal-title"><i class="fas fa-user-plus"></i> Adicionar Pessoas</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-1 gy-1 text-center">
          <div class="col-sm">
            <form action="model.php" method="POST" class="row gx-3 gy-2 text-center">
              <div class="form-floating"> 
                <input class="form-control" list="grad" name="grad" placeholder="grad" required>
                  <datalist id="grad">
                    <option value="Cel QOC">
                    <option value="TC QOC">
                    <option value="Maj QOC">
                    <option value="Cap QOA">
                    <option value="Cap QOC">            
                    <option value="Cap QOS">            
                    <option value="1º Ten QOA">
                    <option value="1º Ten QOC">            
                    <option value="2º Ten QOA">
                    <option value="2º Ten QOC">
                    <option value="Asp Of">
                    <option value="ST QPC">
                    <option value="1º Sgt QP/Comb">
                    <option value="2º Sgt QP/Comb">
                    <option value="3º Sgt QPC/Comb">
                    <option value="Cb QP/Comb">
                    <option value="Sd QP/Comb">
                    <option value="Sd 2º Classe">
                  </datalist>
                <label for="grad">Posto/Grad:</label>
                <div class="valid-feedback">Válido</div>
              </div>
              <div class="form-floating">   
                <input type="text" class="form-control" name="rg" placeholder="numero do RG"   required>
                <label for="rg">RG:</label>
                <div class="valid-feedback">Válido</div>
              </div>
              <div class="form-floating"> 
                <input type="text" class="form-control" name="nomeguerra" placeholder="Nome de guerra" required>
                <label for="nomeguerra">Nome de Guerra:</label>
                <div class="valid-feedback">Válido</div>
              </div>
              <div class="form-floating"> 
                <input type="text" class="form-control" name="nome" placeholder="Nome completo"  required>
                <label for="nome">Nome Completo:</label>
                <div class="valid-feedback">Válido</div>
              </div>

              <div class="form-floating"> 
                <input type="text" class="form-control" name="contato" placeholder="Contato"  required>
                <label for="contato">Contato:</label>
                <div class="valid-feedback">Válido</div>
              </div>

              <div class="form-floating">
                <select class="form-select"  name="pstatus" placeholder="Status" required>
                  <option value="s">Ativa</option>
                  <option value="n">Inativa</option>
                </select>
                <label for="pstatus">Status:</label>
              </div>

              <div class="form-floating">
                <button type="submit" class="btn btn-primary mt-3" name="acao" value="pessoasinsert">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>