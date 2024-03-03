<?php

namespace App\Controller;

use App\Entity\ReservationProgramme;
use App\Form\ReservationProgrammeType;
use App\Repository\ReservationProgrammeRepository;
use App\Repository\ProgrameRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/reservation/programme')]
class ReservationProgrammeController extends AbstractController
{
    #[Route('/', name: 'app_reservation_programme_index', methods: ['GET'])]
    public function index(ReservationProgrammeRepository $reservationProgrammeRepository,UserRepository $repo): Response
    {
        $user=$repo->findOneById(4);
        return $this->render('reservation_programme/index.html.twig', [
            'reservation_programmes' => $reservationProgrammeRepository->findByUser($user),
        ]);
    }
    #[Route('/admin/list', name: 'app_reservation_programme_list_admin', methods: ['GET'])]
    public function listAdmin(ReservationProgrammeRepository $reservationProgrammeRepository): Response
    {
       
        return $this->render('reservation_programme/list_admin.html.twig', [
            'reservation_programmes' => $reservationProgrammeRepository->findAll(),
        ]);
    }
    #[Route('/new/{id}', name: 'app_reservation_programme_new', methods: ['GET', 'POST'])]
    public function new(Request $request,MailerInterface $mailer,TransportInterface $transport, EntityManagerInterface $entityManager,ProgrameRepository $repo,UserRepository $repoUser): Response
    {
        $id =$request->get('id');
        $programme=$repo->findOneById($id);        
        $user=$repoUser->findOneById(4);
        $reservationProgramme = new ReservationProgramme();
        $form = $this->createForm(ReservationProgrammeType::class, $reservationProgramme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $message = (new Email())
            ->to('mbenattiaa@gmail.com')
            ->from('no-reply@demomailtrap.com')
            ->subject('Confirmation Reservation')
            ->text('Votre Resrvation du programme est confirmé')
        ;

        $response = $transport->send($message);

            $reservationProgramme->setUser($user);
            $reservationProgramme->setProgramme($programme);
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
    public function edit(Request $request, ReservationProgramme $reservationProgramme, EntityManagerInterface $entityManager,UserRepository $repoUser): Response
    {     
        $user=$repoUser->findOneById(4);
        $form = $this->createForm(ReservationProgrammeType::class, $reservationProgramme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationProgramme->setUser($user);
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
