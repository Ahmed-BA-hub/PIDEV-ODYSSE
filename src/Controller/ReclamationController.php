<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\UserRepository;
use App\Repository\ReservationProgrammeRepository;
use App\Repository\ReservationRestaurantRepository;
use App\Repository\ReservationHotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    #[Route('/', name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository,UserRepository $repo): Response
    {
        $user =$repo->findOneById(4);
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findByUser($user),
        ]);
    }
    #[Route('/admin', name: 'app_reclamation_admin', methods: ['GET'])]
    public function indexAdmin(ReclamationRepository $reclamationRepository,UserRepository $repo): Response
    {
        $user =$repo->findOneById(4);
        return $this->render('reclamation/index_admin.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    #[Route('/new/{idprogramme}/{idrestaurant}/{idhotel}', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,UserRepository $repoUser,ReservationProgrammeRepository $repoProgramme,ReservationHotelRepository $repoHotel,ReservationRestaurantRepository $repoRestaurant): Response
    {
        
        $idProgramme =$request->get('idprogramme');
        $idRestaurant =$request->get('idrestaurant');
        $idHotel=$request->get('idhotel');
        $programme=$repoProgramme->findOneById($idProgramme);
        $restaurant=$repoRestaurant->findOneById($idRestaurant);
        $hotel=$repoHotel->findOneById($idHotel);
        $user=$repoUser->findOneById(4);
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if($programme != null){
                $reclamation->setReservationProgramme($programme);
            }
            if($restaurant != null){
                $reclamation->setReservationRestaurant($restaurant);
            }
            if($hotel != null){
                $reclamation->setReservationHotel($hotel);
            }
            $reclamation->setUser($user);
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
