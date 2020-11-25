<?php
    Class ProdutosImages extends Conexao{
        function getImagesPRO($pro_id){

        $query = "SELECT * FROM {$this->prefix}images WHERE 
        img_pro_id = :pro_id";

        $params = array(':pro_id'=> (int)$pro_id);

        $this->ExecuteSQL($query, $params);

        $this->GetLista();
        }

        function GetLista(){
            $i = 1;
            while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'img_id' => $lista['img_id'],
                'img_nome' => Rotas::imageLink($lista['img_nome'],150,150),
                'img_pro_id' => $lista['img_pro_id'],
                'img_link' => Rotas::imageLink($lista['img_nome'],500,500),
                'img_arquivo' => $lista['img_nome']
            );
    
            $i++;
            endwhile;
         }

    }
?>