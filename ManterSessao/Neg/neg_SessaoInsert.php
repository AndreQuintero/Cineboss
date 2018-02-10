<?php
	include_once ('../../ManterSessao/Per/per_Sessao.php');
	
	
		$obj_Sessao = new Sessao($_POST['filme'], $_POST['sala'], $_POST['horaIni'], $_POST['horaTer'],$_POST['dataSessao']);
	
		$res = $obj_Sessao->insereSessao();

		echo "<span class='msgm'>{$res['msg']}</span>";
	
	
	
?>