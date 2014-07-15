<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\Resumfrage;     // Zeigt dem Controller, wo er die Entit�t findet (verwendet in Zeilte 17)
use Vest\ResponsaBundle\Entity\resfragenliste;
use Vest\ResponsaBundle\Entity\Resantwort;
use Vest\ResponsaBundle\Entity\Resfrage;     // Zeigt dem Controller, wo er die Entit�t findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen f�r Requests findet.
              
class ViewController extends BaseController
{ 
	public function ShowAction($u_id, $feld1, $feld2, $feld3, $feld4, $feld5){
	
		$umfrage = new Resumfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestResponsaBundle:Resumfrage');// Baut Doctrine auf
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				$u_name = $umfrage->getName();
				
				$frageliste = new resfragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$frageliste->setFeld1($feld1);
				$frageliste->setFeld2($feld2);
				$frageliste->setFeld3($feld3);
				$frageliste->setFeld4($feld4);
				$frageliste->setFeld5($feld5);
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
				$fragen = $repository_fragen->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
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
					
					$form = $form->add('antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					$form = $form->add('f_id', 'collection', array('type'=> 'hidden'));
					
					// Weiterlesen und passend einbauen: http://symfony.com/doc/current/reference/forms/types/collection.html
					
					
						
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
            
				return $this->renderTemplate('VestResponsaBundle:Default:view_form.html.twig', array(
					'form' => $form->createView(), 'type' => 'new', 'u_name' =>$u_name, 'fragen' => $frage_tmp
				));
	}
	
	public function ErhaltenAction(Request $request, $u_id){
			$umfrage = new Resumfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestResponsaBundle:Resumfrage');// Baut Doctrine auf
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				$u_name = $umfrage->getName();
				
				$frageliste = new resfragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
				$fragen = $repository_fragen->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_id_tmp[]= $frage->getId();
				}
				$frageliste->setFrage($frage_tmp);
				$frageliste->setFId($f_id_tmp);
				
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => ''))
					->add('feld2', 'hidden', array('data' => ''))
					->add('feld3', 'hidden', array('data' => ''))
					->add('feld4', 'hidden', array('data' => ''))
					->add('feld5', 'hidden', array('data' => ''));
					
					$form = $form->add('antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					$form = $form->add('f_id', 'collection', array('type'=> 'hidden'));
					
					
						
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
				
				$form->handleRequest($request); 
				if ($form->isValid()) {
					$count = 0;
					foreach($frageliste.antwort as $aw){
						$ant = new Resantwort();
						$ant->setAntwort($aw);
						$ant->setFId($f_id_tmp[$count]);
						
						$ant->setAuswertungsbereich('noch nicht eingebaut');
						$ant->setFType('noch nicht eingebaut');
						
							$em = $this->getDoctrine()->getManager();
							$em->persist($ant);
							$em->flush();
					
						$count ++;
					}
					return $this->renderTemplate('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => true
					));
				}	
					$errors = $form->getErrorsAsString();
					return $this->renderTemplate('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => false, 'errors' => $errors
					));
				
	
	}
	
}