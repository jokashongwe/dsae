<?php

namespace App\Controller;

use App\Repository\ProfessorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/contact/staffprofiles', name: 'app_contact_staff')]
    public function staff_contacts(ProfessorRepository $professor_repository): Response
    {
        $professors = $professor_repository->findAll();
        return $this->render('contact/staff.html.twig', [
            'professors' => $professors,
        ]);
    }
}
