<?php
    include "../conexao.php";

    $sql = "SELECT * FROM mapas ORDER BY idmapa DESC ";

    if(!empty($_GET['idmapa'])) {

        $idmapa = $_GET['idmapa'];
        $sql = "SELECT * FROM mapas WHERE idmapa=$idmapa";
        
    }

    $itens_por_pagina = 30;

    $p = (isset($_GET['p']))?$_GET['p']:1;

    $inicio = ($itens_por_pagina*$p)-$itens_por_pagina;

    $sql_lim = $sql." LIMIT $inicio, $itens_por_pagina"; 
    


       if(!empty($_POST['fdata'])) {

            $fdata = $_POST['fdata'];
            $fdata2 = date('Y-m-d H:i:s', strtotime($fdata));
            $sql_lim = "SELECT * FROM mapas WHERE data LIKE '%$fdata2'";

        }

    $result = mysqli_query($conn, $sql);
    $result_lim = mysqli_query($conn, $sql_lim);
    $row = mysqli_fetch_assoc($result_lim);
    
    $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas WHERE pstatus = 's' ORDER BY nomeguerra ASC";

    $num_total =  mysqli_num_rows($result);

    $num_paginas = ceil($num_total/$itens_por_pagina);

// --------------------------------------------------------------------------------- 

if(!empty($_POST['acao'])) {

        $acao = $_POST['acao'];
        $ala = $_POST["ala"];
        $idofdia = $_POST["idofdia"];
        $idchefe = $_POST["idchefe"];
        $idtel1 = $_POST["idtel1"];
        $idtel2 = $_POST["idtel2"];
        $data = $_POST["data"]; 
       
    if($acao == 'insertmapa') {
        
        $sql = "INSERT INTO mapas(ala, idofdia, idchefe, idtelefonista1, idtelefonista2, data)
        VALUES ('$ala', $idofdia, $idchefe, $idtel1, $idtel2, '$data')";

          if ($conn->query($sql) === TRUE) {
            $mapa_ultimo_registro = $conn->insert_id;
            
                  echo "<script>location.href='/mapadet/?idmapa=".$mapa_ultimo_registro."&acao=ins'</script>";
                  echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                exit;




    }

     if($acao == 'updatemapa') {
        $idmapa = $_POST['idmapa'];
        $sql = "UPDATE mapas SET ala='$ala', idofdia=$idofdia, idchefe=$idchefe, idtelefonista1=$idtelefonista1,  idtelefonista2=$idtelefonista2, data='$data' WHERE idmapa=$idmapa";
                    echo " 
                    <div class='conteiner-fluid text-center p-2'>
                    <button class='btn btn-primary' disabled>
                    <span class='spinner-border spinner-border-sm'></span>
                    Carregando... 
                    </button>
                    </div>
                    ";
          if ($conn->query($sql) === TRUE) {
                
                  echo "<script>location.href='/mapadet/index.php?idmapa=".$idmapa."'</script>";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }

    }



}
    
 ;?>