<?php

namespace Vest\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Vest\SymfonyBundle\Security\User\User; 
use Symfony\Component\DependencyInjection\ContainerInterface;  
use Vest\SymfonyBundle\Entity\AddrPersonen; 
use Vest\SymfonyBundle\Entity\RbacGruppenRbacRollen; 
use Vest\SymfonyBundle\Entity\RbacRollenAddrPersonen; 
use Vest\SymfonyBundle\Entity\RbacGruppenAddrPersonen; 
              
class BaseController extends Controller
{

	protected $user; // der Benutzer
	protected $id;
	    
		
	
		function __construct() {
			$user = null;
    }

    function __destruct() {
    }
    function getUser(){
			return $this->user;
		}
		/**
		 * Überschreibt die setContainer. Dabei wir die alte setContainer() weiter verwendet und wir fügen unseren eigenen Zusatz danach ein.
		 */
		public function setContainer(ContainerInterface $container = null)
		{				
				parent::setContainer($container);
				$this->containerInitialized();
				
		}

		/**
		 * 
		 */
		private function containerInitialized()
		{
			$request = $this->container->get('request');
			$routeName = $request->get('_route');
			if($routeName == 'Security_login' || $routeName =='Security_log-me-in' || $routeName == 'Security_logout'){
			
			}else{
					
					$session = $this->get("session");
					$id_tmp= $session->get('id');
					if($id_tmp != ''){
						$this->id = $id_tmp;
						//echo '<p>Sie sind eingeloggt. Herzlich Willkommen! :)</p>';
						$repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrPersonen');// Baut Doctrine auf 
						$person = $repository->findOneBy(array('personId' => $this->id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
						
						if($person){
							$this->user = new User($person->getKontaktId(),$person->getPersonId(),$person->getpersonEmail());		
							$this->setUserRoles();
						}
					}else{
						echo '<p>Sie sind nicht eingeloggt und werden daher gerade zur Login-Seite umgeleitet. Einen Moment bitte.</p>';
						
							echo $this->redirect($this->generateUrl('Security_login'));		
							die();
					}
			
			}	 
		}
		
		protected function getUserWithoutAny(){
						
					$session = $this->get("session");
					$id= $session->get('id');
        $repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrPersonen');// Baut Doctrine auf 
        $person = $repository->findOneBy(array('personId' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				if($person){
					$this->user = new User($person->getKontaktId(),$person->getPersonId(),$person->getpersonEmail());		
					return $person;
				}else{
					return false;
				}
		}	
		protected function getUserById($id){
				
        $repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrPersonen');// Baut Doctrine auf 
        $person = $repository->findOneBy(array('personId' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
      
				if($person){
					$this->user = new User($person->getKontaktId(),$person->getPersonId(),$person->getpersonEmail());		
					return true;
				}else{
					return false;
				}
		}		
		protected function getUserByLogin($email, $passwort){
				
        $repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:AddrPersonen');// Baut Doctrine auf 
        $person = $repository->findOneBy(array('personEmail' => $email,'personPass' => $passwort));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
				if($person){
					$this->user = new User($person->getKontaktId(),$person->getPersonId(),$person->getpersonEmail());				
					return true;
				}else{
					return false;
				}
		}
		
		protected function setUserRoles(){
			$person = new AddrPersonen();
			$gruppen_rollen = new RbacGruppenRbacRollen();
			$personen_rollen = new RbacRollenAddrPersonen();
			$personen_in_gruppen = new RbacGruppenAddrPersonen();
			
			$user_rollen = array();
			$repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:RbacRollenAddrPersonen');// Baut Doctrine auf 
			$user_rollen = $repository->findBy(array('personId' => $this->id));
			
			$repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:RbacGruppenAddrPersonen');// Baut Doctrine auf 
			$user_gruppen = $repository->findBy(array('personId' => $this->id));
			foreach($user_gruppen as $gruppe){
				//echo $gruppe->getGruppeId().'-<br />';
				$repository = $this->getDoctrine()->getRepository('VestSymfonyBundle:RbacGruppenRbacRollen');// Baut Doctrine auf 
				$user_gruppen_rollen = $repository->findBy(array('gruppeId' => $gruppe));
				
				foreach($user_gruppen_rollen as $rolle){
					$user_rollen[] = $rolle;
				}
			}
			//echo print_r($user_rollen);
			$this->user->setRoles($user_rollen);
		}
		
		
}