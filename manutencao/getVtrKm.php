 

 <?php
  require_once "../conexao.php";
    $idvtr = $_GET['idvtr'];
    $sql_km = "SELECT odomentr, iddetmp FROM detmapa WHERE idvtr=$idvtr ORDER BY iddetmp DESC LIMIT 1";
    $result_km = mysqli_query($conn, $sql_km);
    $row_km = mysqli_fetch_assoc($result_km);

    if (mysqli_num_rows($result_km) > 0 ) { // Se o número de registros selecionados for maior que 0
    $odomentr = $row_km['odomentr']; } // a variavel $odomentr recebe o valor do registro
    else { $odomentr = 0; } // se não a variável recebe o valor 0.

         echo "
                <input type='number' class='form-control' name='odom' value='".$odomentr."' >
                <label for='odom'>KM atual (Mapa VTR):</label>
      ";
?>