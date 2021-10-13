<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        /* public function homepage(Environment $twigEnvironment)
        // fun example of using the Twig service directly!
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
        */
        if ($direction === 'up') {
            $logger->info('voting up !');
            $currentVoteCount = rand(7,100);
        } else {
            $logger->info('voting down !');
            $currentVoteCount = rand(0,5);
        }
            return $this->Json(['votes' => $currentVoteCount]);
    }
}