<?php
if(isset($_SESSION['PRO'])) {

$smarty = new Template();

$carrinho = new Carrinho();

$smarty->assign('PRO', $carrinho->getCarrinho());
$smarty->assign('TOTAL', Sistema::MoedaBR($carrinho->GetTotal()));
$smarty->assign('PAG_CARRINHO_ALTERAR', Rotas::PagCarrinhoAlterar());
$smarty->assign('PAG_CONFIRMAR', Rotas::pagPedidoConfirmar());


$smarty->display('carrinho.tpl');
}
else{
	echo '<h4 class="alert alert-danger"> Não possui produtos no carrinho! </h4>';
	Rotas::Redirecionar(1, Rotas::pagProduto());
}
?>