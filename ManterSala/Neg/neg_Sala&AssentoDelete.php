<?php
	
	include_once('../../ManterSala/Per/per_Sala.php');

    $obj_Sala = new Sala();
	
	$obj_Sala->setCodigo($_GET['codSala']);
	
	$obj_Sala->deleteSala();

	include_once('../../ManterAssento/Per/per_Assento.php');

	$obj_Assento = new Assento();
	
	$obj_Assento->setCodigo($_GET['codSala']);
	
	 $obj_Assento->deleteAssento();
	
	
	
	header ('location: ../../ManterSala/View/visualizar_Sala&Assento.php');
?>