<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Articles;



#[Route('/articles', name: 'articles_')]
class ArticlesController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }

    #[Route('/{id}', name: 'details')]
    public function details(Articles $article): Response

    {
        // dd($article);

        return $this->render('articles/details.html.twig', compact('article'));
    }
}
