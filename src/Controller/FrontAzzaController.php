<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FrontAzzaController extends AbstractController
{
    /**
     * @Route("/", name="azza")
     */
    public function index()
    {
        return $this->render('front_azza/index.html.twig', [
            'controller_name' => 'FrontAzzaController',
        ]);
    }
}
