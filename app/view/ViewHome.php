<?php

namespace App\View;

use App\View\ViewPadrao;
use App\View\ControllerHome;


class ViewHome extends ViewPadrao
{
    static function getHtmlTabelaShop(array $a){
        $sHtml = "";

        foreach ($a as $x){
            $sHtml .=
                    '<div class="card" style="width: 18rem;">
                        <img class="card-img-top" src='. $x['pdimagem'].' alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">' . $x['pdnome'] . '</h4>
                        <p class="card-text">' . $x['pddescricao'] . '</p>
                        <h5 class="card-title">' . $x['pdpreco'] . '</h6>
                     </div>
                    </div>';
                }
        return $sHtml;
    }
}
