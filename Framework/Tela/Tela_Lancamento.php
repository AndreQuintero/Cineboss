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
										
									</ul>
								</nav><!-- fecha nav id menu -header -->
							</div><!-- fecha div class row -header -->
						</div><!-- fecha div class container -header -->
				</header>

	
HEADER;
	}
        public function getAbreContainer()
		{
			echo<<<ABRE
			<div class="container cartaz-pag">
		<div class="row">
ABRE;
		}
		public function getFechaContainer()
		{
			echo<<<FECHA
				</div><!-- fecha row -->
				</div><!-- fecha container -->
FECHA;
		}
		public function getH($h, $label){
			echo<<<H
				<$h>$label</$h> 
H;
		}
		public function getAbreTextCenter()
		{
			echo<<<ABRE
			<div class="corpo text-center">
ABRE;
		}
		public function getFechaTextCenter()
		{
			echo<<<FECHA
			</div><!-- fecha text-center -->
FECHA;
		}
		public function getAbreItemCartaz($caminho_imagem,$link,$label)
		{	
				echo<<<ABRE
				<div class="col-md-3">
				<div class="box actionImg3">
                
                <img src="$caminho_imagem" alt="$label" class="img-responsive"/>
                
                <div class="hover">
						<a href="$link">
							<div class="line1"></div>
							<div class="line2"></div>
			
							<div class="sub_tit"><p>$label</p></div>
						</a>
ABRE;
		
		}
		
		public function getFechaItemCartaz()
		{
			echo<<<FECHA
			</div>
			</div>
            </div>
FECHA;
		}
        
        public function getLancamento()
        {
            echo<<<ABRE
            <div class="container">
				<div class="row">
							<div class="col-md-6">
								<div class="text-center">
									<p>Consulte valores e promoções.</p>
										<a href="../../Cliente/View/precos.html" class="btn btn-site">Preços</a>
								</div>
							</div>

							<div class="col-md-6">
								<div class="text-center">
									<p>Veja nosso Cartaz.</p>
										<a href="../../Cliente/View/view_Cartaz.php" class="btn btn-site">Cartaz</a>
								</div>
							</div>
				</div><!-- fecha row -->
				</div><!-- fecha container -->
ABRE;
            
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
        
        public function getFechaHead(){
			echo<<<HTML
				
	<script src="../../app/lib/jquery/jquery.min.js"></script>
	<script src="../../app/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../app/lib/pace-master/pace.min.js"></script>
	
			</body>
		</html>
HTML;
		}
    }

?>