<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\RestaurantRepository;
class RestaurantController extends AbstractController
{
    #[Route('/restaurantList', name: 'app_restaurant_list')]
    public function index(RestaurantRepository $restaurantRepository): Response
    {
        return $this->render('restaurant/index.html.twig', [
            'controller_name' => 'RestaurantController',
            'restaurants' => $restaurantRepository->findAll(),
        ]);
    }
}
