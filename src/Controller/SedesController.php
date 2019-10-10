<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SedesController extends AbstractController
{
    /**
     * @Route("/sedes", name="sedes")
     */
    public function sedesAction()
    {
        return new Response(
            '<h1>SEDES:</h1>'
        );
    }
}