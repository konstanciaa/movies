<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        $movies = ["Pride and Prejudice", "Persuasion", "Emma", "Sense and Sensibility"];

        return $this->render('index.html.twig', array(
            'movies' => $movies
        ));
    }
}
