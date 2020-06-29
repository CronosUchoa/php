<?php
/*
exemplo 03
é sobre metodo static
static n precisa de instância
e pode ser acessado em qualquer parte do código
*/

class Documento {

	private $numero;

	public function getNumero(){

		return $this->numero;
	}

	public function setNumero($valorNumero){
						// usar :: pra acessar o metodo static
		$resultado = Documento::validarCPF($valorNumero);

		if($resultado === false) {

			/*throw new Exception("CPF Informado não é válido", 1);*/
			echo "<br>";
			echo "CPF inválido !!!";
			echo "<br>";
			echo "<br>";
			
		}
		else{
			$this->numero = $valorNumero;
			echo "CPF válido !!!";
			echo "<br>";
			echo "<br>";
		}

		
	}

	//não precisa criar objetos pra instanciar a classe.
	public static function validarCPF($cpf):bool{

		//verifica se um número foi informado
		if(empty($cpf)) {
		return false;
		}

			//Elimina possivel mascara
			$cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

			$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


		//Verifica se o numero de digitos informados é igual a 11	
		if (strlen($cpf) != 11) {
		echo "length";
		return false;
		}

		//verifica se nenhuma das sequencias invalidas abaixo foi digitada
		else if ($cpf == '00000000000' || 
		$cpf == '11111111111' || 
		$cpf == '22222222222' || 
		$cpf == '33333333333' || 
		$cpf == '44444444444' || 
		$cpf == '55555555555' || 
		$cpf == '66666666666' || 
		$cpf == '77777777777' || 
		$cpf == '88888888888' || 
		$cpf == '99999999999') {
		return false;

		}

		//calcula os digitos verificadores para verificar se o cpf é valido 
		else {   

			for ($t = 9; $t < 11; $t++) {

				for ($d = 0, $c = 0; $c < $t; $c++) {
						$d += $cpf{$c} * (($t + 1) - $c);
				}

				$d = ((10 * $d) % 11) % 10;

				if ($cpf{$c} != $d) {
					return false;
				}
			}

			return true;
		}

	}
}

$cpf = new Documento();
$cpf->setNumero("36680968055");

//cpf valido 36680968054
//cpf invalido 36680968055
var_dump($cpf->getNumero()); 

//acessar diretamente o metodo validar que estar dentro da classe documento
//
//var_dump(Documento::validarCPF(36680968054));
?>