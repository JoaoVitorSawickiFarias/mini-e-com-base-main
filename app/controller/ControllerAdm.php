<?php

namespace App\Controller;

use App\Controller\ControllerPadrao;
use App\View\ViewAdm;
use App\Db\Connection;
use App\Model\ModelAdm;

class ControllerAdm extends ControllerPadrao
{
    function processPage(){
        
        $oModelAdm = new ModelAdm;
        
        $a = $oModelAdm->getAll();
        
        
        $sTitle = 'Administrador';
        
        $sContent = ViewAdm::render([
            'produtoContent' => '<h2>Voce acessou como administrador</h2>',
            'tabelaProduto' => viewAdm::getHtmlTabelaProdutos($a),
            'adicionarProduto' => "<a href='index.php?pg=adicionar'><input type=button value='Adicionar Produto'></input></a>"
        ]);
        return parent::getPage(
            $sTitle,
            $sContent
        );
    }
    function processDelete(){
    $iIdAdm = $_GET['proid'] ??= '';
    
    $oModelAdm = new ModelAdm;
    $oModelAdm->id = $iIdAdm;
    
    $oModelAdm->deleteProduto();
    
    $this -> footerVars = ['footerContent' => ''];

        if($oModelAdm -> deleteProduto()){
            $this -> footerVars = ['footerContent' => '<div class="alert alert-success" role="alert">
            Produto excluido com sucesso!
          </div>'];
        }
    
    return $this->processPage();
    }
    
    function processInsert(){
        $nomeProduto = $_POST['nome'] ??= '';
        $precoProduto = $_POST['valor'] ??= '';
        $descricaoProduto = $_POST['descricao'] ??= '';
        $imagemProduto = $_POST['pdimagem'] ??= '';
        
        $oModelProduto = new ModelAdm;
        $oModelProduto ->nome=$nomeProduto;
        $oModelProduto->valor=$precoProduto;
        $oModelProduto->descricao=$descricaoProduto;
        $oModelProduto->imagem=$imagemProduto;
        
        $oModelProduto->insertProduto();
        
        $this -> footerVars = ['footerContent' => ''];

        if($oModelProduto->insertProduto()){
            $this -> footerVars = ['footerContent' => '<div class="alert alert-success" role="alert">
            Produto incluido com sucesso!
          </div>'];
        }
        
        return $this -> processPage();
        
    }
}

