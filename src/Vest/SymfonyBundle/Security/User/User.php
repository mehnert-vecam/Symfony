<?php
namespace Vest\SymfonyBundle\Security\User;

use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Vest\SymfonyBundle\Entity\AddrPersonen;

class User
{

    private $person_id;
    private $kontakt_id;
    private $email;
		private $roles;




		function __construct($k_id = 0, $p_id = 0, $mail = null) {
			$this->person_id = $p_id;
			$this->kontakt_id = $k_id;
			$this->email = $mail;
			$this->roles = null;
    }

    function __destruct() {

    }
		function ausgabe(){
			echo 'person_id: '.$this->person_id.'<br />';
			echo 'kontakt_id: '.$this->kontakt_id.'<br />';
		}

		function getDATA(){

			$result = array();
			$result[] = $this->person_id;
			$result[] = $this->kontakt_id;
			$result[] = $this->email;



//			if($this->roles != null){
//				foreach($this->$roles as $role){
//					$result[] = $role;
//				}
//			}else{
//				$result[] = 'Keine Rollen vorhanden oder Fehler beim auslesen der Rollen';
//			}
			return $result;

		}

		function setRoles($roles_tmp){

			$this->roles = $roles_tmp;
		}

}