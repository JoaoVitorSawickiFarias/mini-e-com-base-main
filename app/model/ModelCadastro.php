<?php

namespace App\Model;

use App\Model\ModelPadrao;

class ModelCadastro extends ModelPadrao
{
    function getTable(){
        
        return 'MERCADO.tbcidade';
        
    }
    function deleteProduto(){
        $iId = $this->id;
        
        return parent::delete([
            'cidcodigo' => $iId
        ]);
    }
}