<?php

namespace App\Controller;

use App\Entity\ReservationProgramme;
use App\Form\ReservationProgrammeType;
use App\Repository\ReservationProgrammeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reservation/programme')]
class ReservationProgrammeController extends AbstractController
{
    #[Route('/', name: 'app_reservation_programme_index', methods: ['GET'])]
    public function index(ReservationProgrammeRepository $reservationProgrammeRepository): Response
    {
        return $this->render('reservation_programme/index.html.twig', [
            'reservation_programmes' => $reservationProgrammeRepository->findAll(),
        ]);
    }
    #[Route('/admin/list', name: 'app_reservation_programme_list_admin', methods: ['GET'])]
    public function listAdmin(ReservationProgrammeRepository $reservationProgrammeRepository): Response
    {
        return $this->render('reservation_programme/list_admin.html.twig', [
            'reservation_programmes' => $reservationProgrammeRepository->findAll(),
        ]);
    }
    #[Route('/new', name: 'app_reservation_programme_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservationProgramme = new ReservationProgramme();
        $form = $this->createForm(ReservationProgrammeType::class, $reservationProgramme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reservationProgramme);
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_programme/new.html.twig', [
            'reservation_programme' => $reservationProgramme,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_programme_show', methods: ['GET'])]
    public function show(ReservationProgramme $reservationProgramme): Response
    {
        return $this->render('reservation_programme/show.html.twig', [
            'reservation_programme' => $reservationProgramme,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_reservation_programme_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ReservationProgramme $reservationProgramme, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReservationProgrammeType::class, $reservationProgramme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reservation_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservation_programme/edit.html.twig', [
            'reservation_programme' => $reservationProgramme,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reservation_programme_delete', methods: ['POST'])]
    public function delete(Request $request, ReservationProgramme $reservationProgramme, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservationProgramme->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reservationProgramme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reservation_programme_index', [], Response::HTTP_SEE_OTHER);
    }
}
