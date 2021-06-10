<?php

namespace App\Controller;

use App\Entity\Notes;
use App\Entity\User;
use App\Form\NotesType;
use App\Services\QrcodeService;
use App\Repository\NotesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/notes")
 */
class NotesController extends AbstractController
{
    /**
     * @Route("/", name="notes_index", methods={"GET"})
     */
    public function index(NotesRepository $notesRepository): Response
    {
        $user = $this->getUser();
        $notes = $notesRepository->findByUsername($user->getUsername());
        return $this->render('notes/index.html.twig', [
            'notes' => $notes,
        ]);
    }

    /**
     * @Route("/new", name="notes_new", methods={"GET","POST"})
     */
    public function new(Request $request, QrcodeService $qrcodeService): Response
    {
        $note = new Notes();
        $user = $this->getUser();
        $form = $this->createForm(NotesType::class, $note);
        $form->handleRequest($request);
        $qrCode = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $note->setUsername($user->getUsername());
            $entityManager->persist($note);
            $entityManager->flush();
            $qrCode = $qrcodeService->qrcode($note->getId());

            return $this->render('notes/show.html.twig', [
                'note' => $note,
                'qrCode' => $qrCode
            ]);
        }

        return $this->render('notes/new.html.twig', [
            'note' => $note,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="notes_show", methods={"GET"})
     */
    public function show(Notes $note,QrcodeService $qrcodeService): Response
    {
        $qrCode = $qrcodeService->qrcode($note->getId());
        return $this->render('notes/show.html.twig', [
            'note' => $note,
            'qrCode' => $qrCode
        ]);
    }

    /**
     * @Route("/{id}/edit", name="notes_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Notes $note): Response
    {
        $form = $this->createForm(NotesType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('notes_index');
        }

        return $this->render('notes/edit.html.twig', [
            'note' => $note,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="notes_delete", methods={"POST"})
     */
    public function delete(Request $request, Notes $note): Response
    {
        if ($this->isCsrfTokenValid('delete'.$note->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($note);
            $entityManager->flush();
        }

        return $this->redirectToRoute('notes_index');
    }
}
