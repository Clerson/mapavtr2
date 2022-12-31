<?php
   include "../conexao.php";
   // $order = "ORDER BY id DESC";
   $sql = "SELECT *, vtr.id as vtrid, manut.id as id FROM manut, vtr WHERE manut.idvtr=vtr.id ";
    // $sql = $sql1.$order;

    if (!empty($_GET['idvtr'])) {    
      $idvtr = $_GET['idvtr'];
      $sql .= "AND vtr.id = $idvtr ORDER BY manut.id DESC";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $vtrtipo = $row["tipo"];
      $vtrimg = $row["img"];
      $vtrodomatual = $row["odomatual"];
   }

   if (!empty($_GET['id'])) {    
      $id = $_GET['id'];
      $sql .= "AND id = $id";

          $sql_manut = "SELECT id, manutid, manut_tipo_id, vtrmantipo_id, vtrmanparte, vtrmantipo FROM manut_det, manut_tipo WHERE manutid=$id AND manut_tipo_id=vtrmantipo_id";

          $result_manut = $conn->query($sql_manut);
          $row_manut = $result_manut->fetch_assoc();
          $num_row_manut = $result_manut->num_rows;
   }


    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $num_row = $result->num_rows;






   


if (isset($_POST['acao'])) {

    $data = $_POST["data"];
    $idvtr = $_POST["idvtr"];
    $odom = $_POST["odom"];    
    $respons = $_POST["respons"];
    $status = $_POST["status"];
    $observ = $_POST["observ"];

    if ($_POST['acao'] === "insert") {


      $sql = "INSERT INTO manut (
        idvtr, 
        data,
        odom,
        respons,
        observ,
        status
        
        )

      VALUES (
        $idvtr, 
        '$data', 
        $odom,
        '$respons',
        '$observ',
        '$status'
        )";

          if ($conn->query($sql) === TRUE) {
      echo "<script>location.href='index.php'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }



    if ($_POST['acao'] === "update") {

        $id = $_POST['id'];
        $sql = "UPDATE manut SET 
        idvtr=$idvtr, 
        data='$data',
        odom=$odom,
        respons='$respons',
        status='$status',
        observ='$observ'

    WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
      echo "<script>location.href='list2.php?idvtr=$idvtr'</script>";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;

    }

    }




}

    if(!empty($_GET['delete'])) {

    $id = $_GET['delete'];

     $sql = "DELETE FROM manut WHERE id=$id";

     if ($conn->query($sql) === TRUE) {            
        echo "
        <script>location.href='/manutencao'</script>";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      } exit();
    
    } // FIM DA if(($acao) == 'delete')


;?>