<?php
	include_once('../../Framework/Tela/Tela_Login.php');
	$obj_Tela = new TelaLogin("CineBoss - Login");
	
	$obj_Tela->getHead(1);
	
	$obj_Tela->Img('logo','../../app/img/logo.png');
	
	$obj_Tela->Titulo('Login', 'h4', 'Acesse sua conta!');
	
	$obj_Tela->getForm('../../Login/Neg/neg_Login.php', 'POST', 1);
		
	$obj_Tela->getInputText('usuario');
	
	$obj_Tela->getInputSenha('senha');
	
	$obj_Tela->getButton('submit', 'login', 'Login');

	$obj_Tela->getMsg();
	
	$obj_Tela->getForm('../../Login/Neg/neg_Login.php', 'POST');
	
	$obj_Tela->getFechaHead();
	
?>	