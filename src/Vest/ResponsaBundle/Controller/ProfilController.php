<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\ResUmfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
use Symfony\Component\HttpFoundation\Session\Session;
  
class ProfilController extends BaseController
{ 
	public function OverviewAction(){
		$session = $this->get("session");
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrPersonen');// Baut Doctrine auf
		$person = $repository->findBy(array('personId' =>$session->get('id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
	
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrKontakte');// Baut Doctrine auf
		$kontakt = $repository->findBy(array('kontaktId' =>$session->get('kontakt_id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		
			$form = $this->createFormBuilder($person)
						->setAction($this->generateUrl('Profil_save',array()))    
            ->add('altes_passwort', 'password')
            ->add('neues_passwort', 'password')
            ->add('neues_passwort2', 'password')
            ->add('Ändern', 'submit');
			$form  = $form ->getForm();
      
      

		return $this->renderTemplate('VestResponsaBundle:Default:profil_overview.html.twig', array(
			'title' => 'Profil',
			'changed' => false,
			'person' => $person[0],
			'kontakt' => $kontakt[0],
			'form' => $form->createView()
		));
	}
	
	public function SaveAction(Request $request){
		$session = $this->get("session");
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrPersonen');// Baut Doctrine auf
		$person = $repository->findBy(array('personId' =>$session->get('id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
	
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrKontakte');// Baut Doctrine auf
		$kontakt = $repository->findBy(array('kontaktId' =>$session->get('kontakt_id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		
			$form = $this->createFormBuilder($person)
						->setAction($this->generateUrl('Profil_save',array()))    
            ->add('altes_passwort', 'password')
            ->add('neues_passwort', 'password')
            ->add('neues_passwort2', 'password')
            ->add('Ändern', 'submit');
			$form  = $form ->getForm();
      $form->handleRequest($request); 
			$altes_passwort = $form->get('altes_passwort')->getData();
			$neues_passwort = $form->get('neues_passwort')->getData();
			$neues_passwort2 = $form->get('neues_passwort2')->getData();
			
			$erfolg = 'danger';
			if($altes_passwort == $person[0]->getPersonPass() ){
				if($neues_passwort != $altes_passwort){
					if($neues_passwort == $neues_passwort2){
						$person[0]->setPersonPass($neues_passwort);
						$em = $this->getDoctrine()->getManager();
						$em->persist($person[0]);
						$em->flush();
						$result = 'Passwort erfolgreich geändert';
						$erfolg = 'success';
					}else{
						$result = 'Die beiden Passwörter stimmen nicht überein.';
					}
				}else{
					$result = 'Altes und neues Passwort sind gleich.';
				}
			}else{
				$result = 'Das alte Passwort war nicht richtig.';
			}
			
		return $this->renderTemplate('VestResponsaBundle:Default:profil_overview.html.twig', array(
			'title' => 'Profil',
			'changed' => true,
			'person' => $person[0],
			'kontakt' => $kontakt[0],
			'form' => $form->createView(),
			'result' => $result,
			'erfolg' => $erfolg 
		));
		
	}
	
}