<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=> array(
			//Inicio diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Início Gerente de de vendas
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
					//Término: Gerente de vendas
				)
			),
			//Termino:Diretor COmercial
			//Início: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Início: gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
								//Início: Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
								//Término: Supervisor de Pagamentos
						)
					),
						//Término Gerente de Contas a Pagar
						//Início: Gerente de Compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
								//Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos', 
								'subordinados'=>array(
									
									array(
										'nome_cargo'=>'Funcionario'
									)
								)
							)
						)	//Término: Supervisor de Suprimentos
					)
			)	//Término: Gerente de Compras
			)
		//Término: Diretor FInanceiro
		)	
	)

);

function exibe($cargos) {

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

		$html .= $cargo['nome_cargo'];
//Verifica se a variável $cargo existe
		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);

		}

		$html.="</li>";
	}

	$html .="</ul>";

	return $html; 
}

echo exibe($hierarquia);

?>