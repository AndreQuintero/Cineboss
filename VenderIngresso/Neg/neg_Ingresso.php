<?php
	include_once ('../../VenderIngresso/Per/per_Ingresso.php');
	
	$obj_Ingresso = new Ingresso($_POST['sessao'], $_POST['valorEntrada'], $_POST['tipoEntrada']); /*$_POST['codFuncionario']*/
	
	$res = $obj_Ingresso->insereIngresso();
	
	echo "<span class='msgm'>{$res['msg']}</span>";
	
?>