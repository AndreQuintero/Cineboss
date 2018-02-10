<?php
	class Cadeira{
	
		public function getCadeira(){
			
			for($linha = 0; $linha<10; $linha++ ) {
			echo<<<LINHA
				<div id="linha1">
LINHA;
				for($coluna = 0; $coluna<10; $coluna++ ){
				echo<<<CADEIRA
					<div class="cadeira">
						<img class="cadeira-classe" id="$linha$coluna" src="img/02.jpg" onclick="trocaImagem(this)">
					</div><!--fecha cadeira-->
CADEIRA;
				}
			echo<<<LINHA
				</div><!-- fecha linha1 -->
LINHA;
			}
		}
		
	}

?>