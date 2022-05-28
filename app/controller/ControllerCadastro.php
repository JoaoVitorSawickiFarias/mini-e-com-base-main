<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewProduto;
use App\Db\Connection;
use App\Model\ModelProduto;

class ControllerProdutos extends ControllerPadrao
{
    function processPage(){
        
        $oModelProduto = new ModelProduto;
        
        $a = $oModelProduto->getAll();
        
        
        $sTitle = 'Produtos';
        
        $sContent = ViewProduto::render([
            'produtoContent' => '<h2>Voce acessou os nossos produtos</h2>',
            'tabelaProduto' => viewProduto::getHtmlTabelaProdutos($a)
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processDelete(){
    $iIdProduto = $_GET['proid'] ??= '';
    
    $oModelProduto = new ModelProduto;
    $oModelProduto->id = $iIdProduto;
    
    $oModelProduto->deleteProduto();
    
    return $this->processPage();
    }
}

