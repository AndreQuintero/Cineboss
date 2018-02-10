<?php
/**
* @author Vitor Gregório
* @copyright 2016
* @version 1.0
*/
	class Sala{
		private $nomeSala;
		private $numeroLugares;
				
			public function Sala($pns = null, $pnl = null){
				$this->nomeSala = $pns;
				$this->numeroLugares = $pnl;
			}
			
			public function conecta($ps, $pdb, $pv, $pw){
				return $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
			}
			
			//atribui o codigo do sala para uso do DELETE e UPDATE
			public function setCodigo($pcod) {
				$this->codSala = $pcod;
			}

			//função de cadastrar a sala
			public function insereSala(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");

					
							
					$sql = <<<SQL
						INSERT INTO sala(NOME_SALA, NUMERO_LUGARES) 
						VALUES('$this->nomeSala', $this->numeroLugares)
SQL;
				
					$con->exec($sql);
					return $con->lastInsertId();
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}
			
			//função para deletar a sala
			public function deleteSala(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
							
					$sql = <<<SQL
						DELETE FROM sala WHERE COD_SALA = $this->codSala
SQL;
				$con->exec($sql);
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			}

			//função para atualizar a sala
			public function updateSala(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
							
					$sql = <<<SQL
						UPDATE sala SET NOME_SALA = '$this->nomeSala', NUMERO_LUGARES = '$this->numeroLugares' WHERE COD_SALA = $this->codSala
SQL;
				
					$con->exec($sql);
									
				}
				catch(Exception $e){
					echo 'Erro ao atualizar: ',  $e->getMessage(), "\n";
				}
			}
			
			//função para a criação da consulta da sala 
			public function getSala() {
    				
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$sql = <<<SELECT
					SELECT COD_SALA, NOME_SALA, NUMERO_LUGARES FROM sala
SELECT;
        
			echo <<<CABEC
		   		<div class="row">
		   			<div class="col-md-2 ">
		     			<h3 class="text-center p-coluna">Nome da sala</h3>
           			</div>
		   			<div class="col-md-4 ">
		     			<h3 class="text-center p-coluna">Quantidade de Lugares</h3>
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
						<div class="col-md-2 ">				
							<div class="p-tab text-center">
								<p title=$dados[1]>$dados[1]</p>			
							</div>
						</div><!-- fecha col md 2 numero da sala-->
			
						<div class="col-md-4 ">				
							<div class="p-tab text-center">
								<p title=$dados[2]>$dados[2]</p>
							</div>
						</div><!-- fecha col md 1 numero de lugares -->
						
						<div class="col-md-2">
							<div class="col-md-12">
								<div class="text-center">
									
									<div class="item-tab">
										<div class="del-tab">
							    			<a href = "#" onClick="if (confirm('Deseja excluir registro ?')) { location.href='../../ManterSala/Neg/neg_Sala&AssentoDelete.php?codSala=$dados[0]'};">	<button title="Excluir" type="button" class="btn-del" ><i class="fa fa-trash"></i></button></a>
										</div><!-- fecha del tab -->
									</div><!-- fecha item-tab -->
								</div><!-- fecha text center do botao -->
							</div><!-- fecha col md 2 botoes -->
						</div>
					</div>
HTML;
			}	  
		}	
			
	}
	
?>
