<?php

namespace App\Controller;

use App\Entity\MicroPost;
use App\Repository\MicroPostRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MicroPostController extends AbstractController
{
    #[Route('/micro-post', name: 'app_micro_post')]
    public function index(MicroPostRepository $mpr): Response
    {
        // dd($mpr->findBy(['title' => 'Welcome to Germany 2!']));

        // $mp = new MicroPost();
        // $mp->setTitle('Test');
        // $mp->setText('Test text');
        // $mp->setCreated(new DateTime());

        $mp = $mpr->find(7);
        $mp->setTitle('Welcome');

        $mpr->save($mp, true);

        return $this->render('micro_post/index.html.twig', [
            'controller_name' => 'MicroPostController',
        ]);
    }

    #[Route('/micro-post/{id}', name: 'app_micro_post_show')]
    public function showOne(MicroPost $mp): Response
    {
        // dd($mpr->findBy(['title' => 'Welcome to Germany 2!']));

        // $mp = new MicroPost();
        // $mp->setTitle('Test');
        // $mp->setText('Test text');
        // $mp->setCreated(new DateTime());

        $mp = dd($mp);

    }
}
