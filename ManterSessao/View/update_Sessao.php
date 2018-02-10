<?php

	$codSessao = $_GET['codSessao'];
	$horaIni= $_GET['horaIni'];
	$horaTer = $_GET['horaTer'];

	include_once('../../Framework/Tela/Tela_Update.php');
    $obj_Tela = new Tela("Atualizar Sessão");

    include_once('../../ManterSessao/Per/per_Sessao.php');
	$obj_Select = new Sessao();
	
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();

	$obj_Tela->getHead(1);

	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();
	
	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Atualizar Sessão');
	
	$obj_Tela->getForm('../../ManterSessao/Neg/neg_SessaoUpdate.php', 'post', 1);

	$obj_Tela->getInputHidden('codSessao', $codSessao);
	
	$obj_Tela->getSelect('Filme', 'filme', 'col-md-12', $obj_Select->getFilmes());
	
	$obj_Tela->getSelect('Sala', 'sala', 'col-md-12', $obj_Select->getSala());
	
	$obj_Tela->getInputTextBootstrap('Hora de Inicio', 'horaIni', $horaIni, 'col-md-6');
	
	$obj_Tela->getInputTextBootstrap('Hora de Termino', 'horaTer', $horaTer, 'col-md-6');

	$obj_Tela->getInputDate('Data da Sessão', 'dataSessao', 'dataSessao', '', 'col-md-12');

	$obj_Tela->getButton('submit', 'atualizar', 'Atualizar');

	$obj_Tela->getForm('../../ManterSessao/Neg/neg_SessaoUpdate.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
