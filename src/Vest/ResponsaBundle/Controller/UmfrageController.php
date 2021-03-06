<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\ResUmfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
  
class UmfrageController extends BaseController
{ 
	public function OverviewAction(){
        $session = $this->get("session");
		$uebergabe = array();
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
		$umfragen = $repository->findBy(array('kontaktId' =>$session->get('kontakt_id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		/*
		foreach($umfragen as $umfrage){
			$tmp = array(
				"name" => $umfrage->getName(),
				"feld1" => $umfrage->getFeld1(),
				"feld2" => $umfrage->getFeld2(),
				"feld3" => $umfrage->getFeld3(),
				"feld4" => $umfrage->getFeld4(),
				"feld5" => $umfrage->getFeld5(),
				"auswertungsbereich1" => $umfrage->getAuswertungsbereich1(),
				"auswertungsbereich2" => $umfrage->getAuswertungsbereich2(),
				"auswertungsbereich3" => $umfrage->getAuswertungsbereich3(),
				"auswertungsbereich4" => $umfrage->getAuswertungsbereich4(),
				"auswertungsbereich5" => $umfrage->getAuswertungsbereich5(),
				"id" => $umfrage->getId()
			);
			$uebergabe[] = $tmp;
		}
		*/
				$fragen_vorhanden = array();
				foreach($umfragen as $umfrage){
						$fragen_vorhanden[$umfrage->getId()] = false;
				;}
			
				$fragen_zahl = array();
				$em = $this->getDoctrine()->getManager();
				$query = $em->createQuery("SELECT f.id,COUNT(f.id) FROM VestResponsaBundle:ResFrage f GROUP BY f.uId");
				$result = $query->getResult();
				if(sizeof($result) >0){
					foreach($result as $row){
						$fragen_zahl[$row['id']] = $row[1];
						$fragen_vorhanden[$row['id']] = true;
					}
				}
				
    return $this->renderTemplate('VestResponsaBundle:Default:umfrage_overview.html.twig', array(
			'data' => $umfragen, 
			'title' => 'Umfragen Übersicht',
			'fragen_vorhanden' => $fragen_vorhanden,
			'fragen_zahl' => $fragen_zahl
		));
           
	}
	public function NewAction($id = 0){
				$umfrage = new ResUmfrage(); 
				if($id > 0){ // Wenn eine ID übergeben wurde, wird dir passende Umfrage aus der DB gehohlt, um sie zu bearbeiten.
					$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
					$umfrage = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
					$new = false;
				}else{
					$new = true;
				}
				
				$form = $this->createFormBuilder($umfrage)
						->setAction($this->generateUrl('Responsa_save',array('id' => $id)))     //nimmt die URL aus der routing.yml 
            ->add('name', 'text')
            ->add('feld1', 'text', array('required'  => false))
            ->add('feld2', 'text', array('required'  => false))
            ->add('feld3', 'text', array('required'  => false))
            ->add('feld4', 'text', array('required'  => false))
            ->add('feld5', 'text', array('required'  => false))
            ->add('auswertungsbereich1', 'text', array('required'  => false))
            ->add('auswertungsbereich2', 'text', array('required'  => false))
            ->add('auswertungsbereich3', 'text', array('required'  => false))
            ->add('auswertungsbereich4', 'text', array('required'  => false))
            ->add('auswertungsbereich5', 'text', array('required'  => false))
            ->add('einleitungstext', 'textarea', array('required'  => false))
            ->add('danketext', 'textarea', array('required'  => false))
            ->add('Speichern', 'submit');
            $form  = $form ->getForm();
            
				return $this->renderTemplate('VestResponsaBundle:Default:umfrage_form.html.twig', array(
						'form' => $form->createView(), 'new' => $new, 'title' => 'Neue Umfrage'
				));
	}
	
	public function SaveAction(Request $request, $id){
        $session = $this->get("session");
				
				if($id > 0){ // Wenn eine ID übergeben wurde, wird dir passende Umfrage aus der DB gehohlt, um sie zu bearbeiten.
					$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:ResUmfrage');// Baut Doctrine auf
					$umfrage = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        }else{
					$umfrage = new ResUmfrage(); // 
				}	     
				
				$form = $this->createFormBuilder($umfrage) 
            ->setAction($this->generateUrl('Responsa_save',array('id' => $id)))     //nimmt die URL aus der routing.yml 
            ->add('name', 'text')
            ->add('feld1', 'text', array('required'  => false))
            ->add('feld2', 'text', array('required'  => false))
            ->add('feld3', 'text', array('required'  => false))
            ->add('feld4', 'text', array('required'  => false))
            ->add('feld5', 'text', array('required'  => false))
            ->add('auswertungsbereich1', 'text', array('required'  => false))
            ->add('auswertungsbereich2', 'text', array('required'  => false))
            ->add('auswertungsbereich3', 'text', array('required'  => false))
            ->add('auswertungsbereich4', 'text', array('required'  => false))
            ->add('auswertungsbereich5', 'text', array('required'  => false))
            ->add('einleitungstext', 'textarea', array('required'  => false))
            ->add('danketext', 'textarea', array('required'  => false))
            ->add('Speichern', 'submit')
            ->getForm();
        $form->handleRequest($request);  
				$umfrage->setKontaktID($session->get('kontakt_id'));
				$umfrage->setTeilnehmerzahl(0);
				
				if ($form->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($umfrage);
          $em->flush();
				}
				if($id > 0){
					return $this->forward('VestResponsaBundle:Frage:Overview', array('u_id' =>$id));
				}else{
					return $this->forward('VestResponsaBundle:Umfrage:Overview', array());
				}
	}
	
	
	public function DeleteAction($u_id){
				$em = $this->getDoctrine()->getManager();
				$query = $em->createQuery(
						"DELETE FROM VestResponsaBundle:ResUmfrage u 
						WHERE u.id =".$u_id
				);
				$result = $query->getResult();
				$query = $em->createQuery(
						"DELETE FROM VestResponsaBundle:ResFrage f 
						WHERE f.u_id =".$u_id
				);
				$result = $query->getResult();
				return $this->forward('VestResponsaBundle:Umfrage:Overview', array());
	
	}
	
}