<?php namespace Vest\ResponsaBundle\Controller;

use Vest\ResponsaBundle\Entity\Resumfrage;     // Zeigt dem Controller, wo er die Entit�t findet (verwendet in Zeilte 17)
use Vest\ResponsaBundle\Entity\Resfrage;     // Zeigt dem Controller, wo er die Entit�t findet (verwendet in Zeilte 17)
use Vest\ResponsaBundle\Entity\Resantwort;
             
class AuswertungController extends BaseController
{ 
	public function OverviewAction(){
		$session = $this->get("session");
		$person_id = $session->get('id');
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:Resantwort');// Baut Doctrine auf
		$antworten = $repository->findBy(array());  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
	
			//foreach($antworten as $antwort){}
		$repository = $this->getDoctrine()->getRepository('VestResponsaBundle:Resumfrage');// Baut Doctrine auf
		$umfragen = $repository->findBy(array('ersteller' => $person_id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
	
			$auswertungsbereiche = array();
			foreach($umfragen as $ant){
				$tmp = $ant->getAuswertungsbereich1();
				if($tmp != ''){
					$auswertungsbereiche[] = $tmp;
				}
				$tmp = $ant->getAuswertungsbereich2();
				if($tmp != ''){
					$auswertungsbereiche[] = $tmp;
				}
				$tmp = $ant->getAuswertungsbereich3();
				if($tmp != ''){
					$auswertungsbereiche[] = $tmp;
				}
				$tmp = $ant->getAuswertungsbereich4();
				if($tmp != ''){
					$auswertungsbereiche[] = $tmp;
				}
				$tmp = $ant->getAuswertungsbereich5();
				if($tmp != ''){
					$auswertungsbereiche[] = $tmp;
				}
			}
			//echo print_r($auswertungsbereiche);
			$auswertung = array();
			$em = $this->getDoctrine()->getManager();
			foreach($auswertungsbereiche as $ab){
				//echo print_r(' ---- '.$ab.' ---- ');
				$query = $em->createQuery(
						"SELECT a.antwort,COUNT(a.antwort) 
						FROM VestResponsaBundle:resantwort a
						WHERE a.auswertungsbereich ='".$ab."' AND a.fType = 0
						GROUP BY a.antwort"
				);
				$result = $query->getResult();
				//echo print_r($result);
				if(sizeof($result) >0){
					$auswertung_tmp = array();
					for($i = 0; $i<sizeof($result); $i++){
						$auswertung_tmp[] = array('antwort' =>$result[$i]['antwort'], 'wert' =>$result[$i][1]);
					} 
					$auswertung[$ab] = $auswertung_tmp;
				}
			}
			
	
		//$f_name = $frage->getfrage();
		//$u_id = $frage->getUid();
		
    return $this->renderTemplate('VestResponsaBundle:Default:antwort_overview.html.twig', array(
			'auswertungsbereiche' => $auswertungsbereiche,
			'auswertung' => $auswertung,
			'antworten' => $antworten,
			'title' => 'Auswertung'
		));
           
	}
	
	
}