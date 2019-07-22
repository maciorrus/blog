<?php

namespace Cheaster\AuthBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/chester", name="chester")
     */
    public function indexAction(Request $request)
    {
        return $this->render('CheasterAuthBundle:Default:index.html.twig');
    }
}
