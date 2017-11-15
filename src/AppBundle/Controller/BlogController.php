<?php
/**
 * Created by PhpStorm.
 * User: peterojo
 * Date: 11/12/17
 * Time: 8:13 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog_show")
     */
    public function showAction()
    {
        return new Response("This is a list of all articles");
    }
}