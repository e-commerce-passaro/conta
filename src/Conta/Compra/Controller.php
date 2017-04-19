<?php

namespace Ecompassaro\Conta\Compra;

use Ecompassaro\Acesso\Controller as AcessoController;

class Controller extends AcessoController
{
    protected $resource = 'conta-compras';

    /**
     * Mostra a página de compras da conta
     * @return AdminCompraViewModel
     */
    public function indexAction()
    {
        return $this->getViewModel()->setTemplate('conta/compra/index');
    }

}
