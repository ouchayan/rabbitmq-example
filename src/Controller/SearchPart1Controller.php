<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\ElasticaBundle\Finder\TransformedFinder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;




class SearchPart1Controller extends AbstractController
{
    /**
     * @Route("/search/part1", name="search_part1")
     */
    public function search(Request $request, SessionInterface $session, TransformedFinder $articlesFinder): Response
    {


        $results = $articlesFinder->find('hamid');

        foreach ($results as $key => $value) {
        	echo $value->getId();
        }

        //var_dump($results);
        die;
        
    }
}
