<?php

namespace Vest\SharedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Vest\SharedBundle\Entity\AddrPersonen;
use Symfony\Component\HttpFoundation\Request;

class User2Controller extends Controller
{
    private $person;
    private $roles=array();
    private $groups=array();
    private $doctrine;
    private $session;


    function __construct($doctrine)
    {
        $this->doctrine=$doctrine;

    }

    public function authBySession($user_id) {

          if($user_id) {
            $repos=$this->doctrine->getRepository("VestSharedBundle:AddrPersonen");
            $person=$repos->find($user_id);
            if($person) {
                $this->person=$person;
                $this->groups=$person->getGruppen();
                return true;
            } else return false;
        } else return false;
    }

    public function authByCredentials($user,$pass) {
        if($user!='' && $pass!='') {
            $session=$this->get("session");
            $repos=$this->doctrine->getRepository("VestSharedBundle:AddrPersonen");
            $person=$repos->findOneBy(array('personEmail'=>$user,'personPass'=>$pass));
            if($person->getPersonEmail()==$user) {
                $this->person=$person;
                $this->groups=$person->getGruppen();
                return $person->getId();
            } else return false;
        } else return false;


    }


    /**
     * @param mixed $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getGroups()
    {
        return $this->groups;
    }


    /**
     * @param mixed $roles
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function getInfo() {
        return $this->person;
    }
}
