<?php

namespace Vest\ResponsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller; 
use Vest\ResponsaBundle\Entity\AddrPersonen;     // Zeigt dem Controller, wo er die Entität findet (verwendet in Zeilte 17)
use Symfony\Component\HttpFoundation\Request;   // Zeigt dem Controller wo er die Funktionen für Requests findet.
               
class AddrPersonController extends Controller
{
    public function indexAction($id='')
    {
      /* 
       *  Check ob eine ID uebergeben wurde und damit ob es sich um einen neuen Eintrag handelt oder nicht.
       */       
      if($id== ''){   // wurde keine ID uebergeben, handelt es sich um einen neuen Eintrag, für den ein neues Objekt erzeugt werden muss.     
        $person = new AddrPersonen(); // legt eine neue Person an      
      
      }else{  //lädt den vorhandenen Eintrag zu der ID
        $repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrPersonen');// Baut Doctrine auf
        $person = $repository->findOneBy(array('personId' => $id));  //hohlt das passende Objekt aus der Doctrine. Wichtig, damit man danach updaten kann.    
        
      
      }
        
        /*
         *  Anlegend es Formulars
         */
        $form = $this->createFormBuilder($person) // Formular wird auf Basis der Person erstellt   
            ->setAction($this->generateUrl('AddrPerson-save'))     //nimmt die URL aus der routing.yml 
            ->add('personId', 'hidden')
            ->add('kontakt_id', 'integer')
            ->add('person_anrede', 'choice', array('choices'=> array('herr' => 'Herr', 'frau' => 'Frau'))) // Gibt an welche Auswahlmöglichkeiten es gibt.
            ->add('person_titel', 'text', array('required'  => false))  // deaktiviert das HTML5 Tag "required". Dies wird standardmäßig gesetzt.
            ->add('person_vorname', 'text')
            ->add('person_name', 'text')
            ->add('person_briefanrede', 'text', array('required'  => false))
            ->add('person_zhanrede', 'text', array('required'  => false))
            ->add('person_telefon', 'text')
            ->add('person_email', 'text')
            ->add('person_mobil', 'text', array('required'  => false))
            ->add('person_pass', 'password')
            ->add('save', 'submit')
            ->getForm();
            
          return $this->renderTemplate('VestResponsaBundle:Default:AddrPerson.html.twig', array(
              'form' => $form->createView(),   // stellt das Formular da.
          ));
    }
    

    public function saveAction(Request $request)
    {
        $request_array= $request->request->all() ;       // hohlt alle Felder aus dem Request
        $id = $request_array['form']['personId'];        // hohlt die verwendete ID aus dem request
        
        if($id >0){   // checkt, ob die ID gesetzt ist. Ist sie gesetzt, wird bearbeitet
          $repository = $this->getDoctrine()->getRepository('VestResponsaBundle:AddrPersonen');      // lädt das repository und sagt ihm um welche Entity es sich kümmern soll.
          $person = $repository->findOneBy(array('Id' => $id));   //Versucht eine Person mit der personId zu finden
        }else{              // ist keine ID gesetzt, handelt es sich um eine neue Person.
          $person = new AddrPersonen();      // wurde keine Person geladen, wird eine neue erzeugt
          $person->setRecordStatus(1);       // setzt de recordstatus bei neuen Personen auf 1
          
          /*
           *  Die Übergabe eines durch date() erzeugten Strings funktioniert nicht richtig und er wirft dabei einen Fehler.
           *  Bisher habe ich noch keinen Weg gefunden dei Zeit passend ein zu lesen und dann auch speichern zu können.
           */                      
          //$timestamp = time();
          //$date = date("Y-m-d H:i:s", $timestamp);      
          //$person->setPersonAktualisiert($date);                                             
        }    
    
        /*
         *  Anlegend es exakt gleichen Formulars
         */
        $form = $this->createFormBuilder($person) 
            ->setAction($this->generateUrl('AddrPerson-save'))     
            ->add('personId', 'hidden')
            ->add('kontakt_id', 'integer')
            ->add('person_anrede', 'choice', array('choices'=> array('herr' => 'Herr', 'frau' => 'Frau')))
            ->add('person_titel', 'text', array('required'  => false))
            ->add('person_vorname', 'text')
            ->add('person_name', 'text')
            ->add('person_briefanrede', 'text', array('required'  => false))
            ->add('person_zhanrede', 'text', array('required'  => false))
            ->add('person_telefon', 'text')
            ->add('person_email', 'text')
            ->add('person_mobil', 'text', array('required'  => false))
            ->add('person_pass', 'password')
            ->add('save', 'submit')
            ->getForm();
    
        $form->handleRequest($request);    // hohlt die Datem aus dem Request in das Formular
        if(!($id>0)){
          $id = 0;    // sollte keine ID vorhanden sein, wird sie auf 0 gesetzt, da sie etwas enthalten muss um beim rendern übergeben zu werden.
        }
        
        if ($form->isValid()) {    // checkt ob die Daten im Formular valide sind.
          $em = $this->getDoctrine()->getManager();       // lädt den Entity Manager
          $em->persist($person);                          // sagen dem Entity Manager welche Entität er verwalten soll (ist bei neu angelegten Nutzern notwendig)
          $em->flush();                                   // speichert die Daten in die Datenbank  
            
            $ergebnis = 1;    // boolean der ergebnis speichert und beim Rendern übergeben wird
            $error ='';
        }else{
            $ergebnis = 0;
            
            $error = (string) $form->getErrors(true, false);   //liest die Fehlermeldungen und speichert sie in einen String
        }
        
        /*
         * Rendert die Erfolgs-Seite
         * Dabei werden in einem Array Werte übergeben, die dann in der 
         */                  
        return $this->renderTemplate('VestResponsaBundle:Default:erfolg.html.twig', array('ergebnis' => $ergebnis, 'id' => $id, 'error' => $error));
        
    
    } 
      
      
}


