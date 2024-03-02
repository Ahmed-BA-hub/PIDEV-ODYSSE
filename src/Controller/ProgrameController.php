<?php

namespace App\Controller;

use App\Entity\Programe;
use App\Form\ProgrameType;
use App\Repository\ProgrameRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/programe')]
class ProgrameController extends AbstractController
{
    #[Route('/', name: 'app_programe_index', methods: ['GET'])]
    public function index(ProgrameRepository $programeRepository): Response
    {
        return $this->render('programe/index.html.twig', [
            'programes' => $programeRepository->findAll(),
        ]);
    }

    #[Route('/back', name: 'app_programe_index_back', methods: ['GET'])]
    public function index_back(ProgrameRepository $programeRepository): Response
    {
        return $this->render('programe/index_back.html.twig', [
            'programes' => $programeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_programe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager , SluggerInterface $slugger): Response
    {
        $dateDuSysteme = new \DateTime(); // Obtenir la date actuelle
        $programe = new Programe();
        $programe->setDate($dateDuSysteme);
        $form = $this->createForm(ProgrameType::class, $programe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Traitement de l'image téléchargée
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile instanceof UploadedFile) {
                // Gérer l'upload de l'image avec VichUploaderBundle
                $programe->setImageFile($imageFile);
            }

            $entityManager->persist($programe);
            $entityManager->flush();

            return $this->redirectToRoute('app_programe_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programe/new.html.twig', [
            'programe' => $programe,
            'form' => $form,
        ]);


       
    }

    #[Route('/{id}', name: 'app_programe_show', methods: ['GET'])]
    public function show(Programe $programe): Response
    {
        return $this->render('programe/show.html.twig', [
            'programe' => $programe,
        ]);
    }

    #[Route('/front/{id}', name: 'app_programe_show_front', methods: ['GET'])]
    public function show_front(Programe $programe): Response
    {
        return $this->render('programe/show_front.html.twig', [
            'programe' => $programe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_programe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Programe $programe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProgrameType::class, $programe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Traitement de l'image téléchargée
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile instanceof UploadedFile) {
                // Gérer l'upload de l'image avec VichUploaderBundle
                $programe->setImageFile($imageFile);
            }
            $entityManager->flush();

            return $this->redirectToRoute('app_programe_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programe/edit.html.twig', [
            'programe' => $programe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_programe_delete', methods: ['POST'])]
    public function delete(Request $request, Programe $programe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programe->getId(), $request->request->get('_token'))) {
            $entityManager->remove($programe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programe_index_back', [], Response::HTTP_SEE_OTHER);
    }
}
