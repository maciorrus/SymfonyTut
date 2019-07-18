<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;

class PostController extends AbstractController
{
    /**
     * @Route("/posts", name="posts")
     */
    public function index()
    {

        return $this->render('post/index.html.twig', [
            'posts' => $this->getDoctrine()->getRepository(Post::class)->findAll(),
        ]);
    }
}
