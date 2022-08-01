<?php

namespace App\Controller;

use App\Entity\Agency;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;

class TravelsController extends AbstractController
{
    #[Route('/travels', name: 'app_travels')]
    public function index(ManagerRegistry $doctrine): Response
    {   
        $title= "Address";
        $agencies = $doctrine->getRepository(Agency::class)->findAll();
        return $this->render('travels/index.html.twig', [
            "agencies" => $agencies,
            "address" => $title
       ]);
    }
}
