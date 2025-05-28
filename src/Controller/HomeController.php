<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ArticleRepository $articleRepository): Response
    {
        $last_5_articles = $articleRepository->findBy([], ['pubDate' => 'DESC'], 5, 0);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'articles' => $last_5_articles,
        ]);
    }
}
