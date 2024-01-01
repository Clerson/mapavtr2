<?php 
include_once "../templates/header.php";
require_once '../conexao.php'; 
?>

<h1>Extrato do Mapa de Viaturas do 9º BBM - CALDAS NOVAS/GO</h1>

<?php

if(!empty($_GET['iddetmp'])) {

	$iddetmp = $_GET['iddetmp'];

	$sql = "SELECT * 
			FROM mapas, detmapa 
			WHERE idmapa = $iddetmp";

		$res = $conn->query($sql);
		$row = $res->fetch_assoc();

		

		switch ($row['ala']) {
			case 'Alpha':
				$alaimg = 'alpha.jpeg';
				break;
			case 'Bravo':
				$alaimg = 'bravo.jpeg';
				break;
			case 'Charlie':
				$alaimg = 'charlie.jpeg';
				break;
			case 'Delta':
				$alaimg = 'delta.jpeg';
				break;
		};

		echo "
				<h3>Data:<b>".."</b></h3>

		";

	
	$sql_detform = "
									SELECT iddetmp, 
													idvtr, 
													vtrimg, 
													vtrtipo, 
													codmil, 
													nomeguerra, 
													grad, 
													img, 
													odomsaida, 
													odomentr, 
													horasaida, 
													horaentr, 
													destino, 
													detmp_status, 
													obs, 
													num_rai

									FROM detmapa, 
											 vtr, 
											 pessoas

									WHERE iddetmp = $iddetmp 
												AND idvtr = vtrid 
												AND idpessoa = codmil
				 
					";

	$result_detform = $conn->query($sql_detform);  
	$row_detform = $result_detform->fetch_assoc();

	$iddetmp = $row_detform['iddetmp'];
	$idvtr = $row_detform["idvtr"];
	$vtrimg = $row_detform["vtrimg"];
	$vtrtipo = $row_detform["vtrtipo"];
	$idpessoa = $row_detform["codmil"];
	$nomeguerra = $row_detform["nomeguerra"];
	$grad = $row_detform["grad"];
	$pessoaimg = $row_detform["img"];
	$odomsaida = $row_detform["odomsaida"];
	$odomentr = $row_detform["odomentr"];
	$horasaida = $row_detform["horasaida"];
	$horaentr = $row_detform["horaentr"];
	$destino = $row_detform["destino"];
	$status = $row_detform["detmp_status"];
	$obs = $row_detform["obs"];
	$num_rai = $row_detform["num_rai"];

};?>




