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
							<title> $this->titulo</title>
							<link rel="stylesheet" href="../../app/lib/bootstrap/css/bootstrap.min.css">
							<link rel="stylesheet" href="../../app/lib/owl-carousel/owl-carousel/owl.carousel.css">
							<link rel="stylesheet" href="../../app/lib/font-awe/css/font-awesome.min.css">
							<link rel="stylesheet" href="../../app/css_cliente/estilo.css">
							<link rel="shortcut icon" href="../../app/img/favicon.ico" type="image/x-icon"/>
						</head>
						<body>
HTML;
			}
		}
        
public function getHeader()
        {
            echo<<<HEADER
          		<header>
					<!-- tarja preto superior do site -->
					<div class="header-black"></div>
						<!-- logo do site -->
						<div class="container">
							<div class="row">
								<div class="logo">
									<a href="../../Cliente/View/index_Cliente.php" >
										<img  src="../../app/img/logo.png" alt="Logotipo">
									</a>
								</div>
							</div>
						</div>
						<!-- menu de navegação -->
						<div class="container">
							<div class="row">
								<nav id="menu" class="pull-right">
									<ul>
										<li><a href="../../Cliente/View/index_Cliente.php" >Home</a></li>
										<li><a href="../../Cliente/View/precos.html">Preços</a></li>
										<li><a href="../../Cliente/View/view_Cartaz.php" class="menu_ativo">Cartaz</a></li>
										<li><a href="../../Cliente/View/view_Lancamento.php">Lançamentos</a></li>
										<!-- botao de busca -->
										<li class="search">
											<div class="input-group">
												<input type="search" placeholder="Buscar">
												<span class="input-group-btn">
													<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
<!-- no caso a tag <i> esta valendo como uma tag de icone, onde esta sendo usado o icone do search -->
												</span>								
											</div><!-- fecha class input-group -->
										</li><!-- fecha li do campo de busca -->
									</ul>
								</nav><!-- fecha nav id menu -header -->
							</div><!-- fecha div class row -header -->
						</div><!-- fecha div class container -header -->
				</header>

	
HEADER;
	}

	 public function getFooter()
        {
            echo<<<FOOTER
            	<footer>
					<div class="container">
						<div class="row">
							<!-- logo rodape -->
							<div class="col-md-4 pull-left">
								<img src="../../app/img/logo.png" alt="Logo Rodape">
								<ul class="list-unstyled list-socials">
									<li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/?lang=pt-br" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<!-- fecha logo rodape -->

							<!--    links igual do menu de navegação -->
							<div class="col-md-4" id="links">
								<h4>LINKS</h4>
								<ul class="list-unstyled">
									<li><a href="../../Cliente/View/index_Cliente.php"><i class="fa fa-angle-right"></i>Home</a></li>
									<li><a href="../../Cliente/View/precos.html"><i class="fa fa-angle-right"></i>Preços</a></li>
									<li><a href="../../Cliente/View/view_Cartaz.php"><i class="fa fa-angle-right"></i>Cartaz</a></li>
									<li><a href="../../Cliente/View/view_Lancamento.php"><i class="fa fa-angle-right"></i>Lançamentos</a></li>
								</ul>
							</div>
							<!--   fecha links igual do menu de navegação -->
							
							<!--    endereço do cinema e contato -->
							<div class="col-md-4">
								<h4>FALE CONOSCO</h4>
								<address>
									<i class="fa fa-map-marker"></i> <span>Rua 9 de Julho, 286<br/>Salto / SP</span>
								</address>
								<p><a href="contato.html"><i class="fa fa-angle-right"></i>Contato</a></p>
							</div>
							<!--    fecha endereço do cinema e contato -->
						</div><!-- fecha row rodape -->
					</div><!-- fecha container rodape -->
				</footer>
FOOTER;
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

   
    public function getFechaHead(){
		echo<<<HTML
					<script src="../../app/lib/jquery/jquery.min.js"></script>
					<script src="../../app/lib/bootstrap/js/bootstrap.min.js"></script>
					<script src="../../app/lib/pace-master/pace.min.js"></script>
				</body>
			</html>
HTML;
	}

	//aqui se apresenta o corpo do site onde vão as informações que serão mostradas
	public function getCorpo($titulo,$cartaz, $sinopse, $duracao, $classificacao, $genero, $tipo){
		echo<<<HTML
			<div class="container">
				<div class="row">
					<h2 class="titulo">$titulo</h2>
					<div class="col-md-6 col-filme">
						<img src="$cartaz" class="img-cartaz img-responsive" alt="$titulo">
					</div><!-- fecha col md 6 cartaz -->

					<div class="col-md-6 col-filme2">
						<h2 class="text-center">Sinopse</h2>
						<p class="p-sinopse">"$sinopse"</p>
					<!-- informaçoes do filme(duraçao , classificação, genero e idioma) -->
						<div class="info-filme text-center">
							<div class="col-md-6">
								<ul class="list-unstyled text-center">
									<li class="verm">Duração:</li>
									<li class="preto">$duracao</li>
								</ul>
							</div><!-- fecha col md 6 duraçao -->

							<div class="col-md-6">
								<ul class="list-unstyled text-center">
									<li class="verm">Classificação:</li>
									<li class="preto">$classificacao</li>
								</ul>
							</div><!-- fecha col md 6 classificação -->
					
							<div class="col-md-6">
								<ul class="list-unstyled text-center ul-2">
									<li class="verm">Gênero:</li>
									<li class="preto">$genero</li>
								</ul>
							</div><!-- fecha col md 6 genero -->

							<div class="col-md-6">
								<ul class="list-unstyled text-center ul-2">
									<li class="verm">Tipo:</li>
									<li class="preto">$tipo</li>
								</ul>
							</div><!-- fecha col md 6 idioma -->
						</div><!-- fecha info do filme -->
					</div><!-- fecha div col md 6 da sinopse -->
				</div><!-- fecha row -->
			</div><!-- fecha container -->
HTML;
	}

	//adiciona o trailer a pagina
	public function getTrailer($video){
		echo<<<TRAILER
			<!-- video -->
			<div class="container">
				<div class="row">
					<div class="video-filme">
						<iframe src="$video" allowfullscreen class="img-responsive"></iframe>
					</div><!-- fecha .video-filme -->
				</div><!-- fecha row -->
			</div><!-- fecha container -->
TRAILER;
	}
        
}
?>    
