<?php

namespace App\Controller;

use App\Repository\ProfessorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
    public function staff_contacts(Request $request ,ProfessorRepository $professor_repository): Response
    {
        $code = $request->query->get("code");
        if(empty($code)){
            $code = "PR"; //Professor (PR), CT (Chef Travaux), AS1, AS2, ASP
        }
        $professors = $professor_repository->findBy([
            "profCode" => $code
        ]);
        
        $tableauCode = [
            ["code" => "PR", "name" => "Professeur"],
            ["code" => "CT", "name" => "Chef de Travaux"],
            ["code" => "AS1", "name" => "Assistant Premier Mandat"],
            ["code" => "AS2", "name" => "Assistant Deuxième Mandat"],
            ["code" => "PP", "name" => "Pratique Professionel"]
        ];
        return $this->render('contact/staff.html.twig', [
            'professors' => $professors,
            "codes" => $tableauCode,
            "active" => $code
        ]);
    }
}
