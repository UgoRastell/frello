<?php

namespace App\Controller;

use App\Entity\Board;
use App\Form\BoardType;
use App\Repository\BoardRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BoardController extends AbstractController
{
    #[Route('/', name: 'app_board_index', methods: ['GET'])]
    public function index(BoardRepository $boardRepository): Response
    {
        $userLogged = $this->denyAccessUnlessGranted('IS_AUTHENTICATED');
        return $this->render('board/index.html.twig', [
            'boards' => $boardRepository->findAll(),
            'userLogged' => $userLogged
        ]);
    }

    #[Route('/new', name: 'app_board_new', methods: ['GET', 'POST'])]
    public function new(Request $request, BoardRepository $boardRepository): Response
    {
        $userLogged = $this->denyAccessUnlessGranted('IS_AUTHENTICATED');

        $board = new Board();
        $form = $this->createForm(BoardType::class, $board);
        $user = $this->getUser();
        $board->setOwner($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
            $boardRepository->save($board, true);

            return $this->redirectToRoute('app_board_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('board/new.html.twig', [
            'board' => $board,
            'form' => $form,
            'userLogged' => $userLogged
        ]);
    }

    #[Route('/{id}', name: 'app_board_show', methods: ['GET'])]
    public function show(Board $board): Response
    {
        $userLogged = $this->denyAccessUnlessGranted('IS_AUTHENTICATED');
        return $this->render('board/show.html.twig', [
            'board' => $board,
            'userLogged' => $userLogged
        ]);
    }

    #[Route('/{id}/edit', name: 'app_board_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Board $board, BoardRepository $boardRepository): Response
    {
        $userLogged = $this->denyAccessUnlessGranted('IS_AUTHENTICATED');

        $form = $this->createForm(BoardType::class, $board);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $boardRepository->save($board, true);

            return $this->redirectToRoute('app_board_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('board/edit.html.twig', [
            'board' => $board,
            'form' => $form,
            'userLogged' => $userLogged
        ]);
    }

    #[Route('/{id}', name: 'app_board_delete', methods: ['POST'])]
    public function delete(Request $request, Board $board, BoardRepository $boardRepository): Response
    {
        $userLogged = $this->denyAccessUnlessGranted('IS_AUTHENTICATED');
        
        if ($this->isCsrfTokenValid('delete'.$board->getId(), $request->request->get('_token'))) {
            $boardRepository->remove($board, true);
        }

        return $this->redirectToRoute('app_board_index', ['userLogged' => $userLogged], Response::HTTP_SEE_OTHER);
    }
}