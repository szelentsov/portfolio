<?php
// src/AppBundle/Controller/homeController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/")
    */

    public function home() {
        //$posts = $this->getDoctrine()->getRepository('AppBundle:Posts')->findAll();
        
        return $this->render('home.html.twig');
    }

}
//, array('posts' => $posts)
