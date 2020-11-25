<?php

if(isset($_SESSION['PRO'])) {



	$smarty = new Template();

	$carrinho = new Carrinho();

	$smarty->assign('PRO', $carrinho->GetCarrinho());
	$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));

	$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::pagCarrinhoAlterar());
	$smarty->assign('PAG_CARRINHO', Rotas::pagCarrinho());
	$smarty->assign('PAG_FINALIZAR', Rotas::pagPedidoFinalizar());


	$smarty->display('pedido_confirmar.tpl');

}else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(3, Rotas::pagProduto());
}

/*
echo '<pre>';
var_dump($carrinho->GetCarrinho());
echo '</pre>';
*/
 ?>