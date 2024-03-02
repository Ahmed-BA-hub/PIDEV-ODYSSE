<?php

namespace App\Controller;

use App\Entity\Civilisation;
use App\Form\CivilisationType;
use App\Repository\CivilisationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;

#[Route('/civilisation')]
class CivilisationController extends AbstractController
{
    #[Route('/', name: 'app_civilisation_index', methods: ['GET'])]
    public function index(CivilisationRepository $civilisationRepository): Response
    {
        return $this->render('civilisation/index.html.twig', [
            'civilisations' => $civilisationRepository->findAll(),
        ]);
    }

    #[Route('/back', name: 'app_civilisation_index_back', methods: ['GET'])]
    public function index_back(CivilisationRepository $civilisationRepository): Response
    {
        return $this->render('civilisation/index_back.html.twig', [
            'civilisations' => $civilisationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_civilisation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $civilisation = new Civilisation();
        $form = $this->createForm(CivilisationType::class, $civilisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Traitement de l'image téléchargée
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile instanceof UploadedFile) {
                // Gérer l'upload de l'image avec VichUploaderBundle
                $civilisation->setImageFile($imageFile);
            }

            $entityManager->persist($civilisation);
            $entityManager->flush();

            return $this->redirectToRoute('app_civilisation_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('civilisation/new.html.twig', [
            'civilisation' => $civilisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_civilisation_show', methods: ['GET'])]
    public function show(Civilisation $civilisation): Response
    {
        return $this->render('civilisation/show.html.twig', [
            'civilisation' => $civilisation,
        ]);
    }

    #[Route('/front/{id}', name: 'app_civilisation_sfront', methods: ['GET'])]
    public function show_front(Civilisation $civilisation): Response
    {
        return $this->render('civilisation/show_front.html.twig', [
            'civilisation' => $civilisation,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_civilisation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Civilisation $civilisation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CivilisationType::class, $civilisation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Traitement de l'image téléchargée
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile instanceof UploadedFile) {
                // Gérer l'upload de l'image avec VichUploaderBundle
                $civilisation->setImageFile($imageFile);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_civilisation_index_back', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('civilisation/edit.html.twig', [
            'civilisation' => $civilisation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_civilisation_delete', methods: ['POST'])]
    public function delete(Request $request, Civilisation $civilisation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$civilisation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($civilisation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_civilisation_index_back', [], Response::HTTP_SEE_OTHER);
    }
}
