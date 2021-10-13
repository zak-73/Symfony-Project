<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
   public function homepage()
   {
       return $this->render('question/homepage.html.twig');
   }

    /**
     * @Route("/question/{slug}", name="app_question_show")
     */
   public function show($slug)
   {
       $answers = [
           'Make sure your cat is sitting purrrfectly still 🤣',
           'Honestly, I like furry shoes better than MY cat',
           'Maybe... try saying the spell backwards?',
       ];

       return $this->render('question/show.html.twig', [
           'question' => ucwords(str_replace('-',' ',$slug)),
           'answers' => $answers
       ]);

   }

    /**
     * @Route("/Tableau-des-informations-utilisateur", name="app_show_test")
     */

   public function showtest()
   {
       return $this->render('question/showtest.html.twig');
   }


}
