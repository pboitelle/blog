<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user', name: 'user_')]
class UserController extends AbstractController
{
    #[Route('/', name: 'index', methods : 'GET')]
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find(1);

        return $this->render('user/index.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/view', name: 'view', methods : 'GET')]
    public function view()
    {
        // return one user
    }

    #[Route('/create', name: 'create', methods : 'POST')]
    public function create()
    {
        // return creation user
    }

    #[Route('/update', name: 'update', methods : 'PUT')]
    public function update()
    {
        // return updating user
    }

    #[Route('/delete', name: 'delete', methods : 'DELETE')]
    public function delete()
    {
        // return deleted user
    }
}
