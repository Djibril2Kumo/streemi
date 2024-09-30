<?php

declare(strict_types=1);

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
class MovieController 
{
    #[Route('/movie/{name}/{category}', name: 'movie')]
    public function index(string $name, string $category = 'valeur par défaut'): Response
    {
        return new Response(
            '<html><body><h1> '.$name. ' dans la catégorie ' .$category. ' </h1></body></html>');
    }


}
?>