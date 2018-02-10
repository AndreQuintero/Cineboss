<?php
	include_once('../../Framework/Tela/Tela.php');
    $obj_Tela = new Tela("Index");
    
    include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
	$session = $obj_Session->getSession();
	
	$obj_Tela->getHead(1);
	
	$obj_Tela->getHeader();
	
    echo '<h1>Logado como:  '.$session['NOME'].'</h1>';
    
	$obj_Tela->getFechaHead();
?>