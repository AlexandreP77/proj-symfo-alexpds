<?php

namespace App\Controller;

use App\Repository\HeadersRepository;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\SearchType;
use App\Model\Search;
use Symfony\Component\HttpFoundation\Request;



class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProductRepository $productRepository, HeadersRepository $headersRepository,Request $request,ProductRepository $repository): Response
    {


        $products = $productRepository->findByIsInHome(1);
        $headers = $headersRepository->findAll();
        return $this->render('home/index.html.twig', [
            'carousel' => true,  //Le caroussel ne s'affiche que sur la page d'accueil (voir base.twig)
            'top_products' => $products,
            'headers' => $headers,
            'products' => $products
        ]);       

        return $this->renderForm('home/index.html.twig', [
            'products' => $products,

        ]);
    }


    

    #[Route('a-propos', name: 'about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig');
    }

   
}
