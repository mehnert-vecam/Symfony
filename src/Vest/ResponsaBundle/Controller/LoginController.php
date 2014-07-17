<?php

namespace Vest\ResponsaBundle\Controller;

use Vest\SharedBundle\Entity\AddrPersonen;     // Zeigt dem Controller, wo er die Entit�t findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\PhpBridgeSessionStorage;
use Vest\SharedBundle\Controller\User2Controller;

class LoginController extends Controller
{
		public function LoginAction(){
				$person = new AddrPersonen(); // legt eine neue Person an
				$form = $this->createFormBuilder($person) // Formular wird auf Basis der Person erstellt
            ->setAction($this->generateUrl('Security_log-me-in'))     //nimmt die URL aus der routing.yml
            ->add('personEmail', 'text')
            ->add('personPass', 'password')
            ->add('save', 'submit')
            ->getForm();

				return $this->render('VestResponsaBundle:Default:login_form.html.twig', array(
						'form' => $form->createView(),   // stellt das Formular da.
				));
		}
		public function LoginCheckAction(Request $request){

			$person = new AddrPersonen(); // legt eine neue Person an
            $request_array= $request->request->all() ;       // hohlt alle Felder aus dem Request
			$form = $this->createFormBuilder($person) // Formular wird auf Basis der Person erstellt
            ->setAction($this->generateUrl('Security_log-me-in'))     //nimmt die URL aus der routing.yml
            ->add('personEmail', 'text')
            ->add('personPass', 'password')
            ->add('save', 'submit')
            ->getForm();

            $form->handleRequest($request);    // hohlt die Datem aus dem Request in das Formular

            $personEmail = $request_array['form']['personEmail'];
            $pw = $request_array['form']['personPass'];


            $repository = $this->getDoctrine()->getRepository('VestSharedBundle:AddrPersonen');// Baut Doctrine auf
            $person = $repository->findOneBy(array('personEmail' => $personEmail,'personPass' => $pw));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.

				if($person){
					$session = $this->get("session");
					$session->set('personEmail', $person->getPersonEmail());
					$session->set('id', $person->getId());
					$session->set('kontakt_id', $person->getKontaktId());
                    $session->set('user', array('person_id'=>$person->getId())); //TODO: aufräumen
					$result = 1;
				}else{
					$result = 0;
				}

				if($result == 1){
					return $this->forward('VestResponsaBundle:Umfrage:overview');
				}else{
					return $this->forward('VestResponsaBundle:Login:Login');
				}
		}

    public function SessionCheckAction(){
        /*
        if($this->user == null){
            $session = $this->get("session");
            $id= $session->get('id');
            $this->getUserById($id);

        }*/
        if($this->user != null){
            $result = $this->user->getInfo();
        }else{
            $result = null;
        }

        return $this->render('VestResponsaBundle:Default:session.html.twig', array('session' => $result));

	}

    public function LogoutAction(){


					$session = $this->get("session");
					$session->remove('personEmail');
					$session->remove('id');

						return $this->render('VestResponsaBundle:Default:logout.html.twig', array());

		}
}
