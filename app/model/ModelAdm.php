<?php

namespace App\Model;

use App\Model\ModelPadrao;


class ModelAdm extends ModelPadrao
{
    public $nome;
    public $valor;
    public $descricao;
    
    function getTable(){
        
        return 'PUBLIC.tbproduto';
        
    }
    function deleteProduto(){
        $iId = $this->id;
        
        return parent::delete([
            'pdcodigo' => $iId
        ]);
    }
    function insertProduto() {
        $iNome = $this->getBdValue($this->nome);
        $iValor = $this->getBdValue($this->valor);
        $iDescricao = $this->getBdValue($this->descricao);
        $iImagem= $this->getBdValue($this->imagem);
        
        
    return parent::insert([
            'pdnome' => $iNome,
            'pdpreco' => $iValor,
            'pddescricao' => $iDescricao,
            'pdimagem' => $iImagem,
            
        ]);
    }
}