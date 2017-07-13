<?php
// src/AppBundle/Controller/homeController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Form;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HomeController extends Controller {
/**
* @Route("/")
*/

    public function home(Request $request) {
        $newForm = new Form();
        $config = $this->getDoctrine()->getRepository('AppBundle:Config')->findAll();
        $posts = $this->getDoctrine()->getRepository('AppBundle:Posts')->findAll();//получаем все записи из бд для постов
        
        //форма обратной связи
        $form = $this->createFormBuilder($newForm)
            ->add('name',TextType::class,array('label'=>false,'attr' => array('class' => 'form-control','placeholder' => 'Name')))
            ->add('email',EmailType::class,array('label'=>false,'attr' => array('class' => 'form-control','placeholder' => 'Email')))
            ->add('subject',TextType::class,array('label'=>false,'attr' => array('class' => 'form-control','placeholder' => 'Subject')))
            ->add('message',TextareaType::class,array('label'=>false,'attr' => array('class' => 'form-control','rows' => '7','placeholder' => 'Message')))
            ->add('save', SubmitType::class, array('label' => 'Submit Now','attr' => array('class' => 'btn btn-default submite-form')))
            ->getForm();
        //
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            $newForm = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($newForm);
            $em->flush();
        }
        
        return $this->render('home.html.twig', array('posts' => $posts,'config' => $config,'form' => $form->createView()));
    }

}


