<?php
	
	include_once('../../ManterSessao/Per/per_Sessao.php');

    $obj_Sessao = new Sessao();
	
	$obj_Sessao->setCodigo($_GET['codSessao']);
	
    $obj_Sessao->deleteSessao();

	header ('location: ../../ManterSessao/View/visualizar_Sessao.php');;
	
?>