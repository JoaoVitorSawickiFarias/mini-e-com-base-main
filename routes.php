<?php

/**
 * Rederiza o conte�do da p�gina solicitada
 * @param string $sPage
 * @return string
 */
function render($sPage)
{
    switch ($sPage) {
        case 'home':
            return (new App\Controller\ControllerHome)->render();
        case 'administrador':
            return (new App\Controller\ControllerAdm)->render();
        case 'adicionar':
            return (new App\Controller\ControllerAdicionar)->render();
        
    }

    return 'Pagina nao encontrada!';
}
