<?php
	
	include_once('../../ManterFilme/Per/per_Filme.php');

    $obj_Filme = new Filme();
	
	$obj_Filme->setCodigo($_GET['codFilme']);
	
	$res = $obj_Filme->deleteFilme();
	
	header ('location: ../../ManterFilme/View/visualizar_Filme.php');
	
?>