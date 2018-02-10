<?php

	include_once('../../ManterSala/Per/per_Sala.php');
	$obj_Select = new Sala();
	
	include_once('../../Framework/Tela/Tela.php');
	$obj_Tela = new Tela("Visualizar Salas");

	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();

	$obj_Tela->getHead(1);
		
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
		
	$obj_Tela->getH('h1', 'Consultar Salas');
	
	$obj_Select->getSala();
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
		
?>