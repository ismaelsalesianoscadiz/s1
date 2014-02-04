<?php

namespace Acme\DemoBundle\Controller;
use Acme\DemoBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\DemoBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WelcomeController extends Controller
{
    /**
     * @Route("/", name="_demo")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
 public function ejemploAction()
    {
        // crea una task y le asigna algunos datos ficticios para este ejemplo

        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->getForm();
 
 
			
			 return $this->render('AcmeDemoBundle:Welcome:examples.html.twig', array(
            'form' => $form->createView()));
                
     /*
			 return $this->render('AcmeWelcomeBundle:index.html.twig');
      * 
      */
    }

    
    

    /**
     * @Route("/contact", name="_demo_contact")
     * @Template()
     */
   
}
