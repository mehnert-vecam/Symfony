<?php

namespace Vest\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Vest\SymfonyBundle\Entity\AddrStatus;    
use Symfony\Component\HttpFoundation\Request;

class FormularController extends Controller
{
    public function indexAction($id='')
    {
        // create a task and give it some dummy data for this example
        $task = new AddrStatus();
        
        $repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrStatus');// Baut Doctrine auf 
        $task = $repository->findOneBy(array('status_id' => '2'));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        //$task->setStatusId(2);
        //$task->setStatusObjekt('neu');

        $form = $this->createFormBuilder($task)    
            ->setAction($this->generateUrl('Formular-save'))     //nimmt die URL aus der routing.yml
            ->add('status_id', 'text')
            ->add('status_objekt', 'text')
            //->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('VestSymfonyBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    

    public function saveAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $task = new AddrStatus(); 
        $repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrStatus');   
        $task = $repository->findOneBy(array('status_id' => '2'));      
    
        $form = $this->createFormBuilder($task)   
            ->setAction($this->generateUrl('Formular-save'))
            ->add('status_id', 'text')
            ->add('status_objekt', 'text')
            //->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          //$em->persist($task);
          $em->flush();
    
            return $this->redirect($this->generateUrl('task_success', array('ergebnis' => 'Erfolgreich gespeichert')));
        }else{
            return $this->redirect($this->generateUrl('task_success', array('ergebnis' => 'Formmular war nicht valide')));
        }
        
    
    }   
    public function ErfolgAction($ergebnis)
    {
        

        return $this->render('VestSymfonyBundle:Default:erfolg.html.twig', array('ergebnis' => $ergebnis)); 
    } 
    public function FailAction($ergebnis)
    {
        

        return $this->render('VestSymfonyBundle:Default:fail.html.twig', array('ergebnis' => $ergebnis)); 
    }
      
}


