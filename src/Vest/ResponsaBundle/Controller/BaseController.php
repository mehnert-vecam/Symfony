<?php

namespace Vest\ResponsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Vest\SharedBundle\Security\User\User;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Vest\SharedBundle\Entity\AddrPersonen;
use Vest\SharedBundle\Entity\AddrKontakte;
use Vest\SharedBundle\Entity\RbacGruppenRbacRollen;
use Vest\SharedBundle\Entity\RbacRollenAddrPersonen;
use Vest\SharedBundle\Entity\RbacGruppenAddrPersonen;
use Vest\SharedBundle\Controller\User2Controller;

class BaseController extends Controller
{

	protected $user; // der Benutzer
	protected $id;
    protected $navigation='';



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
         $this->navigationInitialized();
    }

    /**
     *
     */
    private function containerInitialized()
    {


        /*
        $routeName = $request->get('_route');
        if($routeName == 'Security_login' || $routeName =='Security_log-me-in' || $routeName == 'Security_logout'){

        }else{

            $id_tmp= $session->get('id');
            if($id_tmp != ''){
                $this->id = $id_tmp;
                //echo '<p>Sie sind eingeloggt. Herzlich Willkommen! :)</p>';
                $repository = $this->getDoctrine()->getRepository('VestSharedBundle:AddrPersonen');// Baut Doctrine auf
                $person = $repository->findOneBy(array('id' => $this->id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.

                if($person){
                    $this->user = new User($person->getKontaktId(),$person->getId(),$person->getpersonEmail());
                    $this->setUserRoles();
                    $this->user->setInfo($person);
                }
            }else{
                echo '<p>Sie sind nicht eingeloggt und werden daher gerade zur Login-Seite umgeleitet. Einen Moment bitte.</p>';

                    echo $this->redirect($this->generateUrl('Security_login'));
                    die();
            }
        }
        */
    }

    private function navigationInitialized() {
        

            $navitem['name']='Umfragen';
            $navitem['kurzname']='Responsa_overview';
            $navitem['icon']='icon-home nav-icon';
            $navitem['farbe']='#000099';
            $navitem['viewcount']=0;
            $this->navigation[]=$navitem;
						
            $navitem['name']='Auswertung';
            $navitem['kurzname']='Responsa_Auswertung';
            $navitem['icon']='icon-home nav-icon';
            $navitem['farbe']='#000099';
            $navitem['viewcount']=0;
            $this->navigation[]=$navitem;
						
            $navitem['name']='Profil';
            $navitem['kurzname']='Profil_show';
            $navitem['icon']='icon-home nav-icon';
            $navitem['farbe']='#000099';
            $navitem['viewcount']=0;
            $this->navigation[]=$navitem;
						
            $navitem['name']='Hilfe';
            $navitem['kurzname']='Responsa_help';
            $navitem['icon']='icon-home nav-icon';
            $navitem['farbe']='#000099';
            $navitem['viewcount']=0;
            $this->navigation[]=$navitem;
						
						
            $navitem['name']='Erzeugen';
            $navitem['kurzname']='Responsa_generate_show';
            $navitem['icon']='icon-home nav-icon';
            $navitem['farbe']='#000099';
            $navitem['viewcount']=0;
            $this->navigation[]=$navitem;
						
						
						
    }

		/*
    private function navigationInitializedDisciplina() {
        $repository=$this->getDoctrine()->getRepository('VestSharedBundle:AppAnwendungen');

        $apps=$repository->findBy(array('anwendungUberId'=>0),array('anwendungAnzeigePrio'=>'ASC'));
        //$apps=$repository->findAll();

        foreach($apps as $a) {
            $navitem['name']=$a->getAnwendungName();
            $navitem['kurzname']=$a->getAnwendungKurzname();
            $navitem['icon']=$a->getAnwendungIcon();
            $navitem['farbe']=$a->getAnwendungFarbcode();

            $views=$a->getAnsichten();
            $navitem['viewcount']=$views->count();

            $rollen=$a->getRollen();
            foreach($rollen as $r) {
                //echo $r->getRolleName();
            }


            foreach($views as $v) {

                if($v->getAnsichtPrio()) {
                    $navitem['views'][$v->getId()]['name']=$v->getAnsichtName();
                    $navitem['views'][$v->getId()]['kurzname']=$v->getAnsichtKurzname();
                }
            }
            $this->navigation[]=$navitem;
            unset($navitem);
        }
    }
		*/
		
    public function LoginAction(){
        $person = new AddrPersonen(); // legt eine neue Person an
        $form = $this->createFormBuilder($person) // Formular wird auf Basis der Person erstellt
            ->setAction($this->generateUrl('Responsa_default'))     //nimmt die URL aus der routing.yml
            ->add('personEmail', 'text')
            ->add('personPass', 'password')
            ->add('save', 'submit')
            ->getForm();

        return $this->renderTemplate('VestResponsaBundle:Default:login_form.html.twig', array('form' => $form->createView(),'title'=>'Login'));


    }

    public function LogoutAction(){


        $session = $this->get("session");
        $session->remove('user');
        return $this->LoginAction();

    }

    /*
    protected function getUserWithoutAny(){

        $session = $this->get("session");
        $id= $session->get('id');
        $repository = $this->getDoctrine()->getRepository('VestSharedBundle:AddrPersonen');// Baut Doctrine auf
        $person = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.

        if($person){
            $this->user = new User($person->getKontaktId(),$person->getId(),$person->getpersonEmail());
            return $person;
        }else{
            return false;
        }
    }
    protected function getUserById($id){

    $repository = $this->getDoctrine()->getRepository('VestSharedBundle:AddrPersonen');// Baut Doctrine auf
    $person = $repository->findOneBy(array('id' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.

            if($person){
                $this->user = new User($person->getKontaktId(),$person->getId(),$person->getpersonEmail());
                return true;
            }else{
                return false;
            }
    }
    protected function getUserByLogin($email, $passwort){

    $repository = $this->getDoctrine()->getRepository('VestSharedBundle:AddrPersonen');// Baut Doctrine auf
    $person = $repository->findOneBy(array('personEmail' => $email,'personPass' => $passwort));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.

    if($person){
        $this->user = new User($person->getKontaktId(),$person->getId(),$person->getpersonEmail());
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
        $repository = $this->getDoctrine()->getRepository('VestSharedBundle:RbacRollenAddrPersonen');// Baut Doctrine auf
        $user_rollen = $repository->findBy(array('personId' => $this->id));

        $repository = $this->getDoctrine()->getRepository('VestSharedBundle:RbacGruppenAddrPersonen');// Baut Doctrine auf
        $user_gruppen = $repository->findBy(array('personId' => $this->id));
        foreach($user_gruppen as $gruppe){
            //echo $gruppe->getGruppeId().'-<br />';
            $repository = $this->getDoctrine()->getRepository('VestSharedBundle:RbacGruppenRbacRollen');// Baut Doctrine auf
            $user_gruppen_rollen = $repository->findBy(array('gruppeId' => $gruppe));

            foreach($user_gruppen_rollen as $rolle){
                $user_rollen[$rolle->getId()] = $rolle->getRolleName();
            }
        }
        //echo print_r($user_rollen);


        $this->user->setRoles($user_rollen);
    }*/

    protected function renderTemplate($templateName,$data=array()) {
        $session=$this->get("session");
        $request = $this->container->get('request');
        $this->user= new User2Controller($this->getDoctrine(),$session);
				//print_r($session);
			
				$repository_kontakt = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrKontakte');// Baut Doctrine auf
				$kontakt = $repository_kontakt->findBy(array('kontaktId' => $session->get('kontakt_id')));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
    
				
        if(!$this->user->authBySession($session->get('id'))) {

            $user=$request->get("personEmail");
            $pass=$request->get("personPass");
            if($user!='' && $pass!='') {

                if(!$id=$this->user->authByCredentials($user,$pass)) {
                    $this->LoginAction(); // TODO: ???
                } else {
                    $templateParameter=array_merge(array('navigation'=>$this->navigation,
										'user'=>$this->user->getInfo(), 'kontakt' =>$kontakt[0]),$data);
                    return $this->render($templateName,$templateParameter);
                }
            } else {
                return $this->forward('VestResponsaBundle:Login:Login');
            }

        } else {
            $templateParameter=array_merge(array('navigation'=>$this->navigation,'user'=>$this->user->getInfo(), 'kontakt' =>$kontakt[0]),$data);
            return $this->render($templateName,$templateParameter);
        }
        return true;

        //$templateParameter=array_merge(array('navigation'=>$this->page->nav->getItems(),'user'=>$this->user->getInfo(),'args' => $this->args,'titlebar'=> $this->page->title),$data);

    }
}