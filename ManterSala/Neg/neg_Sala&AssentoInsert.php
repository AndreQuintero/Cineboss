<?php
	$codSala = null;
	$colunas = $_POST['colunas'];
	$linhas = $_POST['linhas'];
	
	$numeroLugares = $colunas * $linhas;

	include_once ('../../ManterSala/Per/per_Sala.php');
	
	$obj_Sala = new Sala($_POST['nomeSala'], $numeroLugares);
	
	$codSala = $obj_Sala->insereSala();
		
	include_once ('../../ManterAssento/Per/per_Assento.php');
	
	$obj_Assento = new Assento($codSala, $_POST['colunas'], $_POST['linhas']);
	
	$res = $obj_Assento->insereAssento();
	
	echo "<span class='msgm'>{$res['msg']}</span>";
	
	
?>