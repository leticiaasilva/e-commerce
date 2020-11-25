<?php

if(!isset($_SESSION)){
    session_start();
    
}
require './lib/autoload.php';


$smarty = new Template();

$categorias = new Categorias();
$categorias->GetCategorias();

//valores para o template
$smarty->assign('NOME', 'Leticia Silva');
$smarty->assign('GET_TEMA', Rotas::getSiteTemplate());
$smarty->assign('GET_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::getSiteHome());

$smarty->assign('GET_CARRINHO', Rotas::pagCarrinho());
$smarty->assign('GET_PRODUTO', Rotas::pagProduto());
$smarty->assign('PAG_CONTATO', Rotas::pagContato());
$smarty->assign('PAG_MINHACONTA', Rotas::pagMinhaConta());
$smarty->assign('GET_TITULO', Config::SITE_NOME);
$smarty->assign('CATEGORIAS', $categorias->getItens());

$smarty->display('index.tpl');

?>
