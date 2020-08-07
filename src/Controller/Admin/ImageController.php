<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{
    /**
     * @Route("/admin/image", name="admin_image")
     */
    public function index()
    {
        return $this->render('admin/image/index.html.twig', [
            'controller_name' => 'ImageController',
        ]);
    }
}
