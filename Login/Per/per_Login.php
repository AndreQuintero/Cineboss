<?php
/**
* @author André Quintero
* @copyright 2016
* @version 1.0
*/
class Login
{
	private $usuario;      //variaveis para validação do login
	private $senha;
	
    //Metodo construtor da classe
	public function login($pu = null,$pss = null)
	{
		$this->usuario = $pu;
		$this->senha = $pss;
	}
    
    
            public function conecta($ps, $pdb, $pv, $pw){
            	return $db = new PDO("mysql:host=$ps; dbname=$pdb", "$pv", "$pw");
			}
			
	//Função para fazer o login
	public function getLogin()
	{
		try{
			$con = $this->conecta("localhost", "cinema", "root", "");
			$sql = <<<SQL
        	SELECT LOGIN, SENHA, PERFIL, NOME
			FROM funcionario
			WHERE LOGIN = '$this->usuario' AND SENHA = '$this->senha'
SQL;
			$dados = $con->query($sql);
 
			if(count($dados) == 0){
				$res['msg'] = 'Erro de login';
				return $res;
			}
			else{
                $row = $dados->fetch();
				session_start();
                $_SESSION['PERFIL'] = $row[2];
                $_SESSION['NOME'] = $row[3];
				header('location: ../../Index/View/index_Func.php');
				return null;
			}
		}

		catch(Exception $e){
				echo 'Erro ao logar: ',  $e->getMessage(), "\n";
		}
	}
    
    //Função que faz a sessão de usuário para manter logado
    public function getSession()
    {
        try{
            
             session_start();
             $res = array('NOME'=>$_SESSION['NOME'],
                          'PERFIL'=>$_SESSION['PERFIL']);
            
             return $res;
                
        }catch(Exception $e){
            echo 'Erro de sessão: ',  $e->getMessage(), "\n";
        }
    }
    
    public function getEncerraSessao()
    {
        session_destroy(); 
        header('location: ../../Login/View/view_Login.php');
    }
}


?>