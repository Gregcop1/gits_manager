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
        $directories = array(
                            new Directory('/home/gregory/www/typo3lab/typo3conf/ext')
                        );

        return $this->render('InouitGitsManagerBundle:GitsManager:index.html.twig', array( 'directories' => $directories  ));
    }
}
