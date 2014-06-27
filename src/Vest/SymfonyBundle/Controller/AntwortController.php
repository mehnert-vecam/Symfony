<?php namespace Vest\SymfonyBundle\Controller;

use Vest\SymfonyBundle\Entity\Resumfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Vest\SymfonyBundle\Entity\Resfrage;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
              
class AntwortController extends BaseController
{ 
	public function OverviewAction($f_id){
		$umfrage = false;
		$leer = false;
		$uebergabe = array();
		$repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resantwort');// Baut Doctrine auf 
		$antworten = $repository->findBy(array('fId' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		if($antworten == null){
			$leer = true;
			$f_name = '';
		}else{
				foreach($antworten as $antwort){
					$tmp = array(
						"id" => $antwort->getId(),
						"f_id" => $f_id,
						"antwort" => $antwort->getAntwort(),
						"ftype" => $antwort->getFtype(),
						"auswertungsbereich" => $antwort->getAuswertungsbereich()
					);
				$uebergabe[] = $tmp;
				}
		}
		$repository_frage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resfrage');// Baut Doctrine auf 
		$frage = $repository_frage->findOneBy(array('id' => $f_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    

		$f_name = $frage->getfrage();
		$u_id = $frage->getUid();
		
    return $this->render('VestSymfonyBundle:Default:antwort_overview.html.twig', array('data' => $uebergabe, 'umfrage' => $umfrage, 'leer' => $leer, 'f_name' => $f_name, 'u_id' => $u_id));  
           
	}
	
	public function AllOverviewAction($u_id){
		$umfrage = true;
		$leer = false;
		$uebergabe = array();
		$repository_umfrage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resfrage');// Baut Doctrine auf 
		$fragen = $repository_umfrage->findBy(array('uId' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		
		foreach ($fragen as $frage){
			$repository_frage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resantwort');// Baut Doctrine auf 
			$antworten = $repository_frage->findBy(array('fId' => $frage->getId()));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
		
			foreach($antworten as $antwort){
				$tmp = array(
					"id" => $antwort->getId(),
					"f_id" => $frage->getId(),
					"antwort" => $antwort->getAntwort(),
					"ftype" => $antwort->getFtype(),
					"auswertungsbereich" => $antwort->getAuswertungsbereich()
				);
			$uebergabe[] = $tmp;
			}
		}
		
		$repository_umfrage = $this->getDoctrine()->getRepository('VestSymfonyBundle:Resumfrage');// Baut Doctrine auf 
		$umfrage = $repository_umfrage->findOneBy(array('id' => $u_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    

		$f_name = $umfrage->getName();
		
    return $this->render('VestSymfonyBundle:Default:antwort_overview.html.twig', array('data' => $uebergabe, 'leer' => $leer, 'f_name' => $f_name, 'u_id' => $u_id, 'umfrage' => $umfrage));  
           
	}
	
}