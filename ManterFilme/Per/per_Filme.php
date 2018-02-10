<?php
/**
* @author André Quintero
* @copyright 2016
* @version 1.0
*/
	class Filme{
		private $titulo;
		private $genero;
		private $sinopse;
        private $classificacao;
		private $duracao;                    // pega as variasveis que vem do neg. 
		private $linkVideo;
		private $dataIni;
		private $dataTer;
		private $tipoFilme;
		private $caminhoImagem;
		
			public function Filme( $pt = null, $pg = null, $ps = null, $pc = null, $pd = null, $plv = null, $pdi = null, $pdt = null, $ptf = null,$pcm = null){
				$this->titulo = $pt;
				$this->genero = $pg;
				$this->sinopse = $ps;
                $this->classificacao = $pc;
				$this->duracao = $pd;
				$this->linkVideo = $plv;
				$this->dataIni = $pdi;
				$this->dataTer = $pdt;
				$this->tipoFilme = $ptf;
				$this->caminhoImagem = $pcm;
			}
			
			//atribui o codigo do filme para uso do DELETE E UPDATE
			public function setCodigo($pcod) {
				$this->codFilme = $pcod;
			}
			
			//abre a conecção
			public function conecta($ps, $pdb, $pv, $pw){
                
                $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);// MUDAR O WARNING dps
                    
                return $db;
			}
			
			//função de inserir um filme
			public function insereFilme(){
				if($this->dataIni <= $this->dataTer){
					try{
						$con = $this->conecta("localhost", "cinema", "root", "");
						$con->beginTransaction();
                      
							$sql = <<<SQL
							INSERT INTO filme(TITULO, GENERO, SINOPSE, CLASSIFICACAO, DURACAO, LINK_VIDEO, DATA_INICIO, DATA_TERMINO, TIPO_FILME,CAMINHO_IMAGEM) 
							VALUES('$this->titulo', '$this->genero','$this->sinopse', '$this->classificacao', '$this->duracao', '$this->linkVideo', '$this->dataIni', '$this->dataTer', '$this->tipoFilme', '$this->caminhoImagem')
SQL;
						$con->exec($sql);
						$con->commit();
						$res['resp'] = 1;
						$res['msg'] = "Inserido com sucesso";
						return $res;
					}
					catch(Exception $e){
						$res['resp'] = 0;
						$res['msg'] =  $e->getMessage();
						return $res;
					}
				}
				else{
					$res['msg'] = "Datas não conferem!";
					return $res;
				}
				

			}
			
			//função de deletar filme
			public function deleteFilme(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
					$con->beginTransaction();
                        
					$sql = <<<SQL
						DELETE FROM filme WHERE COD_FILME = $this->codFilme
SQL;
					
					$con->exec($sql);
               		$con->commit();
					$res['resp'] = 1;
					$res['msg'] = "Deletado com sucesso";
					return $res;
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}

			//função de atualizar filme	
			public function updateFilme(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
					$con->beginTransaction();
                      
					$sql = <<<SQL
						UPDATE filme SET TITULO = '$this->titulo', GENERO = '$this->genero', SINOPSE = '$this->sinopse', CLASSIFICACAO = '$this->classificacao', DURACAO = '$this->duracao', LINK_VIDEO = '$this->linkVideo', DATA_INICIO = '$this->dataIni', DATA_TERMINO = '$this->dataTer', TIPO_FILME = '$this->tipoFilme', CAMINHO_IMAGEM = '$this->caminhoImagem' WHERE COD_FILME = $this->codFilme
SQL;
					$con->exec($sql);
                	$res['resp'] = 1;
					$res['msg'] = "Atualizado com sucesso";
					return $res;
				} 
				catch (Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}
        

        //Seleciona os dados que serão mostrados na pagina de viasualizar filme
        public function getFilme() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$sql = <<<SQL
					SELECT  COD_FILME, TITULO, GENERO, SINOPSE, CLASSIFICACAO, DURACAO, DATA_INICIO, DATA_TERMINO, TIPO_FILME, LINK_VIDEO, CAMINHO_IMAGEM FROM filme
SQL;
        
		echo <<<HTML
		   <div class="row">
		   <div class="col-md-2 ">
		     <h3 class="text-center p-coluna">Titulo</h3>
           </div>
		   <div class="col-md-1 ">
		     <h3 class="text-center p-coluna">Gênero</h3>
		   </div>
		   <div class="col-md-2 ">
			<h3 class="text-center p-coluna">Classificação</h3>
		   </div>
		   <div class="col-md-2 ">
			 <h3 class="text-center p-coluna">Duração</h3>
		   </div>
		   <div class="col-md-1 ">
			 <h3 class="text-center p-coluna">Inicio</h3>
		   </div>
		   <div class="col-md-1 ">
			 <h3 class="text-center p-coluna">Fim</h3>
		   </div>
		   <div class="col-md-1 ">
			<h3 class="text-center p-coluna">Tipo</h3>
		   </div>
		   <div class="col-md-2 ">
			<h3 class="text-center p-coluna">Ação</h3>
		   </div>
		   </div>
