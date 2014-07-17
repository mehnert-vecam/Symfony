<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\Resumfrageerzeuger; 
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
				$f_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 1));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($f_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setFFrage($frage_tmp);
				$frageliste->setFFId($f_id_tmp);
				$frageliste->setFAntwort($antwort_tmp);
				
				
				
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
				$s_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 0));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$s_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($s_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$s_f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frage_tmp = array();
				$f_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($f_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setSFrage($frage_tmp);
				$frageliste->setSFId($f_id_tmp);
				$frageliste->setSAntwort($antwort_tmp);
				
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id, 'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => $feld1))
					->add('feld2', 'hidden', array('data' => $feld2))
					->add('feld3', 'hidden', array('data' => $feld3))
					->add('feld4', 'hidden', array('data' => $feld4))
					->add('feld5', 'hidden', array('data' => $feld5));
					
					$form = $form->add('f_antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					$form = $form->add('f_f_id', 'collection', array('type'=> 'hidden'));
					$form = $form->add('s_antwort', 'collection', array('type'=> 'choice','options'=>array(
						'choices'=>array(
							1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 
						),'label' => false,
						'expanded' => true
					)));
					$form = $form->add('s_f_id', 'collection', array('type'=> 'hidden'));
					
					// Weiterlesen und passend einbauen: http://symfony.com/doc/current/reference/forms/types/collection.html
					
					
						
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
            
				return $this->renderTemplate('VestResponsaBundle:Default:view_form.html.twig', array(
					'form' => $form->createView(), 'type' => 'new', 'u_name' =>$u_name, 'fragen' => $frage_tmp, 'title' =>$u_name,
					'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5
				));
	}
	
	public function ErhaltenAction(Request $request, $u_id, $feld1, $feld2, $feld3, $feld4, $feld5){
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
				$f_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 1));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($f_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setFFrage($frage_tmp);
				$frageliste->setFFId($f_id_tmp);
				$frageliste->setFAntwort($antwort_tmp);
				
				
				
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
				$s_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 0));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$s_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($s_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$s_f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frage_tmp = array();
				$f_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($f_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setSFrage($frage_tmp);
				$frageliste->setSFId($f_id_tmp);
				$frageliste->setSAntwort($antwort_tmp);
				
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id, 'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => $feld1))
					->add('feld2', 'hidden', array('data' => $feld2))
					->add('feld3', 'hidden', array('data' => $feld3))
					->add('feld4', 'hidden', array('data' => $feld4))
					->add('feld5', 'hidden', array('data' => $feld5));
					
					$form = $form->add('f_antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					$form = $form->add('f_f_id', 'collection', array('type'=> 'hidden'));
					$form = $form->add('s_antwort', 'collection', array('type'=> 'choice','options'=>array(
						'choices'=>array(
							1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', 6 => '6', 
						),'label' => false,
						'expanded' => true
					)));
					$form = $form->add('s_f_id', 'collection', array('type'=> 'hidden'));
					
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
				
				$form->handleRequest($request); 
				if ($form->isValid()) {
					$count = 0;
					foreach($frageliste->getFAntwort() as $aw){
						$ant = new Resantwort();
						$ant->setAntwort($aw);
						$f_id = $f_f_id_tmp[$count];
						$ant->setFId($f_id);
						
						$repository_frage = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
						$frage = $repository_frage->findOneBy(array('id' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
						
						$ant->setAuswertungsbereich($frage->getAuswertungsbereich());
						$ant->setFType(1);
						
							$em = $this->getDoctrine()->getManager();
							$em->persist($ant);
							$em->flush();
					
						$count ++;
					}
					
					$count = 0;
					foreach($frageliste->getSAntwort() as $aw){
						$ant = new Resantwort();
						$ant->setAntwort($aw);
						$f_id = $s_f_id_tmp[$count];
						$ant->setFId($f_id);
						
						$repository_frage = $this->getDoctrine()->getRepository('VestResponsaBundle:Resfrage');// Baut Doctrine auf
						$frage = $repository_frage->findOneBy(array('id' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
						
						$ant->setAuswertungsbereich($frage->getAuswertungsbereich());
						$ant->setFType(0);
						
							$em = $this->getDoctrine()->getManager();
							$em->persist($ant);
							$em->flush();
					
						$count ++;
					}
					return $this->renderTemplate('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => true, 'title' =>$u_name
					));
				}	
					$errors = $form->getErrorsAsString();
					return $this->renderTemplate('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => false, 'errors' => $errors, 'title' =>$u_name
					));
	}
	
	public function GenerateAction(){
	
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:Resumfrage');// Baut Doctrine auf
		$umfragen = $repository->findBy(array());  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		$u_id = array();
		foreach($umfragen as $umfrage){
			$id = $umfrage->getId();
			$name = $umfrage->getName();
			$u_id[$id] = $name;
		}	
	
		$umfrageerzeuger = new resumfrageerzeuger();
		$form = $this->createFormBuilder($umfrageerzeuger) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_generate_erhalten'))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'choice', array('choices'   =>$u_id))
					->add('feld1', 'text')
					->add('feld2', 'text')
					->add('feld3', 'text')
					->add('feld4', 'text')
					->add('feld5', 'text');
											
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
	
    return $this->renderTemplate('VestResponsaBundle:Default:generate_overview.html.twig', array(
			'umfragen' => $umfragen, 
			'title' => 'Umfragen Erzeugen',
			'erhalten' => false,
			'form' => $form->createView()
		));
     
	}
	
		public function GenerateErhahltenAction(Request $request){
	
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:Resumfrage');// Baut Doctrine auf
		$umfragen = $repository->findBy(array());  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		$u_id = array();
		foreach($umfragen as $umfrage){
			$id = $umfrage->getId();
			$name = $umfrage->getName();
			$u_id[$id] = $name;
		}	
	
		$umfrageerzeuger = new resumfrageerzeuger();
		$form = $this->createFormBuilder($umfrageerzeuger) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_generate_erhalten'))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'choice', array('choices'   =>$u_id))
					->add('feld1', 'text')
					->add('feld2', 'text')
					->add('feld3', 'text')
					->add('feld4', 'text')
					->add('feld5', 'text');
											
				$form  = $form->add('Speichern', 'submit');
				$form  = $form->getForm();
	
			$form->handleRequest($request); 
			
			$u_id = $umfrageerzeuger->getUId();
			$feld1 = $umfrageerzeuger->getFeld1();
			$feld2 = $umfrageerzeuger->getFeld2();
			$feld3 = $umfrageerzeuger->getFeld3();
			$feld4 = $umfrageerzeuger->getFeld4();
			$feld5 = $umfrageerzeuger->getFeld5();
				
    return $this->renderTemplate('VestResponsaBundle:Default:generate_overview.html.twig', array(
			'umfragen' => $umfragen,
			'title' => 'Umfragen Übersicht',
			'erhalten' => true,
			'form' => $form->createView(),
			'u_id' => $u_id,
			'feld1' => $feld1,
			'feld2' => $feld2,
			'feld3' => $feld3,
			'feld4' => $feld4,
			'feld5' => $feld5
		));
     
	}
	
}