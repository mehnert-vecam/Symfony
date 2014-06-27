<?php namespace Vest\SymfonyBundle\Controller;

use Vest\SymfonyBundle\Entity\Resumfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Vest\SymfonyBundle\Entity\resfragenliste; 
use Vest\SymfonyBundle\Entity\Resfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
              
class ViewController extends BaseController
{ 
	public function ShowAction($u_id, $feld1, $feld2, $feld3, $feld4, $feld5){
	
		$umfrage = new Resumfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resumfrage');// Baut Doctrine auf 
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				$u_name = $umfrage->getName();
				
				$frageliste = new resfragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$frageliste->setFeld1($umfrage->getFeld1());
				$frageliste->setFeld2($umfrage->getFeld2());
				$frageliste->setFeld3($umfrage->getFeld3());
				$frageliste->setFeld4($umfrage->getFeld4());
				$frageliste->setFeld5($umfrage->getFeld5());
				$repository_fragen = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resfrage');// Baut Doctrine auf 
				$fragen = $repository_fragen->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($fragen as $frage){
					$frage_tmp[$frage->getId()] = $frage->getFrage();
					$f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setFrage($frage_tmp);
				$frageliste->setFId($f_id_tmp);
				$frageliste->setAntwort($antwort_tmp);
				
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => $feld1))
					->add('feld2', 'hidden', array('data' => $feld2))
					->add('feld3', 'hidden', array('data' => $feld3))
					->add('feld4', 'hidden', array('data' => $feld4))
					->add('feld5', 'hidden', array('data' => $feld5));
					
					$form = $form->add('antwort', 'collection', array('type'=> 'email','options'=>array()));
					$form = $form->add('f_id', 'collection', array('type'=> 'hidden'));
					
					// Weiterlesen und passend einbauen: http://symfony.com/doc/current/reference/forms/types/collection.html
					
					
						
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
            
				return $this->render('VestSymfonyBundle:Default:view_form.html.twig', array(
					'form' => $form->createView(), 'type' => 'new', 'u_name' =>$u_name
				));
	}
	
}