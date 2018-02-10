<?php
	include_once ('../../ManterFilme/Per/per_Filme.php');
    
	

	$target_dir = "../../imgrecebida/"; // metodo de salvar o caminho da imagem                                                             no banco

	$target_file = $target_dir . $_FILES["caminhoImagem"]["name"];              
	$uploadOk= 1;
	$imagemFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	if(move_uploaded_file($_FILES["caminhoImagem"]["tmp_name"], $target_file))
	{
		$uploadOk = 1;
    
	}else{
		$uploadOk = 0;
	}
		$obj_Filme = new Filme($_POST['titulo'], $_POST['genero'], $_POST['sinopse'], $_POST['classificacao'],$_POST['duracao'],$_POST['linkVideo'], $_POST['dataIni'], $_POST['dataTer'], $_POST['tipoFilme'],$target_file); 
	
		$res = $obj_Filme->insereFilme();
	
		echo "<span class='msgm'>{$res['msg']}</span>";
	
	
?>