<?php
	include_once('../../Framework/Tela/Tela.php');
	$obj_Tela = new Tela('Cadastro de Filmes');
	
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();
		
	$session = $obj_Session->getSession();

	$obj_Tela->getHead(1);
	
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();
	
	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';

	$obj_Tela->getH('h1', 'Cadastro de Filmes');
	
	$obj_Tela->getForm('../../ManterFilme/Neg/neg_FilmeInsert.php', 'post', 1, true);
	
	$obj_Tela->getMsg();
	
	$obj_Tela->getInputTextBootstrap('Titulo Filme', 'titulo', 'col-md-12');

	$obj_Tela->getSelect('Gênero', 'genero', 'col-md-12', [['Ação', 'Ação'], ['Aventura', 'Aventura'], ['Terror', 'Terror'], ['Comedia', 'Comedia'], ['Ficção', 'Ficção']]);
	
	$obj_Tela->getInputTextBootstrap('Sinopse', 'sinopse', 'col-md-12');
	
    $obj_Tela->getSelect('Classificação', 'classificacao', 'col-md-12', [['Livre', 'Livre'], ['12 anos', '12 anos'], ['16 anos', '16 anos'], ['18 anos', '18 anos']]);

	$obj_Tela->getInputTextBootstrap('Duração', 'duracao', 'col-md-12');
		
	$obj_Tela->getInputDate('Data de Ínicio', 'dataIni', 'dataini', 'col-md-6');
	
	$obj_Tela->getInputDate('Data de Termino', 'dataTer', 'datater', 'col-md-6');
	
	$obj_Tela->getSelect('Tipo do Filme', 'tipoFilme', 'col-md-12', [['Dublado', 'Dublado'], ['Legendado', 'Legendado'], ['Dublado 3D', 'Dublado 3D'], ['Legendado3D', 'Legendado3D']]);
	
	 $obj_Tela->getInputTextBootstrap('Link Trailer', 'linkVideo', 'col-md-12');
	
    $obj_Tela->getInputFile('Cartaz do Filme', 'caminhoImagem');
	
	$obj_Tela->getButton('submit', 'cadastro', 'Cadastrar');
	
		
	$obj_Tela->getForm('../../ManterFilme/Neg/neg_FilmeInsert.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
