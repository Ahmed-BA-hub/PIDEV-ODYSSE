<?php

namespace App\Controller;

use App\Entity\ReservationRestaurant;
use App\Form\ReservationRestaurantType;
use App\Repository\ReservationRestaurantRepository;
use App\Repository\RestaurantRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;


#[Route('/reservation/restaurant')]
class ReservationRestaurantController extends AbstractController
{
    #[Route('/', name: 'app_reservation_restaurant_index', methods: ['GET'])]
    public function index(ReservationRestaurantRepository $reservationRestaurantRepository,UserRepository $repo): Response
    {
        
        $user=$repo->findOneById(4);
        return $this->render('reservation_restaurant/index.html.twig', [
            'reservation_restaurants' => $reservationRestaurantRepository->findByUser($user),
        ]);
    }
    #[Route('/admin/list', name: 'app_reservation_restaurant_list_admin', methods: ['GET'])]
    public function listadmin(ReservationRestaurantRepository $reservationRestaurantRepository,Request $request): Response
    {
        $date = $request->query->get('date');
        
        $date = \DateTime::createFromFormat('Y-m-d',  $date );
        return $this->render('reservation_restaurant/list_admin.html.twig', [
            'reservation_restaurants' => $reservationRestaurantRepository->findByDate($date),
        ]);
    }
    #[Route('/new/{id}', name: 'app_reservation_restaurant_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,$id,RestaurantRepository $restaurantRepository,UserRepository $repoUser): Response
    {
        $reservationRestaurant = new ReservationRestaurant();
        $form = $this->createForm(ReservationRestaurantType::class, $reservationRestaurant);
        $form->handleRequest($request);
        $restaurant = $restaurantRepository->findOneById($id);   
        $user=$repoUser->findOneById(4);
        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRestaurant->setRestaurant($restaurant);
            $reservationRestaurant->setUser($user);
            $entityManager->persist($reservationRestaurant);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_restaurant/new.html.twig', [
            'reservation_restaurant' => $reservationRestaurant,
            'form' => $form,
        ]);
    }
    #[Route('/reservations/search', name: 'search_reservations')]
    public function search(Request $request,ReservationRestaurantRepository $repo,SerializerInterface $serializer): Response
    {
        $date = $request->query->get('date');
        $restaurantName = $request->query->get('restaurant_name');
        $date = \DateTime::createFromFormat('Y-m-d',  $date );
        // Effectuez votre logique de recherche ici
        // Par exemple, utilisez une méthode de repository pour rechercher les réservations
        $reservations =$repo->findByDate( $date);

        $reservationData = $serializer->normalize($reservations, null, [
            AbstractNormalizer::IGNORED_ATTRIBUTES => ['restaurant', 'user', 'reclamations']
        ]);
        return new JsonResponse($reservationData);
    }    

    #[Route('/{id}', name: 'app_reservation_restaurant_show', methods: ['GET'])]
    public function show(ReservationRestaurant $reservationRestaurant): Response
    {
        return $this->render('reservation_restaurant/show.html.twig', [
            'reservation_restaurant' => $reservationRestaurant,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_restaurant_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationRestaurant $reservationRestaurant, EntityManagerInterface $entityManager,UserRepository $repoUser): Response
    {
        $user=$repoUser->findOneById(4);
        $form = $this->createForm(ReservationRestaurantType::class, $reservationRestaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRestaurant->setUser($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_restaurant/edit.html.twig', [
            'reservation_restaurant' => $reservationRestaurant,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_restaurant_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationRestaurant $reservationRestaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationRestaurant->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationRestaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_restaurant_index', [], Response::HTTP_SEE_OTHER);
    }
}
