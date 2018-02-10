<?php
	
	$codSala = $_GET['codSala'];
	$nomeSala = $_GET['nomeSala'];

	include_once('../../Framework/Tela/Tela_Update.php');
	$obj_Tela = new Tela("Atualizar Salas");
	
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();

	$obj_Tela->getHead(1);
	
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';

	$obj_Tela->getH('h1', 'Atualizar Salas');
	
	$obj_Tela->getForm('../../ManterSala/Neg/neg_Sala&AssentoUpdate.php', 'post', 1);

	$obj_Tela->getInputHidden('codSala', $codSala);
	
	$obj_Tela->getInputTextBootstrap('Número Sala', 'nomeSala', $nomeSala, 'col-md-12');
	
	$obj_Tela->getInputTextBootstrap('Linhas', 'linhas', "",'col-md-6');
	
	$obj_Tela->getInputTextBootstrap('Colunas', 'colunas', "", 'col-md-6');
	
	$obj_Tela->getButton('submit', 'atualizar', 'Atualizar');
	
	$obj_Tela->getForm('../../ManterSala/Neg/neg_Sala&AssentoUpdate.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
