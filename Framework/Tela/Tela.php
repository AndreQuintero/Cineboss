<?php
	class Tela{
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
					<html>
						<head>
							<meta charset="utf-8">
							<meta name="viewport" content="width:device-width, initial-scale=1">
							<title> $this->titulo</title>
							<link rel="stylesheet" href="../../app/lib/bootstrap/css/bootstrap.min.css" />
							<link rel="stylesheet" href="../../app/lib/font-awe/css/font-awesome.min.css" />
							<link rel="stylesheet" href="../../app/css/estilo-func.css" />
							<link rel="shortcut icon" href="../../app/img/favicon.ico" type="image/x-icon"/>
							
						</head>
					<body>
HTML;
			}
		}
		
		public function getSection(){
			echo<<<SECTION
				<section>
					<div class="container">
						<div class="row">
SECTION;
		}

		public function getFechaSection(){
			echo<<<SECTION
						</div><!-- fecha row -->
					</div><!-- fecha container -->
				</section>
SECTION;
		}
		public function getHeader(){
			echo<<<HEADER
				<header>
				<!-- tarja preto superior do site -->
					<div class="header-black"></div>
					<!-- logo do site -->
						<div class="container">
							<div class="row">
								<div class="logo">
									<a href="../../Index/View/index_Func.php" >
										<img  src="../../app/img/logo.png" alt="Logotipo">
									</a>
								</div>
							</div>
						</div>
						<!-- menu de navegação -->
						<div class="container">
							<div class="row">
<!-- _______________ BOTOES DO MENU __________________________________________________  -->
								<nav id="menu" class="pull-right">
									<div class="btn-group">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Filme 
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li class="dropdown-header">Filmes</li>
											<li><a href="../../ManterFilme/View/cadastro_Filme.php">Cadastrar</a></li>
											<li><a href="../../ManterFilme/View/visualizar_Filme.php">Visualizar</a></li>
										</ul>
									</div><!-- fecha btn group -->
<!-- ______________________________________________________________________________________________________________ -->
									<div class="btn-group">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Sessão 
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li class="dropdown-header">Sessão</li>
											<li><a href="../../ManterSessao/View/cadastro_Sessao.php">Cadastrar</a></li>
											<li><a href="../../ManterSessao/View/visualizar_Sessao.php">Visualizar</a></li>
										</ul>
									</div><!-- fecha btn group -->
<!-- ______________________________________________________________________________________________________________ -->
									<div class="btn-group">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Sala 
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li class="dropdown-header">Sala</li>
											<li><a href="../../ManterSala/View/cadastro_Sala&Assento.php">Cadastrar</a></li>
											<li><a href="../../ManterSala/View/visualizar_Sala&Assento.php">Visualizar</a></li>
										</ul>
									</div><!-- fecha btn group -->
<!-- ______________________________________________________________________________________________________________ -->
									<div class="btn-group">
										<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Ingresso 
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li class="dropdown-header">Ingresso</li>
											<li><a href="../../VenderIngresso/View/cadastro_Ingresso.php">Cadastrar</a></li>
										</ul>
									</div><!-- fecha btn group -->
<!-- ______________________________________________________________________________________________________________ -->
									<div class="btn-group">
										<div class="sair">
											<button class="btn" type="button">
												<a href = "../../Login/View/view_Login.php">Sair</a>
												<span class="fa fa-sign-out"></span>
											</button>
										</div><!-- fecha sair -->
									</div><!-- fecha btn group -->
								</nav><!-- fecha nav id menu -header -->

<!-- _______________ FECHA BOTOES DO MENU __________________________________________________  -->
							</div><!-- fecha div class row -header -->
						</div><!-- fecha div class container -header -->
					</header>
					<!-- fim header -->
HEADER;
		}
		
		public function getH($h, $label){
			echo<<<H
				<$h>$label</$h> 
H;
		}
		
		public function getForm($action, $method, $inicio = null, $file=false)
        {
            $tipo_sub = null;
            if($file){
                $tipo_sub = 'enctype="multipart/form-data"';
            }
            
			if(!$inicio){
				echo <<<HTML
						</form>
					</div>
				
				
HTML;
			}else{
				echo <<<HTML
					
						<div id="esquerda" class="col-md-6">
							<form action = $action method = $method $tipo_sub id = "form_ajax">
HTML;
			}
		}
		
		public function getInputText($label, $nome){
			echo <<<TEXT
				<div class="form-group">
					<label">$label</label>
					<input type ="text" name = "$nome" class = "form-control" required="required">
				</div>
TEXT;
		}
	
		public function getInputTextBootstrap($label, $nome, $class){
			echo <<<TEXT
				<div class=$class>
					<div class="row">
						<div class="form-group">
							<label >$label</label>
							<input type ="text" name = "$nome" class = "form-control" required="required">
						</div>
					</div>
				</div>
			
TEXT;
		}
	
		public function getInputDate($label, $nome, $for, $class){
			
				
			
			echo <<<TEXT
				<div class=$class>
					<div class="row">
						<div class="form-group">
							<label for=$for>$label</label>
							<input  class="form-control" type="date" required="required" name=$nome min=date('y-m-d', strtotime) max="2018-12-31">
						</div>
					</div>
				</div>
			
TEXT;
		}
		public function getInputNumber($label, $nome, $min, $max, $class){
			echo <<<TEXT
				<div class=$class>
					<div class="row">
						<div class="form-group">
							<label">$label</label>
							<input type="number" name=$nome class="form-control" min=$min max=$max required="required">
						</div>
					</div>
				</div>
			
TEXT;
		}
		
		public function getInputFile($label, $name){
			echo<<<FILE
				<div id="direita" class="col-md-6">
					<div class="col-md-12 ">
						<div class="row">
							<div class="form-group">
								<label>$label</label>
									<input class="form-control" type="file" name="$name" id="$name">
									<div id="original" alt="Preview">
										<img />		
									</div>
							</div>
						</div>
					</div>
				</div>
FILE;
		}
		
	
		public function getButton($type, $nome, $value){
			echo <<<BUTTON
				<div class="col-md-12 text-center">
					<div class="row">
						<div id="botao" class="form-group">
							<button type=$type class="btn btn-primary btn-lg" name= $nome >$value</button>
						</div>
					</div>
				</div>
BUTTON;
		}
	
		public function getLabel ($label){
			echo<<<LABEL
				<div>
					<label>$label </label>
				</div>
LABEL;
		}

		public function getSelect($label, $name, $class, $adados){
			echo<<<SELECT
				<div class=$class>
					<div class="row">
						<div class="form-group">
							<label for="escolhaGenero">$label</label>
SELECT;
			$select = "<select name = $name class = 'form-control' required = 'required'>";
				foreach ($adados as $opt)
				{		
					$select .= "<option value={$opt[1]}> {$opt[0]} </option>";
				}
			$select .="</select> </div> </div> </div>";
			echo $select;
		}	
	
		public function getFechaHead(){
			$ajax = $this->getAjax();
			echo<<<HTML
				<script src="../../app/lib/jquery/jquery.min.js"></script>
				<script src="../../app/lib/jquery/jquery.form.js"></script>
				<script src="../../app/lib/bootstrap/js/bootstrap.min.js"></script>
				<script src="../../app/lib/pace-master/pace.min.js"></script>
				<script src="../../app/js/form.codigo.js"></script>
				<script src="../../app/js/modal.js"></script>
				$ajax
			</body>
		</html>
HTML;
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