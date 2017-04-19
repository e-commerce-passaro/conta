<?php
namespace Ecompassaro\Conta\Compra;

use Ecompassaro\Compra\Manager as CompraManager;
use Zend\Authentication\AuthenticationService;
use Ecompassaro\Conta\ViewModel as ContaViewModel;
use Ecompassaro\Acesso\Acesso;

/**
 * Gerador da estrutura da página de administração de compras
 */
class ViewModel extends ContaViewModel
{

    /**
     * Injeta dependências
     * @param \Zend\Authentication\AuthenticationService $authentication
     * @param \Compra\CompraManager $compraManager
     */
    public function __construct(Acesso $acesso, AuthenticationService $authentication, CompraManager $compraManager)
    {
        parent::__construct($acesso);
        $this->setDescricaoPagina('Veja todas as suas compras.');
        $this->variables['compras'] = $compraManager->obterTodasComprasAutenticacao($authentication->getIdentity()->getId());
    }
}
