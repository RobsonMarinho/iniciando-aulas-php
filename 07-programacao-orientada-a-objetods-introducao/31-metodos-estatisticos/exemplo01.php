<?php

class documento {

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$resultado = Documento::validarCPF($numero);

		if ($resultado === false){
			throw new Exception("CPF informado nãpo é válido", 1);
		}

		$this->numero = $numero;
	}

	public static function validarCPF($cpf){
		//Verifica se um número foi informado
		 if(empty($cpf)) {
        return false;
    }
 	//	Elimina possível mascara
    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
     
    //Verifica se o número de dígitos informados é igual a 11
    if (strlen($cpf) != 11) {
        echo "length";
        return false;
    }
    //Verifica se nenhuma das sequências invalida abaixo foi digitada. Caso afirmativo, retorna falso
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
    // Calcula os dígitos verificados para verificar se o CPF é válido
     } else {   
         
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
$cpf->setNumero("06633174446");

var_dump($cpf->getNUmero());


//var_dump(Documento::validarCPF("06633174446"));


?>