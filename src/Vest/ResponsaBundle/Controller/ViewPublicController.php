<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\ResUmfrageerzeuger; 
use Vest\ResponsaBundle\Entity\ResUmfrage;     // Zeigt dem Controller, wo er die Entit?t findet (verwendet in Zeilte 17)
use Vest\ResponsaBundle\Entity\ResFragenliste;
use Vest\ResponsaBundle\Entity\ResAntwort;
use Vest\ResponsaBundle\Entity\ResFrage;     // Zeigt dem Controller, wo er die Entit?t findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen f?r Requests findet.
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
              
class ViewPublicController extends Controller
{ 
	public function ShowAction($u_id, $feld1, $feld2, $feld3, $feld4, $feld5){
        $session = $this->get("session");
				if($session->get('id') > 0){
					$eingelogt = true;
				}else{
					$eingelogt = false;
				}
				$umfrage = new ResUmfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				$u_name = $umfrage->getName();
				$token = $session->get('token');
				//print_r($token.'--');
				if($token == ''){
					$tmp = time();
					$tmp = $tmp.$u_id;
					$token = md5($tmp);
					$session->set('token',$token);
				}else{
					$repository_antwort = $this->getDoctrine()->getRepository('VestResponsaBundle:ResAntwort');// Baut Doctrine auf
					$antwort = $repository_antwort->findOneBy(array('token' => $token));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
					if($antwort){
						return $this->render('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
							'eingetragen' => true, 'title' =>$u_name, 'umfrage' => $umfrage, 'eingelogt' => $eingelogt
						));
					}
					
				};
	
		
				$einleitungstext = $umfrage->getEinleitungstext();
				$frageliste = new ResFragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$frageliste->setFeld1($feld1);
				$frageliste->setFeld2($feld2);
				$frageliste->setFeld3($feld3);
				$frageliste->setFeld4($feld4);
				$frageliste->setFeld5($feld5);
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
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
				
				
				
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
				$s_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 0));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$s_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($s_fragen as $s_frage){
					$frage_tmp[] = $s_frage->getFrage();
					$s_f_id_tmp[]= $s_frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setSFrage($frage_tmp);
				$frageliste->setSFId($s_f_id_tmp);
				$frageliste->setSAntwort($antwort_tmp);
				
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id, 'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5, 'token' => $token)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => $feld1))
					->add('feld2', 'hidden', array('data' => $feld2))
					->add('feld3', 'hidden', array('data' => $feld3))
					->add('feld4', 'hidden', array('data' => $feld4))
					->add('feld5', 'hidden', array('data' => $feld5));
					
					$form = $form->add('f_antwort', 'collection', array('type'=> 'textarea','options'=>array('label' => false)));
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
            
				return $this->render('VestResponsaBundle:Default:view_public_form.html.twig', array(
					'form' => $form->createView(), 'type' => 'new', 'u_name' =>$u_name, 'fragen' => $frage_tmp, 'title' =>$u_name,
					'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5,
					'einleitungstext' => $einleitungstext, 'eingelogt' => $eingelogt
				));
	}
	
	
	public function ErhaltenAction(Request $request, $u_id, $feld1, $feld2, $feld3, $feld4, $feld5, $token){
				$em = $this->getDoctrine()->getManager();
        $session = $this->get("session");
				if($session->get('id') > 0){
					$eingelogt = true;
				}else{
					$eingelogt = false;
				}
				$umfrage = new ResUmfrage(); // legt eine neue Person an 
				$repository_umfrage = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
				$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
	
				$u_name = $umfrage->getName();
				$token = $session->get('token');
				if($token == ''){
					$token = md5(time());
					$session->set('token',$token);
				}else{
					$repository_antwort = $this->getDoctrine()->getRepository('VestResponsaBundle:ResAntwort');// Baut Doctrine auf
					$antwort = $repository_antwort->findOneBy(array('token' => $token));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
					if($antwort){
						return $this->render('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
							'eingetragen' => true, 'title' =>$u_name
						));
					}
					
				};
				
				$query = $em->createQuery(
						"UPDATE VestResponsaBundle:ResUmfrage u 
						SET u.teilnehmerzahl = u.teilnehmerzahl+1
						WHERE u.id =".$u_id
				);
				$result = $query->getResult();
				
				$frageliste = new ResFragenliste();
				$frageliste->setU_Id($u_id);
				$frageliste->setU_Name($umfrage->getName());
				$frageliste->setFeld1($feld1);
				$frageliste->setFeld2($feld2);
				$frageliste->setFeld3($feld3);
				$frageliste->setFeld4($feld4);
				$frageliste->setFeld5($feld5);
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
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
				
				
				
				$repository_fragen = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
				$s_fragen = $repository_fragen->findBy(array('uId' => $u_id, 'type' => 0));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
     				
				$frage_tmp = array();
				$s_f_id_tmp = array();
				$antwort_tmp = array();
				foreach($s_fragen as $frage){
					$frage_tmp[] = $frage->getFrage();
					$s_f_id_tmp[]= $frage->getId();
					$antwort_tmp[] = '';
				}
				$frageliste->setSFrage($frage_tmp);
				$frageliste->setSFId($s_f_id_tmp);
				$frageliste->setSAntwort($antwort_tmp);
				
				
				$form = $this->createFormBuilder($frageliste) // Formular wird auf Basis der Person erstellt   
					->setAction($this->generateUrl('Responsa_view_erhalten',array('u_id' => $u_id, 'feld1' => $feld1,'feld2' => $feld2,'feld3' => $feld3,'feld4' => $feld4,'feld5' => $feld5, 'token' => $token)))     //nimmt die URL aus der routing.yml 
					->add('u_id', 'hidden', array('data' => $u_id))
					->add('feld1', 'hidden', array('data' => $feld1))
					->add('feld2', 'hidden', array('data' => $feld2))
					->add('feld3', 'hidden', array('data' => $feld3))
					->add('feld4', 'hidden', array('data' => $feld4))
					->add('feld5', 'hidden', array('data' => $feld5));
					
					$form = $form->add('f_antwort', 'collection', array('type'=> 'textarea','options'=>array('label' => false)));
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
						$ant = new ResAntwort();
						$ant->setAntwort($aw);
						$f_id = $f_id_tmp[$count];
						$ant->setFId($f_id);
						
						$repository_frage = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
						$frage = $repository_frage->findOneBy(array('id' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
						
						$ant->setAuswertungsbereich($frage->getAuswertungsbereich());
						$ant->setFType(1);
						$ant->setDatum();
						$ant->setToken($token);
						$ant->setUId($u_id);
						if($feld1 != ''){
							$ant->setFeld1($feld1);
						}
						if($feld2 != ''){
							$ant->setFeld2($feld2);
						}
						if($feld3 != ''){
							$ant->setFeld3($feld3);
						}
						if($feld4 != ''){
							$ant->setFeld4($feld4);
						}
						if($feld5 != ''){
							$ant->setFeld5($feld5);
						}
					print_r($ant);
						
							$em = $this->getDoctrine()->getManager();
							$em->persist($ant);
							$em->flush();
					
						$count ++;
					}
					$count = 0;
					foreach($frageliste->getSAntwort() as $aw){
						$ant = new ResAntwort();
						$ant->setAntwort($aw);
						$f_id = $s_f_id_tmp[$count];
						$ant->setFId($f_id);
						
						$repository_frage = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
						$frage = $repository_frage->findOneBy(array('id' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
						
						$ant->setAuswertungsbereich($frage->getAuswertungsbereich());
						$ant->setFType(0);
						$ant->setDatum();
						$ant->setToken($token);
						$ant->setUId($u_id);
						if($feld1 != ''){
							$ant->setFeld1($feld1);
						}
						if($feld2 != ''){
							$ant->setFeld2($feld2);
						}
						if($feld3 != ''){
							$ant->setFeld3($feld3);
						}
						if($feld4 != ''){
							$ant->setFeld4($feld4);
						}
						if($feld5 != ''){
							$ant->setFeld5($feld5);
						}
					print_r($ant);
						
							$em = $this->getDoctrine()->getManager();
							$em->persist($ant);
							$em->flush();
					
						$count ++;
					}
					return $this->render('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => true, 'title' =>$u_name, 'umfrage' => $umfrage, 'eingelogt' => $eingelogt
					));
				}	
					$errors = $form->getErrorsAsString();
					return $this->render('VestResponsaBundle:Default:view_eingetragen.html.twig', array(
						'eingetragen' => false, 'errors' => $errors, 'title' =>$u_name, 'umfrage' => $umfrage, 'eingelogt' => $eingelogt
					));
	}
	
	
}