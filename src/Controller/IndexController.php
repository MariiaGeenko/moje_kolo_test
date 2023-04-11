<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController {

    /**
     * @Route("/")
     */
    public function index() {

        $dateTime = new \DateTime();

        return $this->render('index/index.html.twig', [
                    'date_time' => $dateTime,
        ]);
    }

}


# In our last project I encountered a problem with image transfer from the backend
# to the frontend and solved it by creating a session on the backend via session

require_once 'model/User.php';
session_start();
$pageHeader = 'Добро пожаловать';



$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
}

include "view/index.php";
