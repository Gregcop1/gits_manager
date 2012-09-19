<?php

// src/Inouit/GitsManagerBundle/Controller/GitsManagerController.php

namespace Inouit\GitsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GitsManagerController extends Controller
{
    public function indexAction()
    {
        return $this->render('InouitGitsManagerBundle:GitsManager:index.html.twig', array( 'name' => 'Greg'  ));
    }
}
