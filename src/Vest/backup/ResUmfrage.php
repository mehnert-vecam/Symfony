<?php
// src/Vest/SymfonyBundle/Entity/ResUmfrage.php
namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veyt\SymfonyBundle\Entity\ResUmfrage 
 *
 * @ORM\Entity
 * @ORM\Table(name="ResUmfrage")
 */
class ResUmfrage{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $name;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $feld1;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $feld2;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $feld3;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $feld4;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $feld5;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $auswertungsbereich1;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $auswertungsbereich2;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $auswertungsbereich3;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $auswertungsbereich4;
	
    /**
     * @ORM\Column(type="string", length=100)
     */
	protected $auswertungsbereich5;
	
    /**
     * @ORM\Column(type="integer")
     */
	protected $aufrufe;
	
}