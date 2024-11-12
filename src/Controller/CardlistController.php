<?php

namespace App\Controller;

use App\Entity\Cardlist;
use App\Repository\CardlistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class CardlistController extends AbstractController
{
    #[Route('/cardlist', name: 'product_list')]
    public function index(CardlistRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products
        ]);
    
    }

    #[Route('/homepage', name: 'homepage')]
    public function homepage()
    {
        return $this->render('base.html.twig'); 
    }

}
