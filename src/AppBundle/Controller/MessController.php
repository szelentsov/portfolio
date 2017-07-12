<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MessController extends Controller {
/**
* @Route("/mess",name="mess")
*/
    
   public function mess() {
       return $this->render('mess.html.twig');
   }
}
