<?php namespace Vest\ResponsaBundle\Controller;

              
class HelpController extends BaseController
{ 
	public function OverviewAction(){
		
	
	
    return $this->renderTemplate('VestResponsaBundle:Default:help.html.twig', array('title' => 'Hilfe'));
           
	}
	
	
}