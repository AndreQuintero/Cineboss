<?php

	include_once('../../ManterFilme/Per/per_Filme.php');
	$obj_Select = new Filme();
	
	include_once('../../Framework/Tela/Tela.php');
	$obj_Tela = new Tela("Visualizar Filmes");

	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();

	$obj_Tela->getHead(1);
		
	$obj_Tela->getHeader();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getSection();
	
	$obj_Tela->getH('h1', 'Consultar Filmes');
	
	$obj_Select->getFilme();
	
	$obj_Tela->getForm('../../ManterFilme/Neg/neg_FilmeDelete.php', 'post', 1);
	
	$obj_Tela->getMsg();
	
	$obj_Tela->getForm('../../ManterFilme/Neg/neg_FilmeDelete.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
		
?>