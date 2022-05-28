<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdicionar;
use App\Db\Connection;

class ControllerAdicionar extends ControllerPadrao
{
    function processPage(){
        
        $sTitle = 'Adicionar';
        
        $sContent = ViewAdicionar::render([
            'produtoAdicionar'=> "<h2>Cadastro de itens:</h2>",
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}

