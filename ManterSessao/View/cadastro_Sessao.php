<?php
	include_once('../../Framework/Tela/Tela.php');
    $obj_Tela = new Tela('Cadastro de Sessão');
    
    include_once('../../ManterSessao/Per/per_sessao.php');
	$obj_Select = new Sessao();
	
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();
	
	$obj_Tela->getHead(1);

	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Cadastro de Sessão');
	
	$obj_Tela->getForm('../../ManterSessao/Neg/neg_SessaoInsert.php', 'post', 1);
	
	$obj_Tela->getSelect('Filme', 'filme', 'col-md-12', $obj_Select->getFilmes());
	
	$obj_Tela->getSelect('Sala', 'sala', 'col-md-12', $obj_Select->getSala());
	
	$obj_Tela->getInputTextBootstrap('Hora de Inicio', 'horaIni', 'col-md-6');
	
	$obj_Tela->getInputTextBootstrap('Hora de Termino', 'horaTer', 'col-md-6');

	$obj_Tela->getInputDate('Data da Sessão', 'dataSessao', 'dataSessao', 'col-md-12');

	$obj_Tela->getButton('submit', 'cadastro', 'Cadastrar');
	
	$obj_Tela->getMsg();

	$obj_Tela->getForm('../../ManterSessao/Neg/neg_SessaoInsert.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
