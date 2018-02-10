<?php
	
	include_once ('../../ManterSala/Per/per_Sala.php');
		
	$colunas = $_POST['colunas'];
	$linhas = $_POST['linhas'];
	
	$numeroLugares = $colunas * $linhas;

	$obj_Sala = new Sala($_POST['nomeSala'], $numeroLugares);

	$obj_Sala->setCodigo($_POST['codSala']);
	
	$obj_Sala->updateSala();

	include_once ('../../ManterAssento/Per/per_Assento.php');

	$obj_Assento = new Assento($_POST['codSala'], $_POST['colunas'], $_POST['linhas']);
	
	$res = $obj_Assento->updateAssento();

	echo "<span class='msgm'>{$res['msg']}</span>";
	
?>