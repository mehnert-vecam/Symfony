<?php namespace Vest\SymfonyBundle\Controller;

use Vest\SymfonyBundle\Entity\Resumfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Vest\SymfonyBundle\Entity\resfragenliste; 
use Vest\SymfonyBundle\Entity\Resantwort; 
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
				$frageliste->setFeld1($feld1);
				$frageliste->setFeld2($feld2);
				$frageliste->setFeld3($feld3);
				$frageliste->setFeld4($feld4);
				$frageliste->setFeld5($feld5);
				$repository_fragen = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resfrage');// Baut Doctrine auf 
				$fragen = $repository_fragen->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				
				$frage_tmp = array();
				$f_id_tmp = array();
				$antwort_tmp = array();
				foreach($fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '0';
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
					//$form = $form->add('antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					
					//$form = $form->add('antwort', 'collection', array('allow_add' => true));
					$f_id_tmp = array();
					$ab_tmp = array();
					
					$count = 1;
					foreach($fragen as $frage){
						
							if($frage->getType() ==0 ){
								$form = $form ->add('antwort'.$count, 'choice', array(
									'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '4' => '4', '5' => '5', '6' => '6' ),
									'expanded' => true,
									'label' =>$frage->getFrage()
								));
							}else{
								$form = $form ->add('antwort'.$count, 'text', array('label' =>$frage->getFrage()));
							}
							
							$f_id_tmp[]= $frage->getId();
							$ab_tmp[]= $frage->getAuswertungsbereich();
							$count++;
						}
						$frageliste->setFId($f_id_tmp);
						$frageliste->setAb($f_id_tmp);
					
				
					$form = $form->add('f_id', 'collection', array('type'=> 'hidden'));
					$form = $form->add('ab', 'collection', array('type'=> 'hidden'));
					$form  = $form->add('Speichern', 'submit');

				$form  = $form->getForm();
            
				return $this->render('VestSymfonyBundle:Default:view_form.html.twig', array(
					'form' => $form->createView(), 'type' => 'new', 'u_name' =>$u_name
				));
	}
	
	public function ErhaltenAction(Request $request, $u_id){
			$umfrage = new Resumfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resumfrage');// Baut Doctrine auf 
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				$u_name = $umfrage->getName();
				
				$frageliste = new resfragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$repository_fragen = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resfrage');// Baut Doctrine auf 
				$fragen = $repository_fragen->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     	
			
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => ''))
					->add('feld2', 'hidden', array('data' => ''))
					->add('feld3', 'hidden', array('data' => ''))
					->add('feld4', 'hidden', array('data' => ''))
					->add('feld5', 'hidden', array('data' => ''));
					//$form = $form->add('antwort', 'collection', array('type'=> 'text','options'=>array('label' => false)));
					
					$form = $form->add('antwort', 'collection', array('allow_add' => true));
					$test = $form->has('antwort');
					$f_id_tmp = array();
					$ab_tmp = array();
					$type_tmp  = array();
					$count = 1;
					foreach($fragen as $frage){
						
							if($frage->getType() ==0 ){
								$form = $form ->add('antwort'.$count, 'choice', array(
									'choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '4' => '4', '5' => '5', '6' => '6' ),
									'expanded' => true,
									'label' =>$frage->getFrage()
								));
							}else{
								$form = $form ->add('antwort'.$count, 'text', array('label' =>$frage->getFrage()));
							}
							
							$f_id_tmp[]= $frage->getId();
							$ab_tmp[]= $frage->getAuswertungsbereich();
							$type_tmp[] = $frage->getType();
							$count++;
						}
						$frageliste->setFId($f_id_tmp);
						$frageliste->setAb($f_id_tmp);
					
				
					$form = $form->add('f_id', 'collection', array('type'=> 'hidden'));
					$form = $form->add('ab', 'collection', array('type'=> 'hidden'));
					$form  = $form->add('Speichern', 'submit');

				$form  = $form->getForm();
				
				$form->handleRequest($request); 
				if ($form->isValid()) {
					for($i =1; $i <= sizeof($frageliste->getFId());$i++){
						$name = 'antwort'.$i;
						$ant = $form->get($name);
						$aw = new Resantwort();
						$aw->setFId($f_id_tmp[$i-1]);
						$aw->setAntwort($ant->getDATA());
						$aw->setAuswertungsbereich($ab_tmp[$i-1]);
						$aw->setFType($type_tmp[$i-1]);
							$em = $this->getDoctrine()->getManager();
							$em->persist($aw);
							$em->flush();
					}
				/*
					$count = 0;
					foreach($frageliste->getAntwort() as $aw){
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
					
					*/
					
					return $this->render('VestSymfonyBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => true
					));
				}	
					$errors = $form->getErrorsAsString();
					return $this->render('VestSymfonyBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => false, 'errors' => $errors
					));
				
	
	}
	
}