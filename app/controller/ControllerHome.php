<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewHome;
use App\Db\Connection;
use App\Model\ModelAdm;


class ControllerHome extends ControllerPadrao
{

    protected function processPage()
    {
        $oModelAdm = new ModelAdm;
        
        $a = $oModelAdm ->getAll();
        
        $sTitle = 'Jovens Talentos';

        $sContent = ViewHome::render([

            'homeContent' => '<h1>Seja Bem Vindo a Doces do Farias!</h1>',
            'homeContent' => viewHome::getHtmlTabelaShop($a),
            
        ]);

        $this->footerVars = [
            // Passar aqui os parametros do footer da página
            'footerContent' => '"Um sorriso a cada mordida!"'
        ];
        
        

        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
}
