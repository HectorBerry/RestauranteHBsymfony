<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantesController extends AbstractController
{
    /**
     * @Route("/restaurantes", name="restaurantes")
     */
    public function restaurantesAction()
    {
        return new Response(
            '<h1>RESTAURANTES:</h1>'
        );
    }
}