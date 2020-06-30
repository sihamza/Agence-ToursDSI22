<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="pages")
     */
    public function index()
    {
        return $this->render('app/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

}
