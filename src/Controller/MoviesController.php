<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): JsonResponse
    {
        return $this->render();
    }
}
