
<?php
    include_once('../../Framework/Tela/Tela_Lancamento.php');
    include_once('../../ManterFilme/Per/per_Filme.php');
    $obj_Tela = new Tela("Lançamentos");
    $obj_Filme = new Filme();    

    $obj_Tela->getHead(1);

    $obj_Tela->getHeader();

    $obj_Tela->getAbreContainer();
	
	$obj_Tela->getH('h1','Lançamentos');
	
	$obj_Tela->getAbreTextCenter();
	
	$obj_Filme->getImagemLancamento();
	// criar metodo para receber imagem
	
	$obj_Tela->getFechaContainer();
	
	$obj_Tela->getFechaTextCenter();

    $obj_Tela->getLancamento();
        
    $obj_Tela->getFooter();
	
    $obj_Tela->getFechaHead();
	


?>