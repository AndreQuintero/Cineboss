<?php
/**
* @author Vitor Gregório
* @copyright 2016
* @version 1.0
*/
	class Assento{
		private $codSala;
		private $coluna;
		private $linha;
		
				
			public function Assento($pcs = null, $pc = null, $pl = null){
				$this->codSala = $pcs;
				$this->coluna = $pc;
				$this->linha = $pl;
				
			}
			
			public function setCodigo($pcod) {
				$this->codSala = $pcod;
			}

			public function conecta($ps, $pdb, $pv, $pw){
				return $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
			}
			
			public function insereAssento(){
				try{
					for ($i = 0; $i <= $this->coluna; $i++) {
	    				
	    				for ($j = 0; $j <= $this->linha; $j++) {
														
							$cod = $this->codSala.$i.$j;
							
							$con = $this->conecta("localhost", "cinema", "root", "");
								
								$sql = <<<SQL
									INSERT INTO assento(COD_ASSENTO, COLUNA, LINHA, COD_SALA) 
									VALUES($cod, $i, $j, $this->codSala)
SQL;
								$con->exec($sql);
									
						}
					}
					
					$res['resp'] = 1;
					$res['msg'] = "Inserido com sucesso";
					return $res;

				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
			
			}

			public function deleteAssento(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "");
					$sql = <<<SQL
						DELETE FROM assento WHERE COD_SALA = $this->codSala
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

			public function updateAssento(){
				$con = $this->conecta("localhost", "cinema", "root", "");

				$sql = <<<SQL
						DELETE FROM assento WHERE COD_SALA = $this->codSala
SQL;
					
				$con->exec($sql);
				
				try{
					for ($i = 0; $i <= $coluna; $i++) {
	    				
	    				for ($j = 0; $j <= $linha; $j++) {
													
							$cod = $this->codSala.$i.$j;
								$sql2 = <<<SQL
									INSERT INTO assento(COD_ASSENTO, COLUNA, LINHA, COD_SALA) 
									VALUES($cod, $i, $j, $this->codSala)
SQL;
									$con->exec($sql2);
						}
					}

					$res['resp'] = 1;
					$res['msg'] = "Atualizado com sucesso";
					return $res;
				}
				catch(Exception $e){
					$res['resp'] = 0;
					$res['msg'] =  $e->getMessage();
				}
					
				
			}
			
	}
?>