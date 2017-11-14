<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}")
     */
    public function numberAction($max=100)
    {
        $number = mt_rand(0, $max);

        return $this->render('lucky/number.html.twig', array('number' => $number));
    }
}