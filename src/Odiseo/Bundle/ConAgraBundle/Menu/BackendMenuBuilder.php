<?php

namespace Odiseo\Bundle\ConAgraBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;

class BackendMenuBuilder
{
    private $factory;
    protected $securityContext;
    
    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory, SecurityContextInterface $securityContext)
    {
        $this->factory = $factory;
        $this->securityContext = $securityContext;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root', array(
            'childrenAttributes' => array(
                'class' => 'sidebar-menu'
            )
        ));

        $menu->addChild('dashboard', array(
        		'route' => 'odiseo_conagra_backend_dashboard',
        		'labelAttributes' => array('icon' => 'fa-dashboard'),
        ))->setLabel("Dashboard");
        
        $menu->addChild('user', array(
        		'route' => 'odiseo_conagra_backend_user_index',
        		'labelAttributes' => array('icon' => 'fa-user'),
        ))->setLabel("Usuarios");
        
        return $menu;
    }
}