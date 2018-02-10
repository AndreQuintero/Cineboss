<?php
/**
* @author Vitor Gregório
* @copyright 2016
* @version 1.0
*/
	class Sessao{
		private $filme;
		private $sala;
		private $horaIni;
		private $horaTer;
		private $data;
		
		
			public function Sessao($pf=null, $ps=null,$phi=null, $pht=null, $pd=null){
				$this->filme = $pf;
				$this->sala = $ps;
				$this->horaIni = $phi;
				$this->horaTer = $pht;
				$this->data = $pd;
			}
			
			public function conecta($ps, $pdb, $pv, $pw){
				return $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
			}
			
			//atribui o codigo do sessão para uso do DELETE e UPDATE
			public function setCodigo($pcod) {
				$this->codSessao = $pcod;
			}

			//metodo para cadastro da sessão	
			public function insereSessao(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");

					$con->beginTransaction();
							
					$sql = <<<SQL
						INSERT INTO Sessao(COD_FILME, COD_SALA, HORA_INICIO, HORA_FIM, DATA) 
						VALUES($this->filme, $this->sala, '$this->horaIni', '$this->horaTer', '$this->data')
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
				}
			}
			
			//metodo para deletar a sessão
			public function deleteSessao(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
							
					$sql = <<<SQL
						DELETE sessao WHERE COD_SESSAO = $this->codSessao
SQL;
					
					$con->exec($sql);
					$res['resp'] = 1;
					$res['msg'] = "Deletado com sucesso";
					return $res;
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}

			//metodo para atualizar a sessão
			public function updateSessao(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
							
					$sql = <<<SQL
						UPDATE sessao SET COD_FILME = $this->filme, COD_SALA = $this->sala, HORA_INICIO = '$this->horaIni', HORA_FIM = '$this->horaTer', DATA = '$this->data' WHERE COD_SESSAO = $this->codSessao
SQL;
				
					$con->exec($sql);
					$res['resp'] = 1;
					$res['msg'] = "Atualizado com sucesso";
					return $res;
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}

			//metodo para pegar da tabela filme os filme já cadastrados			
			public function &getFilmes() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$alocal = array();
				$sql = <<<SELECT
					SELECT TITULO, COD_FILME FROM Filme
SELECT;
        
		        $res = $con->query($sql);
				while ($row = $res->fetch()) {
        
				array_push($alocal, [$row[0], $row[1]]);
				}
        
				return $alocal;
       
			}
			
			//metodo para pegar as sala já cadastradas
			public function &getSala() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$alocal = array();
				$sql = <<<SELECT
					SELECT NOME_SALA, COD_SALA FROM Sala
SELECT;
        
		        $res = $con->query($sql);
				while ($row = $res->fetch()) {
        
				array_push($alocal, [$row[0], $row[1]]);
				}
        
				return $alocal;
       
			}

			//metodo para criação da pagina de vizualizar sessão
			public function getSessao() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$sql = <<<SQL
					
					SELECT S.COD_SESSAO, F.TITULO, SL.NOME_SALA, F.CLASSIFICACAO, F.DURACAO, F.GENERO, S.HORA_INICIO, S.HORA_FIM, S.DATA 
					FROM sessao as S, filme as F, sala as SL
					WHERE SL.COD_SALA=S.COD_SALA
					AND F.COD_FILME=S.COD_FILME AND CURDATE() >= S.DATA
					
SQL;
        
			echo <<<CABEC
		   		<div class="row">
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Titulo</h3>
           			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Sala</h3>
		   			</div>
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Classificação</h3>
		   			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Duração</h3>
		   			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Gênero</h3>
		   			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Inicio</h3>
		   			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Fim</h3>
		   			</div>
		   			<div class="col-md-1 ">
		     			<h3 class="text-center p-coluna">Data</h3>
		   			</div>
					<div class="col-md-2 ">
						<h3 class="text-center p-coluna">Ação</h3>
					</div>
		  		</div>
CABEC;
				
			
		        $res = $con->query($sql);
				
				while($dados = $res->fetch()){
				echo<<<HTML
					<div class="row">	
						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[1]>$dados[1]</p>			
							</div>
						</div><!-- fecha col md 2-->
			
						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[2]>$dados[2]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[3]>$dados[3]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[4]>$dados[4]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[5]>$dados[5]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[6]>$dados[6]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[7]>$dados[7]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-1 ">				
							<div class="p-tab text-center">
								<p title=$dados[8]>$dados[8]</p>			
							</div>
						</div><!-- fecha col md 2 -->

						
						<div class="col-md-2">
							<div class="col-md-22">
								<div class="text-center">
									<div class="item-tab">
										<div class="alt-tab">
											<a href = "../../ManterSessao/View/update_Sessao.php?codSessao=$dados[0]&horaIni=$dados[6]&horaTer=$dados[7]&data=$dados[8]"><button title="Alterar" type="button" class="btn-alt"><i class="fa fa-pencil"></i></button>
										</div>
									</div><!-- fecha item-tab -->
									<div class="item-tab">
										<div class="del-tab">
							    			<a href = "#" onClick="if (confirm('Deseja excluir registro ?')) { location.href='../../ManterSessao/Neg/neg_SessaoDelete.php?codSessao=$dados[0]'};">	<button title="Excluir" type="button" class="btn-del" ><i class="fa fa-trash"></i></button></a>
										</div><!-- fecha del tab -->
									</div><!-- fecha item-tab -->
								</div><!-- fecha text center do botao -->
							</div><!-- fecha col md 2 botoes -->
						</div>
					</div>
HTML;
			}
			
		}

		public function getSessaoDoDia() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$sql = <<<SELECT
					
					SELECT S.COD_SESSAO, F.TITULO, SL.NOME_SALA, F.CLASSIFICACAO, F.DURACAO, S.HORA_INICIO, S.HORA_FIM 
					FROM sessao as S, filme as F, sala as SL
					WHERE SL.COD_SALA=S.COD_SALA
					AND F.COD_FILME=S.COD_FILME AND CURDATE() = S.DATA
SELECT;
        
			echo <<<CABEC
		   		<div class="row">
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Titulo</h3>
           			</div>
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Sala</h3>
		   			</div>
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Classificação</h3>
		   			</div>
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Duração</h3>
		   			</div>
		   		
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Inicio</h3>
		   			</div>
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Fim</h3>
		   			</div>
		   		</div>
			
			
CABEC;
				
			
		        $res = $con->query($sql);
				
				while($dados = $res->fetch()){
				echo<<<HTML
					<div class="row">	
						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[1]>$dados[1]</p>			
							</div>
						</div><!-- fecha col md 2-->
			
						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[2]>$dados[2]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[3]>$dados[3]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[4]>$dados[4]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[5]>$dados[5]</p>			
							</div>
						</div><!-- fecha col md 2-->

						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[6]>$dados[6]</p>			
							</div>
						</div><!-- fecha col md 2-->
					</div>
				
			
HTML;
			}
			
		}		
							
					
	}
?>