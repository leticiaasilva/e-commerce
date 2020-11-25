<?php
Class Categorias extends Conexao{

    private $cate_id, $cate_nome, $cate_slug;

    function __construct()
    {
        parent :: __construct();
    }
    function GetCategorias(){
        //query para buscar os produtos de uma categoria especifica

        $query = "SELECT * FROM categorias";

        $this->ExecuteSQL($query);

        $this->GetLista();

        
    } 
    function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
            'cate_id' => $lista['cate_id'],
            'cate_nome' => $lista['cate_nome'],
            'cate_slug' => $lista['cate_slug'],
            'cate_link' => Rotas::pagProduto(). '/' .$lista['cate_id']. '/' .$lista['cate_slug'],

        );

        $i++;
        endwhile;
     }
}
?>