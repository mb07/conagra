<?php

namespace Odiseo\Bundle\ConAgraBundle\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuienEsController extends Controller
{
    public function showPageAction($page)
    {
        return $this->render('OdiseoConAgraBundle:Frontend/QuienEs:'.$page.'.html.twig');
    }
}
