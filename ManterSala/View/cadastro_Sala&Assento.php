<?php
	
	include_once('../../Framework/Tela/Tela.php');
	$obj_Tela = new Tela('Cadastro de Salas');

	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();
	
	$obj_Tela->getHead(1);
	
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Cadastro de Salas');
	
	$obj_Tela->getForm('../../ManterSala/Neg/neg_Sala&AssentoInsert.php', 'post', 1);
	
	$obj_Tela->getInputTextBootstrap('Número Sala', 'nomeSala', 'col-md-12');
	
	$obj_Tela->getInputTextBootstrap('Linhas', 'linhas', 'col-md-6');
	
	$obj_Tela->getInputTextBootstrap('Colunas', 'colunas', 'col-md-6');
	
	$obj_Tela->getButton('submit', 'cadastro', 'Cadastrar');

	$obj_Tela->getMsg();
	
	$obj_Tela->getForm('../../ManterSala/Neg/neg_Sala&AssentoInsert.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
