<div class="modal fade" id="updatepessoa<?=$codmil?>">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><i class="fas fa-user"></i> Alterando Dados de <?=$nomeguerra?><h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row gx-2 gy-2 text-center">
          <div class="col-sm-4">
            <img class="image"  src="pessoas_img/<?=$img?>" alt="Card image">
            <form action="upload_pessoa_img.php" method="POST" enctype="multipart/form-data">
              <input type="file" class="form-control mt-2" name="fileToUpload" id="fileToUpload" required>
              <input type="text" name="codmil" value="<?=$codmil?>" hidden>
              <input type="submit"  class="btn btn-primary mt-2" value="Enviar" name="submit">
            </form>
          </div>
          <div class="col-sm">
            <form action="model.php" method="POST"  class="row gx-2 gy-2 text-center">
              <div class="row gx-2 gy-1">
                <div class="col-sm">              
                  <div class="form-floating"> 
                    <select class="form-select" name="grad" required>
                      <option value="Cel QOC" <?php if ($grad == 'Cel QOC') echo 'selected';?>>Cel QOC</option>
                      <option value="TC QOC" <?php if ($grad == 'TC QOC') echo 'selected';?>>TC QOC</option>
                      <option value="Maj QOC" <?php if ($grad == 'Maj QOC') echo 'selected';?>>Maj QOC</option>
                      <option value="Cap QOC" <?php if ($grad == 'Cap QOC') echo 'selected';?>>Cap QOC</option>
                      <option value="Cap QOA" <?php if ($grad == 'Cap QOA') echo 'selected';?>>Cap QOA</option>
                      <option value="Cap QOS" <?php if ($grad == 'Cap QOS') echo 'selected';?>>Cap QOS</option>           
                      <option value="1º Ten QOC" <?php if ($grad == '1º Ten QOC') echo 'selected';?>>1º Ten QOC</option>
                      <option value="1º Ten QOA" <?php if ($grad == '1º Ten QOA') echo 'selected';?>>1º Ten QOA</option>            
                      <option value="2º Ten QOC" <?php if ($grad == '2º Ten QOC') echo 'selected';?>>2º Ten QOC</option>
                      <option value="2º Ten RR" <?php if ($grad == '2º Ten RR') echo 'selected';?>>2º Ten RR</option>
                      <option value="2º Ten QOA" <?php if ($grad == '2º Ten QOA') echo 'selected';?>>2º Ten QOA</option>
                      <option value="Asp Of" <?php if ($grad == 'Asp Of') echo 'selected';?>>Asp Of</option>
                      <option value="ST QP/Comb" <?php if ($grad == 'ST QP/Comb') echo 'selected';?>>ST QP/Comb</option>
                      <option value="ST RR QP/Comb" <?php if ($grad == 'ST RR QP/Comb') echo 'selected';?>>ST RR QP/Comb</option>
                      <option value="1º Sgt QP/Comb" <?php if ($grad == '1º Sgt QP/Comb') echo 'selected';?>>1º Sgt QP/Comb</option>
                      <option value="2º Sgt QP/Comb" <?php if ($grad == '2º Sgt QP/Comb') echo 'selected';?>>2º Sgt QP/Comb</option>
                      <option value="3º Sgt QP/Comb" <?php if ($grad == '3º Sgt QP/Comb') echo 'selected';?>>3º Sgt QP/Comb</option>
                      <option value="Cb QP/Comb" <?php if ($grad == 'Cb QP/Comb') echo 'selected';?>>Cb QP/Comb</option>
                      <option value="Sd QP/Comb" <?php if ($grad == 'Sd QP/Comb') echo 'selected';?>>Sd QP/Comb</option>
                      <option value="Sd 2º Classe" <?php if ($grad == 'Sd 2º Classe') echo 'selected';?>>Sd 2º Classe</option>
                    </select>
                    <label for="grad">Posto/Grad:</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-floating">   
                    <input type="text" class="form-control" name="rg" value="<?=$rg?>" placeholder="numero do RG"   required>
                    <label for="rg">RG:</label>
                  </div>
                </div>
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$nomeguerra?>" name="nomeguerra" placeholder="Nome de guerra" required>
                    <label for="nomeguerra">Nome de Guerra:</label>
                  </div>
                </div>
              </div>
              <div class="row gx-2 gy-1">  
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$nome?>" name="nome" placeholder="Nome completo"  required>
                    <label for="nome">Nome Completo:</label>
                  </div> 
                </div> 
                <div class="col-sm">
                  <div class="form-floating"> 
                    <input type="text" class="form-control" value="<?=$contato?>" name="contato" placeholder="Contato"  required>
                    <label for="contato">Contato:</label>
                  </div>
                </div>    
              </div>
                  <div class="form-floating">
                    <select class="form-select" name="pstatus" required>
                      <option value="s" <?php if ($pstatus == 's') echo 'selected';?>>Ativo</option>
                      <option value="n" <?php if ($pstatus == 'n') echo 'selected';?>>Inativo</option>
                    </select>
                    <label for="pstatus">Status:</label>
                  </div>

              <input type="int" name="codmil" value="<?=$codmil?>" hidden>
              <div class="form-floating">
                <button type="submit" class="btn btn-primary" name="acao" value="pessoasupdate">Enviar</button>
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