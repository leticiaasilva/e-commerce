<?php
Class Produtos extends Conexao{

    function __construct(){
        parent:: __construct();
    }

	function GetProdutos(){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

	
		$query .= " ORDER BY pro_id DESC";

		$query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos");

		$this->ExecuteSQL($query);

		$this->GetLista();
		
	}

    function GetProdutosID($id){
        //query para buscar os produtos de uma categoria especifica

        $query = "SELECT * FROM {$this->prefix}produtos p iNNER JOIN {$this->prefix}categorias c on p.pro_categoria = c.cate_id";

        $query .= " AND pro_id = :id";

        $params = array(':id'=> (int)$id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    function GetProdutosCategoriaID($cate_id){
        //query para buscar os produtos de uma categoria especifica

        $id = filter_var($cate_id, FILTER_SANITIZE_NUMBER_INT);
        
        $query = "SELECT * FROM {$this->prefix}produtos p iNNER JOIN {$this->prefix}categorias c on p.pro_categoria = c.cate_id";

        $query .= " AND pro_categoria = :id";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix."produtos WHERE pro_categoria =".(int)$cate_id);


        $params = array(':id'=> (int)$cate_id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();
    }

    function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'pro_id' => $lista['pro_id'],
            'pro_nome' => $lista['pro_nome'],
            'pro_desc' => $lista['pro_desc'],
            'pro_ref' => $lista['pro_ref'],
            'pro_peso' => $lista['pro_peso'],
            'pro_ativo' => $lista['pro_ativo'],
            'pro_valor' => Sistema::MoedaBR($lista['pro_valor']),
            'pro_valor_us' => $lista['pro_valor'],
            'pro_altura' => $lista['pro_altura'],
            'pro_largura' => $lista['pro_largura'],
            'pro_comprimento' => $lista['pro_comprimento'],
            'pro_img' => Rotas::imageLink($lista['pro_img'],180,180),
            'pro_img_g' => Rotas::imageLink($lista['pro_img'],250,250),
            'pro_img_p' => Rotas::imageLink($lista['pro_img'],70,70),
            'pro_slug' => $lista['pro_slug'],
            'cate_nome' => $lista['cate_nome'],
            'cate_id' => $lista['cate_id']
        );

        $i++;
        endwhile;
     }
}
?>