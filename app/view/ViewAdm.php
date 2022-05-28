<?php

namespace App\View;

use App\View\ViewPadrao;

class ViewAdm extends ViewPadrao
{
    static function getHtmlTabelaProdutos(array $a){
        $sHtml = "<table class='table' >
                    <thead>
                     <tr>
                        <th>Codigo</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Imagem</th>
                        <th>Desricao</th>
                     </tr>
                    <thead>";

        foreach ($a as $Coluna){
            $sHtml .= '
                <tr>
                 <td>'
                    .$Coluna["pdcodigo"].'
                 </td>
                 <td>'
                    .$Coluna["pdnome"].'
                </td>
                <td>'
                    .$Coluna["pdpreco"].'
                </td>
                <td>'
                    .$Coluna["pdimagem"].'
                </td>
                <td>'
                    .$Coluna["pddescricao"].'
                </td>
                <td>
                    <a href="index.php?pg=administrador&act=delete&proid= '.$Coluna["pdcodigo"].'">
                        <input type="button" value="Excluir"></input>
                    </a>
                </td>
               </tr>';
    }
        return $sHtml;
   }
}
