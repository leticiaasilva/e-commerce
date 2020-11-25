<?php
Class Rotas{
    
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function getSiteHome(){
        return Config::SITE_URL .'/' .Config::SITE_PASTA;

    }

    static function getSiteRaiz(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' .Config::SITE_PASTA;
    }

    static function getSiteTemplate(){
        return self::getSiteHome(). '/' .self::$pasta_view;
    }
    static function pagCarrinho(){
        return self::getSiteHome(). '/carrinho';
    }
    static function PagCarrinhoAlterar(){
        return self::getSiteHome(). '/carrinho_alterar';
    }
    static function pagProduto(){
        return self::getSiteHome(). '/produtos';
    }
    static function pagProdutoInfo(){
        return self::getSiteHome(). '/produtosinfo';
    }
    static function pagContato(){
        return self::getSiteHome(). '/contato';
    }
    static function pagMinhaConta(){
        return self::getSiteHome(). '/minhaconta';
    }
    static function getImagePasta(){
        return 'view/images/';
    }
    static function getImageURL(){
        return self::getSiteHome(). '/'. self::getImagePasta();
    }
    static function imageLink($img, $largura, $altura){
        $imagem = self::getImageURL() ."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";

        return $imagem;
    }

    static function getPastaController(){
        return self::$pasta_controller;
        
    }
	static function pagPedidoConfirmar(){
		return  self::getSiteHome(). '/pedido_confirmar';
    }
    
    static function pagPedidoFinalizar(){
		return  self::getSiteHome(). '/pedido_finalizar';
	}
    	//MÉTODO PARA REDIRECIONAR
	static function Redirecionar($tempo, $pagina){
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
		echo $url;
	}
    static function getPagina(){
        if(isset($_GET['pag'])){
            $pagina = $_GET['pag'];
            self::$pag = explode('/',$pagina);
            $pagina = 'controller/'.self::$pag[0] . '.php';
            if(file_exists($pagina)){
                include $pagina;
            }else{
                include 'ERRO.php';
            }
        }
        else{
            include 'home.php';
        }
    }      
}
?>