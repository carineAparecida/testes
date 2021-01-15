<?php


	$hierarquia = array(

			array(

				'nome_cargo'=>'CEO',
				'subordinados' =>array(
					//inicio: Diretor comercial
					array(
						'nome_cargo'=>'Diretor Comercial',
						'subordinados'=>array(
							//inicio: Gerente de Vendas
							array(
								'nome_cargo'=>'Gerente de Vendas'
							)
							//Término: Diretor comercial
						)
					),
					//Término: Diretor comercial
					//Início Diretor Financeiro
					array(
						'nome_cargo'=> 'Diretor Financeiro',
						'subordinados'=> array(
							//Início: Gerente de contas a pagar
							array(
								'nome_cargo'=>'Gerente de contas a pagar',
								'subordinados'=> array(
									//Inicio: Supervisor de pagamentos
									array(
										'nome_cargo'=>'Supervisor de Pagamento',

									)
									//Termino do Supervisor de pagamentos
								)
							),
							//Termino Gerente de contas a pagar
							//Início: Gerente de Compras
							array(
								'nome_cargo'=>'Gerente de Compras',
								'subordinados'=>array(
									//inicio: Supervisor de suprimentos
									array(
								'nome_cargo'=>'Supervisor de suprimentos',

									),
									//Término Supervisor de suprimentos
								)

							),
							//Termino Gerente de Compras
						)
					),
					//Término Diretor Financeiro
				)

			)

	);
function exibe($cargos){

	$html = '<ul>';

	foreach($cargos as $cargo){

		$html .= "<li>";
		$html .= $cargo['nome_cargo'];
		if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html = exibe($cargo['subordinados']);

		}
		$html .="</li>";

	}

	$html .= '</ul>';
	return  $html;

}

echo exibe($hierarquia);	
?>