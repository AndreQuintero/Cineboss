<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>CINEBOSS - Home</title>
		<link rel="stylesheet" href="../../app/lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../app/lib/owl-carousel/owl-carousel/owl.carousel.css">
		<link rel="stylesheet" href="../../app/lib/font-awe/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../app/css_cliente/estilo.css">
		<link rel="shortcut icon" href="../../app/img/favicon.ico" type="image/x-icon"/>
	</head>


	<body>

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
						<li><a href="../../Cliente/View/index_Cliente.php" class="menu_ativo">Home</a></li>
						<li><a href="../../Cliente/View/precos.html">Preços</a></li>
						<li><a href="../../Cliente/View/view_Cartaz.php">Cartaz</a></li>
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


	<section>
		<!-- teste de banner com animação...width : 100% ; height : 315px -->
			<div id="banner" class="owl-carousel owl-theme">
					<div class="item"><img src="../../app/img/banner/01.jpg" alt="01" class="img-responsive"></div><!-- fecha class item -->
					<div class="item"><img src="../../app/img/banner/02.jpg" alt="02"></div>
					<div class="item"><img src="../../app/img/banner/03.jpg" alt="03"></div>
			</div><!-- fecha id banner -->



			<!-- Em cartaz apos o banner -->
			<div class="container">
				<div class="row ">
					<div>
						<h2 class="titulo">Em Cartaz</h2>
					</div>
				</div><!-- fecha row -->
			</div><!-- fecha container -->
			
			<?php
				include_once('../../ManterSessao/Per/per_Sessao.php');
				$obj_Sessao = new Sessao();
					// abre a tabela de sessão
					$obj_Sessao->getSessaoDoDia();
					// fecha a tabela de sessão
			?>


			<!-- botao no fim do section -->

				<div class="text-center">
					<p>Veja mais informações sobre os filmes</p>
					<a href="../../Cliente/View/view_Cartaz.php" class="btn btn-site">Cartaz</a>
				</div><!-- fecha div do botao -->
<!-- o w3c da erro na declaração de botoes no site, o jeito certo de se fazer um botao com uma ancora é assim : <a href="cartaz.html" class="btn btn-site">Cartaz</a> -->
				

				

			<!-- fim do botao -->

	</section>


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
					<li><a href="../../Cliente/View/view_Lancamentos.php"><i class="fa fa-angle-right"></i>Lançamentos</a></li>
					
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



	<script src="../../app/lib/jquery/jquery.min.js"></script>
	<script src="../../app/lib/owl-carousel/owl-carousel/owl.carousel.min.js"></script>
	<script src="../../app/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../app/lib/pace-master/pace.min.js"></script>
	<script src="../../app/js/codigo.js"></script>

</body>
</html>
