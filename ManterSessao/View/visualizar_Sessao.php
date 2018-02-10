<?php
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();
	
	include_once('../../ManterSessao/Per/per_Sessao.php');
	$obj_Sessao = new Sessao;
	
	include_once('../../Framework/Tela/Tela.php');
	$obj_Tela = new Tela("Visualizar Sessões");

	$obj_Tela->getHead(1);
		
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();
	
	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Consultar Sessões');
	
	$obj_Sessao->getSessao();
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
		
?>