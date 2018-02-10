<?php
	$titulo = $_GET['titulo'];
	$caminho_imagem = $_GET['caminho_Imagem'];
	$sinopse = $_GET['sinopse'];
	$genero = $_GET['genero'];
	$classificacao = $_GET['classificacao'];
	$duracao = $_GET['duracao'];
	$tipo = $_GET['tipoFilme'];
	$linkvideo = $_GET['linkVideo'];

	include_once('../../Framework/Tela/Tela_Consulta_Filme.php');
	$obj_Tela = new Tela($titulo);

	$obj_Tela->getHead(1);

	$obj_Tela->getHeader();
	
	$obj_Tela->getSection();

	$obj_Tela->getCorpo($titulo, $caminho_imagem, $sinopse, $duracao, $classificacao, $genero, $tipo);

	$obj_Tela->getFechaSection();

	$obj_Tela->getTrailer($linkvideo);

	$obj_Tela->getFooter();

?>