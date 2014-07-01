<?php

namespace Vest\ResponsaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('VestResponsaBundle:Default:index.html.twig', array('name' => $name));
    }


    public function testaAction()
    {
		$em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('VestResponsaBundle:AddrKontakte')->findAll();
//	    \Doctrine\Common\Util\Debug::dump($entities);
//	    print "<br>";
//	    print "<br>";
//        return $this->render('VestResponsaBundle:AddrKontakte:index.html.twig', array(
//            'entities' => $entities,
//        ));

//        $t_kontakte = $em->getRepository('VestResponsaBundle:TestKontakt')->findAll();
//        $t_personen = $em->getRepository('VestResponsaBundle:TestPersonen')->findAll();
        $t_kontakte_personen = $em->getRepository('VestResponsaBundle:TestKontaktePersonen')->findAll();
//        $t_personen_zusatz = $em->getRepository('VestResponsaBundle:TestPersonenZusatz')->findAll();

//	    \Doctrine\Common\Util\Debug::dump($t_kontakte);
//	    print "<br>";
//	    print "<br>";
//	    \Doctrine\Common\Util\Debug::dump($t_personen);
//	    print "<br>";
//	    print "<br>";
//	    \Doctrine\Common\Util\Debug::dump($t_kontakte_personen);
//	    print "<br>";
//	    print "<br>";
//	    \Doctrine\Common\Util\Debug::dump($t_personen_zusatz);
//	    print "<br>";
//	    print "<br>";
//	    print "<br>";


//        return $this->render('VestResponsaBundle:Default:testa.html.twig');
        return $this->render('VestResponsaBundle:Default:testa.html.twig', array(
            't_kontakte_personen' => $t_kontakte_personen,
//            't_kontakte' => $t_kontakte,
        ));


    }
}
