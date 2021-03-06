<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\ResUmfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Vest\ResponsaBundle\Entity\ResFrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
              
class FrageController extends BaseController
{ 
	public function OverviewAction($u_id){
		$leer = false;
		$uebergabe = array();
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
		$fragen = $repository->findBy(array('uId' => $u_id),array('prio' => 'ASC'));  //holt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.
		if($fragen == null){
			$leer = true;
			$u_name = '';
		}else{
				foreach($fragen as $frage){
					$tmp = array(
						"id" => $frage->getId(),
						"u_id" => $u_id,
						"frage" => $frage->getFrage(),
						"type" => $frage->getType(),
						"prio" => $frage->getPrio(),
						"auswertungsbereich" => $frage->getAuswertungsbereich()
					);
				$uebergabe[] = $tmp;
				}
					
		}
		$repository_umfrage = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
		$umfragen = $repository_umfrage->findoneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		if($umfragen){
					$u_name = $umfragen->getName();
		}else{
			$u_name = '';
		}
		
    return $this->renderTemplate('VestResponsaBundle:Default:frage_overview.html.twig', array(
			'data' => $uebergabe,
			'u_id' => $u_id,
			'leer' => $leer,
			'u_name' => $u_name,
			'title' => 'Fragen Übersicht',
			'umfrage' => $umfragen
		));
           
	}
	
	
	
	public function NewAction($u_id = 0, $id = 0){
				$frage = new ResFrage(); // legt eine neue Person an 
				if($id > 0){ // Wenn eine ID übergeben wurde, wird dir passende Umfrage aus der DB gehohlt, um sie zu bearbeiten.
					$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
					$frage = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        	$new = false;
				}else{
					$new = true;
				}
				$repo = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
				$umfrage = $repo->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
				$ab = array();
				if($umfrage){
					if($tmp = $umfrage->getAuswertungsbereich1()){
						$ab[$tmp] = $tmp;
					}
					if($tmp = $umfrage->getAuswertungsbereich2()){
						$ab[$tmp] = $tmp;
					}
					if($tmp = $umfrage->getAuswertungsbereich3()){
						$ab[$tmp] = $tmp;
					}
					if($tmp = $umfrage->getAuswertungsbereich4()){
						$ab[$tmp] = $tmp;
					}
					if($tmp = $umfrage->getAuswertungsbereich5()){
						$ab[$tmp] = $tmp;
					}
				}
				
        
				
				$form = $this->createFormBuilder($frage) // Formular wird auf Basis der Person erstellt   
            ->setAction($this->generateUrl('Responsa_frage_save',array('u_id' => $u_id,'id' => $id)))     //nimmt die URL aus der routing.yml 
            ->add('u_id', 'hidden', array('data'  => $u_id))
            ->add('frage', 'text')
            ->add('prio', 'number', array('required'  => false))
            ->add('auswertungsbereich', 'choice', array('choices'   =>$ab , 'required'  => false))
            ->add('type', 'choice', array('choices'   =>array('0' => 'Skalar 1-6', '1' => 'Freitext')))
            ->add('Speichern', 'submit')
            ->getForm();
            
				return $this->renderTemplate('VestResponsaBundle:Default:frage_form.html.twig', array(
						'form' => $form->createView(), 'new' => $new, 'title' => 'Neue Frage'
				));
	}
	
	public function SaveAction(Request $request, $u_id, $id){
				if($id > 0){ // Wenn eine ID übergeben wurde, wird dir passende Umfrage aus der DB gehohlt, um sie zu bearbeiten.
					$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResFrage');// Baut Doctrine auf
					$frage = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        }else{
					$frage = new ResFrage(); // legt eine neue Person an 
				}	
				
				$repo = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
				$umfrage = $repo->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
				$ab = array();
				if($tmp = $umfrage->getAuswertungsbereich1()){
					$ab[$tmp] = $tmp;
				}
				if($tmp = $umfrage->getAuswertungsbereich2()){
					$ab[$tmp] = $tmp;
				}
				if($tmp = $umfrage->getAuswertungsbereich3()){
					$ab[$tmp] = $tmp;
				}
				if($tmp = $umfrage->getAuswertungsbereich4()){
					$ab[$tmp] = $tmp;
				}
				if($tmp = $umfrage->getAuswertungsbereich5()){
					$ab[$tmp] = $tmp;
				}     
				
				$form = $this->createFormBuilder($frage) // Formular wird auf Basis der Person erstellt   
            ->setAction($this->generateUrl('Responsa_frage_save',array('u_id' => $u_id,'id' => $id)))     //nimmt die URL aus der routing.yml 
            ->add('u_id', 'hidden', array('data'  => $u_id))
            ->add('frage', 'text')
            ->add('prio', 'number', array('required'  => false))
            ->add('auswertungsbereich', 'choice', array('choices'   =>$ab , 'required'  => false, 'data' => $frage->getAuswertungsbereich()))
            ->add('type', 'choice', array('choices'   =>array('0' => 'Skalar 1-6', '1' => 'Freitext')))
            ->add('Speichern', 'submit')
            ->getForm();
        $form->handleRequest($request);  
				
				if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($frage);
          $em->flush();
				}
				
				return $this->redirect($this->generateUrl('Responsa_frage_overview',array('u_id' => $u_id)));
	}
	
	public function DeleteAction($f_id, $u_id){
				$em = $this->getDoctrine()->getManager();
				$query = $em->createQuery(
						"DELETE FROM VestResponsaBundle:ResFrage f 
						WHERE f.id =".$f_id
				);
				$result = $query->getResult();
				return $this->forward('VestResponsaBundle:frage:Overview', array('u_id' =>$u_id));
	
	}
	
}