HTML;
				
			
		        $res = $con->query($sql);
				
				while($dados = $res->fetch()){
					
				echo<<<HTML
				
			<div class="row">
			<div class = "gambit">
			<div class="col-md-2 ">				
				<div class="p-tab text-center">
					<p title=$dados[1]>$dados[1]</p>			
				</div>
			</div><!-- fecha col md 2 nome-->
			
			<div class="col-md-1 ">				
				<div class="p-tab text-center">
					<p title=$dados[2]>$dados[2]</p>
				</div>
			</div><!-- fecha col md 1 genero -->
			
			<div class="col-md-2 ">				
				<div class="p-tab text-center">
					<p title="$dados[4]">$dados[4]</p>
				</div>
			</div><!-- fecha col md 1 duracao -->

			<div class="col-md-2 ">
				<div class="p-tab text-center">
					<p title=$dados[5]>$dados[5]</p>
				</div>
			</div><!-- fecha col md 1 inicio -->

			<div class="col-md-1 ">
				<div class="p-tab text-center">
					<p title=$dados[6]>$dados[6]</p>
				</div>
			</div><!-- fecha col md 1 fim -->

			<div class="col-md-1 ">
				<div class="p-tab text-center">
					<p title=$dados[7]>$dados[7]</p>
				</div>
			</div><!-- fecha col md 2 classificacao -->

			<div class="col-md-1 ">
				
				<div class="p-tab text-center">
					<p title=$dados[8]>$dados[8]</p>
				</div>
			</div><!-- fecha col md 1 tipo -->
			<div class="col-md-2">
				<div class="col-md-12">
					<div class="text-center">
						<div class="item-tab">
							<div class="alt-tab">
								<a href = "../../ManterFilme/View/update_Filme.php?codFilme=$dados[0]&titulo=$dados[1]&genero=$dados[2]&sinopse=$dados[3]&classificacao=$dados[4]&duracao=$dados[5]&dataIni=$dados[6]&dataTer=$dados[7]&tipo=$dados[8]&linkVideo=$dados[9]&caminhoImagem=$dados[10]"><button title="Alterar" type="button" class="btn-alt"><i class="fa fa-pencil"></i></button>
							</div>
						</div><!-- fecha item-tab -->
						<div class="item-tab">
							<div class="del-tab">
							    <a href = "#" onClick="if (confirm('Deseja excluir registro ?')) { location.href='../../ManterFilme/Neg/neg_FilmeDelete.php?codFilme=$dados[0]'};"><button title="Excluir" type="button" class="btn-del" ><i class="fa fa-trash"></i></button></a>
							</div><!-- fecha del tab -->
						</div><!-- fecha item-tab -->
				</div><!-- fecha text center do botao -->
			</div><!-- fecha col md 2 botoes -->
			</div>
			</div>
			</div>
HTML;
			}	  
		}
		
		public function getImagemLancamento()
        {
            $con = $this->conecta("localhost", "cinema", "root", "");
                 
            
			$sql = <<<SELECT
				SELECT TITULO, CAMINHO_IMAGEM, SINOPSE, DURACAO, CLASSIFICACAO, GENERO, TIPO_FILME, LINK_VIDEO FROM filme WHERE  DATA_INICIO > CURDATE();
SELECT;
                   
            $res = $con->query($sql);
			while($dados = $res->fetch()){
                echo<<<HTML
                   
                   		<div class="col-md-3">
				    		<div class="box actionImg3">
                    			<a href="../../Cliente/View/view_ConsultaFilme.php?titulo=$dados[0]&caminho_Imagem=$dados[1]&sinopse=$dados[2]&duracao=$dados[3]&classificacao=$dados[4]&genero=$dados[5]&tipoFilme=$dados[6]&linkVideo=$dados[7]" target="_blank">

								<img src="$dados[1]" alt="$dados[0]" class="img-responsive"/>
                					<div class="hover">
											<div class="line1"></div>
											<div class="line2"></div>
											<div class="sub_tit"><p>$dados[0]</p></div>
								</a>
                    				</div>
                    		</div>
                    	</div>
                    	
HTML;
       
        	}
    	}
		
		public function getImagemCartaz()
        {
            $con = $this->conecta("localhost", "cinema", "root", "");
                 
            
				$sql = <<<SQL
					SELECT TITULO, CAMINHO_IMAGEM, SINOPSE, DURACAO, CLASSIFICACAO, GENERO, TIPO_FILME, LINK_VIDEO FROM filme WHERE CURDATE() BETWEEN DATA_INICIO AND DATA_TERMINO
SQL;
           
            
                $res = $con->query($sql);

				while($dados = $res->fetch()){
                   echo<<<HTML
                   	
            
                   		<div class="col-md-3">
				    		<div class="box actionImg3">
                    			<a href="../../Cliente/View/view_ConsultaFilme.php?titulo=$dados[0]&caminho_Imagem=$dados[1]&sinopse=$dados[2]&duracao=$dados[3]&classificacao=$dados[4]&genero=$dados[5]&tipoFilme=$dados[6]&linkVideo=$dados[7]" target="_blank">

								<img src="$dados[1]" alt="$dados[0]" class="img-responsive"/>
                					<div class="hover">
											<div class="line1"></div>
											<div class="line2"></div>
											<div class="sub_tit"><p>$dados[0]</p></div>
								</a>
                    				</div>
                    		</div>
                    	</div>
                    	
HTML;
                    
        	}
    	}
	}
?>