<?php

namespace App\Controller;

use App\Entity\StudyProgrammes;
use App\Repository\StudyProgrammesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StudyController extends AbstractController
{
    #[Route('/study/undergraduateprogrammes', name: 'app_study_undergrad')]
    public function undergrad(StudyProgrammesRepository $study_programmes): Response
    {
        return $this->render('study/index.html.twig', [
            'programs' => $study_programmes->findBy(['grade' => 'LICENCE']),
            'programType'  => "Licences"
        ]);
    }

    #[Route('/study/graduateprogrammes', name: 'app_study_grad')]
    public function graduateprogrammes(StudyProgrammesRepository $study_programmes): Response
    {
        return $this->render('study/master.html.twig', [
            'programs' => $study_programmes->findBy(['grade' => 'MASTER']),
            'programType'  => "Masters"
        ]);
    }
}
