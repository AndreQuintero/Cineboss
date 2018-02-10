<?php
/**
* @author Vitor Gregório
* @copyright 2016
* @version 1.0
*/
	class Ingresso{
		private $sessao;
		private $valorEntrada;
		private $tipoEntrada;
		//private $codFuncionario;
		
		
			public function Ingresso($ps = null, $pte = null, $pve = null /*$pcf = null*/){
				$this->sessao = $ps;
				$this->tipoEntrada = $pte;
				$this->valorEntrada = $pve;
				//$this->codFuncionario = $pcf;
				
			}
			
			public function conecta($ps, $pdb, $pv, $pw){
				return $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
			}
			

			//metodo para cadastro da ingresso	
			public function insereIngresso(){
				$con = $this->conecta("localhost", "cinema", "root", "");
								
				$sth = $con->query("
					SELECT COUNT(*) as total FROM assento_sessao               
					WHERE COD_SESSAO = $this->sessao");

				//conta quantos ingressos foram vendidos
				$sth->execute();
				//$con->exec($assento);
				//$rowAssento = $con->query($assento);
				//$assento1 = mysqlfetchAll($row)
				$rowAssento = $sth->fetchAll();
				
				$assento = $rowAssento;

				$sth2 = $con->query("
					SELECT SL.NUMERO_LUGARES as lugarTotal
					FROM sala as SL, sessao as SS 
					WHERE SS.COD_SESSAO = $this->sessao AND SS.COD_SALA=SL.COD_SALA
");
                //Conta quantos lugares há 
				
				$sth2->execute();
				$rowSala = $sth2->fetchAll();
				
				$sala = $rowSala;
				
			
				//$con->exec($sala);
				//$rowSala = $con->query($sala);
				
				foreach($assento as $lugaresOcupados){
					
					$varTotal = $lugaresOcupados['total'];
					
				}
				
				
				
				foreach($sala as $totalLugares){
					
					$varTotal2 = $totalLugares['lugarTotal'];
					
				}
				
				
				
			//faz a comparação, se o número de ingressos vendidos for menor que o nº de assentos a venda é validada
				if($varTotal < $varTotal2){
					
					if($this->tipoEntrada == 'meia'){
						$valorVenda = $this->valorEntrada/2;
					}	
					else{
						$this->valorVenda = $this->valorEntrada;
					}
					
					try{
						$con = $this->conecta("localhost", "cinema", "root", "");
						
						
							$sql = <<< SQL
							INSERT INTO ingresso (COD_SESSAO, TIPO_ENTRADA, VALOR_VENDA,COD_FUNCIONARIO)
							VALUES ($this->sessao, '$this->tipoEntrada', '$this->valorVenda',1) 
							
SQL;
						$con->exec($sql);

						
						
						 $sql2= <<< SQL
						
							INSERT INTO assento_sessao (COD_SESSAO)
							VALUES ($this->sessao)
SQL;
							$con->exec($sql2);
						
						$res['resp'] = 1;
						$res['msg'] = "Venda com sucesso";
						return $res;
					}
					catch(Exception $e){
						$res['resp'] = 0;
						$res['msg'] =  $e->getMessage();
					}
				
				}else{
					
					$res['msg'] ='Não Há mais Ingressos';
					return $res;
				}
				
			}
			
			//metodo para deletar a sessão
			/*public function deleteIngresso(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "ifsp");
							
					$sql = <<<SQL
						DELETE Ingresso WHERE COD_INGRESSO = '$this->codIngresso'
SQL;
					
					$con->exec($sql);
					echo "Sessão deletada com sucesso";
				}
				catch(Exception $e){
					echo 'Erro ao deletar: ',  $e->getMessage(), "\n";
				}
			}

			
			public function updateIngresso(){
				try{
					$con = $this->conecta("localhost", "cinema", "root", "ifsp");
							
					
				}
				catch(Exception $e){
					echo 'Erro ao atualizar: ',  $e->getMessage(), "\n";
				}
			}*/

			//metodo para pegar da tabela de sessão j´[a cadastradas]			
			public function &getSessao() {
    
				$con = $this->conecta("localhost", "cinema", "root", "");
                     
				$alocal = array();
				$sql = <<<SELECT
					SELECT F.TITULO, SL.NOME_SALA, S.HORA_INICIO, S.DATA, S.COD_SESSAO 
					FROM sessao as S, filme as F, sala as SL
					WHERE SL.COD_SALA=S.COD_SALA
					AND F.COD_FILME=S.COD_FILME
SELECT;
        
		        $res = $con->query($sql);
				while ($row = $res->fetch()) {
        
				array_push($alocal, [$row[0]." ".$row[1]." ".$row[2]." ".$row[3], $row[4]]);
				}
        
				return $alocal;
       
			}

			/*public function getAssento(){
				$con = $this->conecta("localhost", "cinema", "root", "ifsp");
				
				$sql = <<<SQL
					SELECT COUNT (COLUNA), COUNT (LINHA) FROM assento WHERE COD_SALA = $this->codSala
SQL;
				$res = $con->query($sql);
				
				$row = $res->fetch()
				
				for ($i = 0; $i <= $row[0]; $i++) {
	    				for ($j = 0; $j <= $row[1]; $j++) {
							
					}
				}
			}*/								
	}
?>