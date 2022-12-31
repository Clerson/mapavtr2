        <form action="model.php" method="POST" class="row text-center gx-1 gy-1">
          <div class="row text-center gx-1 gy-1">
            <div class="form-floating">

              <div class="form-check-inline p-1">
                <img src="../img/alpha.jpeg" width="38" class="rounded-circle">
                <input type="radio" class="btn-check" name="ala" id="a" autocomplete="off" value="Alpha" required>
                <label class="btn btn-outline-primary" for="a">Alpha</label>
              </div>

              <div class="form-check-inline p-1">
                <img src="../img/bravo.jpeg" width="38" class="rounded-circle">
                <input type="radio" class="btn-check" name="ala" id="b" autocomplete="off" value="Bravo" required>
                <label class="btn btn-outline-primary" for="b">Bravo</label>
              </div>

              <div class="form-check-inline p-1">
                <img src="../img/charlie.jpeg" width="38" class="rounded-circle">
                <input type="radio" class="btn-check" name="ala" id="c" autocomplete="off" value="Charlie" required>
                <label class="btn btn-outline-primary" for="c">Charlie</label>
              </div>

              <div class="form-check-inline p-1">
                <img src="../img/delta.jpeg" width="38" class="rounded-circle">
                <input type="radio" class="btn-check" name="ala" id="d" autocomplete="off" value="Delta" required>
                <label class="btn btn-outline-primary" for="d">Delta</label>
              </div>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating"> <!-- DATA DO SERVIÇO -->
              <input type="date" class="form-control" name="data" placeholder="Data do serviço" value="<?php echo date('Y-m-d');?>"  required>
              <label for="data">Data do serviço:</label>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- OFICIAL DE DIA -->
              <select class="form-select" name="idofdia">
                <option value=''> Selecione o Oficial de Dia</option>
                <?php

                  $res_p = $conn->query($sql_p);
                  $row_p = $res_p->fetch_assoc();
                  
                  do { ?>
                  <option value="<?=$row_p['codmil'];?>" required><?=$row_p['nomeguerra'];?></option>
                  <?php } while($row_p = $res_p->fetch_assoc()) ?>
              </select>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- CHEFE DO SERVIÇO DE DIA -->
              <select class="form-select" name="idchefe">
                <option value=""> Selecione o Chefe de Socorro</option>
                <?php
                  $res_p = $conn->query($sql_p);
                  $row_p = $res_p->fetch_assoc();
                   do { ?>
                  <option value="<?=$row_p['codmil'];?>" required><?=$row_p['nomeguerra'];?></option>
                  <?php } while($row_p = $res_p->fetch_assoc()) ?>
              </select>
            </div>
          </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- TELEFONISTA 1 -->
              <select class="form-select" name="idtel1">
                <option value=''> Selecione o Videofonista 1</option>
                <?php
                  $res_p = $conn->query($sql_p);
                  $row_p = $res_p->fetch_assoc();
                  do { ?>
                  <option value="<?=$row_p['codmil'];?>" required><?=$row_p['nomeguerra'];?></option>
                  <?php } while($row_p = $res_p->fetch_assoc()) ?>
              </select>
            </div>
            </div>

          <div class="row gx-1 gy-1 text-center">
            <div class="form-floating col-sm"> <!-- TELEFONISTA 2 -->
              <select class="form-select" name="idtel2">
                <option value=''> Selecione o Videofonista 2</option>
                <?php
                  $res_p = $conn->query($sql_p);
                  $row_p = $res_p->fetch_assoc();
                  do { ?>
                  <option value="<?=$row_p['codmil'];?>" required><?=$row_p['nomeguerra'];?></option>
                  <?php } while($row_p = $res_p->fetch_assoc()) ?>
              </select>
            </div>
          </div>
              
          <div class="form-floating">
            <button type="submit" class="btn btn-primary" name="acao" value="insertmapa">Enviar</button>
          </div>
      </form>
    