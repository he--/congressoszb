<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function startAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('index' );

    }

    /**
     * @param Request $request
     *
     * @Route("/index", name="index")
     */
    public function indexAction(Request $request)
    {
        //return $this->render('index.html');
        return $this->redirect("segundo");
    }


    /**
     * @Route("/segundo", name="segundo")
     * @param Request $request
     */
    public function segundoPassoAction(Request $request)
    {
        return $this->render('index.html');
        dump("aqui");exit;

    }
    
}
