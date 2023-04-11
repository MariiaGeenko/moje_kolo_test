<?php

namespace App\Controller;

use App\Entity\Worker;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorkerController extends AbstractController
{
    use WorkerTrait;

    /**
     * @Route("/worker")
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        $news = Worker::query()->paginate(10);
        return $this->render('/base.html.twig', [
            'workers' => $this->getWorkers(),
        ]);
    }

    public function show(int $id): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('/base.html.twig', [
            'workers' => $this->getWorkers($id)
        ]);
    }
}