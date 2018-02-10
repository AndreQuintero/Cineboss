<?php
	include_once('../../Framework/Tela/Tela.php');
    $obj_Tela = new Tela('Venda Ingresso');

    include_once('../../VenderIngresso/Per/per_Ingresso.php');
	$obj_Select = new Ingresso();

	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();
	
	$obj_Tela->getHead(1);

	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Venda Ingresso');
	
	$obj_Tela->getForm('../../VenderIngresso/Neg/neg_Ingresso.php', 'post', 1);
	
	$obj_Tela->getSelect('Sessão', 'sessao', 'col-md-20', $obj_Select->getSessao());

	$obj_Tela->getInputTextBootstrap('Valor da Entrada', 'valorEntrada', 'col-md-6');

	$obj_Tela->getSelect('Tipo de Ingresso', 'tipoEntrada', 'col-md-6', [['Meia', 'meia'], ['Inteiro', 'inteiro']]);

	//$obj_Tela->getInputHidden('codFuncionario', $session['COD_FUNCIONARIO']);
	
	$obj_Tela->getMsg();
	
	$obj_Tela->getButton('submit', 'Vender', 'Vender');

	$obj_Tela->getForm('../../VenderIngresso/Neg/neg_Ingresso.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
