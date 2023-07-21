<?php

namespace App\Controller;

use App\Entity\Robes;
use App\Repository\RobesRepository;
use App\Form\RobesType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'form')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $robes = new Robes();

        $formRobes = $this->createForm(RobesType::class, $robes);

        $formRobes->handleRequest($request);
        if ($formRobes->isSubmitted() && $formRobes->isValid()){
            ($formRobes->getData());
            $em->persist($robes);
            $em->flush();
        }
        return $this->render('main/index.html.twig', [
            'form' => $formRobes->createView(),
        ]);

    }
    #[Route('/articles', name: 'app_articles')]
    public function show(RobesRepository $RobesRepository): Response
    {
        return $this->render('main/show.html.twig', [
            'Robes' => $RobesRepository->findby([])

                

        ]);
    }




}
