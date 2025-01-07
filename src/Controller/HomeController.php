<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
/**
 * page d'accueil
 * @return Response
 * 
 */


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $avis = [
            "Très belle expérience, mes enfants ont adoré voir les tigres!" => "Cathérine",
            "Un endroit magnifique et bien entretenu. Bravo à l'équipe!" => "Marcus",
            "Les habitats sont vraiment bien conçus. Un moment inoubliable." => "John",
        ];

        $habitats = [
            'Savane' => ['Lions', 'Girafes', 'Zèbres'],
            'Jungle' => ['Singes', 'Tigres', 'Léopards'],
            'Marais' => ['Couguar', 'Renard gris']
        ];

        $services = [
            'Cafétérias et restaurants',
            'Aires de jeux pour enfants',
            'Boutique de souvenirs',
            'Visites guidées'
        ];

        return $this->render('home/index.html.twig', [
            'reviews' => $avis,
            'habitats' => $habitats,
            'services' => $services,
        ]);
    }
}
