<?php
	$codFilme = $_GET['codFilme'];
	$titulo = $_GET['titulo'];
	$genero = $_GET['genero'];
	$sinopse = $_GET['sinopse'];
	$classificacao = $_GET['classificacao'];
	$duracao = $_GET['duracao'];
	$dataIni = $_GET['dataIni'];
	$dataTer = $_GET['dataTer'];
	$tipo = $_GET['tipo'];
	$linkVideo = $_GET['linkVideo'];
	$caminhoImagem = $_GET['caminhoImagem'];
	
	include_once('../../Login/Per/per_Login.php');
	$obj_Session = new Login();

	$session = $obj_Session->getSession();

	include_once('../../Framework/Tela/Tela_Update.php');

	$obj_Tela = new Tela("Atualizar Filmes");
	
	$obj_Tela->getHead(1);
	
	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	echo '<p> Logado como:' . '<strong>' . $session['NOME'].'</p></strong>';
	
	$obj_Tela->getH('h1', 'Atualizar Filmes');
	
	$obj_Tela->getForm('../Neg/neg_FilmeUpdate.php', 'POST', 1, true);
	
	$obj_Tela->getInputHidden('codFilme', $codFilme);
	
	$obj_Tela->getInputTextBootstrap('Titulo Filme', 'titulo', $titulo , 'col-md-12');

	$obj_Tela->getSelect('Gênero', 'genero', 'col-md-12', [["Ação", 'Ação'], ["Terror", 'Terror'], ["Aventura", 'Aventura'], ["Comedia", 'Comedia'], ["Ficção", 'Ficção']]);
	
	$obj_Tela->getInputTextBootstrap('Sinopse', 'sinopse', $sinopse, 'col-md-12');
	
    $obj_Tela->getSelect('Classificação', 'classificacao', 'col-md-12', [["Livre", 'Livre'], ["12 anos", '12 anos'], ["16 anos", '16 anos'], ["18 anos", '18 anos']]);

	$obj_Tela->getInputTextBootstrap('Duração', 'duracao', $duracao, 'col-md-12');
		
	$obj_Tela->getInputDate('Data de Ínicio', 'dataIni', 'dataIni', $dataIni, 'col-md-6');
	
	$obj_Tela->getInputDate('Data de Termino', 'dataTer', 'dataTer', $dataTer, 'col-md-6');
	
	$obj_Tela->getSelect('Tipo do Filme', 'tipoFilme', 'col-md-12', [["Dublado", 'Dublado'], ["Legendado", 'Legendado'], ["Dublado 3D", 'Dublado 3D'], ["Legendado3D", 'Legendado3D']]);
	
	 $obj_Tela->getInputTextBootstrap('Link Trailer', 'linkVideo', $linkVideo, 'col-md-12');
	
    $obj_Tela->getInputFile('Cartaz do Filme', 'caminhoImagem', $caminhoImagem);

	$obj_Tela->getButton('submit', 'atualizar', 'Atualizar');

	$obj_Tela->getMsg();
	
	$obj_Tela->getForm('../Neg/neg_FilmeUpdate.php', 'POST');
	
	$obj_Tela->getFechaSection();
	
	$obj_Tela->getFechaHead();
	
	
?>
