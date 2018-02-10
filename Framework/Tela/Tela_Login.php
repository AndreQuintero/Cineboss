<?php
	class TelaLogin{
	private $titulo;
	
		public function Tela($titulo){
			$this->titulo = $titulo;
		}

		public function getHead($inicio = 1){
			if(!$inicio){
				echo "</body></html>";
			}else{
				echo <<<HTML
				<!DOCTYPE html>
				<html lang="pt-br">
					<html>
						<head>
							<meta charset="utf-8">
							<meta name="viewport" content="width:device-width, initial-scale=1">
							<title> $this->titulo</title>
							<link rel="stylesheet" href="../../app/lib/bootstrap/css/bootstrap.min.css">
							<link rel="stylesheet" href="../../app/lib/font-awe/css/font-awesome.min.css">
							<link rel="shortcut icon" href="../../app/img/favicon.ico" type="image/x-icon"/>
							<link rel="stylesheet" href="../../app/css/estilo-login.css">
						</head>
					<body>
						<div class="container">
							<div class="row">
							
HTML;
			}
		}
		
		public function getH($h, $label){
			echo<<<H
				<$h>$label</$h> 
H;
		}
		
		public function getForm($action, $method, $inicio = null){
			if(!$inicio){
				echo <<<HTML
						</div>
					</form>
HTML;
			}else{
				echo <<<HTML
					<form action = $action method = $method>
						<div class="quad-form">
HTML;
			}
		}
		
		public function getInputText($nome){
			echo <<<TEXT
				<div>
					<input type ="text" name = "$nome" required="required">
				</div>
TEXT;
		}
		
		public function getInputSenha($nome){
			echo <<<SENHA
				<div>
					<input type ="password" name = "$nome" required="required">
				</div>
SENHA;
		}  
		
		
	
		public function getButton($type, $nome, $value){
			echo <<<BUTTON
				<button type=$type class="btn" name= $nome >$value</button>
BUTTON;
		}
	
		public function getFechaHead(){
			$ajax = $this->getAjax();

			echo<<<HTML
						</div><!-- fecha row -->
					</div><!-- fecha container -->
					<script src="../../app/lib/jquery/jquery.min.js"></script>
					<script src="../../app/lib/bootstrap/js/bootstrap.min.js"></script>
					<script src="../../app/js/form.codigo.js"></script>
					$ajax

				</body>
			</html>
HTML;
		}
		
		public function Img($class, $caminho){
			echo<<<IMG
				<div class=$class>
					<img src=$caminho>
				</div>
IMG;
		}
		
		public function Titulo($label, $h, $p){
			echo<<<TITULO
			<div class="quad-titulo">
				<div class="col-md-8 infos">
					<$h>$label</$h>
					<p>$p</p>
				</div>

				<div class="col-md-4 cadeado">
					<i class="fa fa-lock"></i>
				</div>
			</div><!-- fim class quad-titulo -->
TITULO;
		}

		public function getAjax(){
			return <<<HTML
			<script language="JavaScript">
				$(document).ready(function(){
					$(".resultado").hide();
					$("#form_ajax").ajaxForm({
						target:'.resultado',
						success:function(data){
							$(".resultado").html(data.msg);
							$(".resultado").fadeIn('slow');
							$("#form_ajax").resetForm();
						}
					});
				});
			</script>
HTML;
			
		}
		
		public function getMsg(){
			echo<<<HTML
						
							<div class = "resultado">
								<span class="msgm"> Inserido com sucesso </span>
							</div>
						
						
HTML;
		}
	}	
?>