<?php

namespace App\Controller;

use App\Entity\Position;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PositionController extends AbstractController
{
    use PositionTrait;

    /**
     * @Route("/position")
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        $news = Position::query()->paginate(10);
        return $this->render('/base.html.twig', [
            'workers' => $this->getPositions(),
        ]);
    }

    public function show(int $id): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('/base.html.twig', [
            'workers' => $this->getPositions($id)
        ]);
    }
}

