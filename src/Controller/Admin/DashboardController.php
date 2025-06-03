<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Attribute\AdminDashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Professor;
use App\Entity\Publication;
use App\Entity\Article;
use App\Entity\StudyProgrammes;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[AdminDashboard(routePath: '/admin', routeName: 'admin')]
class DashboardController extends AbstractDashboardController
{
    public function index(): Response
    {
        if(!$this->getUser()){
            return $this->redirectToRoute('app_admin_login');
        }
        return $this->render('dashboard/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Dsaeuniele');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Professeurs', 'fas fa-users-gear', Professor::class );
        yield MenuItem::linkToCrud('Publications', 'fa-brands fa-squarespace', Publication::class );
        yield MenuItem::linkToCrud('Acutalités', 'fas fa-list', Article::class );
        yield MenuItem::linkToCrud('Programmes', 'fas fa-book-open', StudyProgrammes::class );
    }

    #[Route('/login', name: 'app_admin_login')]
    public function loginPage(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('@EasyAdmin/page/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername,
            'translation_domain' => 'admin',
            'page_title' => 'CPANEL',
            'username_label' => 'Utilisateur',
            'password_label' => 'Mot de passe',
            'forgot_password_enabled' => false,
        ]);
    }

    #[Route('/logout', name: 'app_admin_logout')]
    public function app_admin_logout(AuthenticationUtils $authenticationUtils){
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('@EasyAdmin/page/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername,
            'translation_domain' => 'admin',
            'page_title' => 'CPANEL',
            'username_label' => 'Utilisateur',
            'password_label' => 'Mot de passe',
            'forgot_password_enabled' => false,
        ]);
    }
}
