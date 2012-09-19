<?php

// src/Inouit/GitsManagerBundle/Controller/GitsManagerController.php

namespace Inouit\GitsManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Inouit\GitsManagerBundle\Projects\Directory;

class GitsManagerController extends Controller
{
    public function indexAction()
    {
        $rep = new Directory('/home/gregory/www/gits_manager');

        return $this->render('InouitGitsManagerBundle:GitsManager:index.html.twig', array( 'rep' => $rep  ));
    }
}
