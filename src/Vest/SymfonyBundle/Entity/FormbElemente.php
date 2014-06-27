<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormbElemente
 *
 * @ORM\Table(name="formb_elemente")
 * @ORM\Entity
 */
class FormbElemente
{
    /**
     * @var string
     *
     * @ORM\Column(name="element_name", type="string", length=255, nullable=false)
     */
    private $elementName;

    /**
     * @var string
     *
     * @ORM\Column(name="element_app", type="string", length=45, nullable=true)
     */
    private $elementApp;

    /**
     * @var string
     *
     * @ORM\Column(name="element_methode", type="string", length=255, nullable=true)
     */
    private $elementMethode;

    /**
     * @var string
     *
     * @ORM\Column(name="element_parameter", type="text", nullable=false)
     */
    private $elementParameter;

    /**
     * @var integer
     *
     * @ORM\Column(name="element_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $elementId;



    /**
     * Set elementName
     *
     * @param string $elementName
     * @return FormbElemente
     */
    public function setElementName($elementName)
    {
        $this->elementName = $elementName;

        return $this;
    }

    /**
     * Get elementName
     *
     * @return string 
     */
    public function getElementName()
    {
        return $this->elementName;
    }

    /**
     * Set elementApp
     *
     * @param string $elementApp
     * @return FormbElemente
     */
    public function setElementApp($elementApp)
    {
        $this->elementApp = $elementApp;

        return $this;
    }

    /**
     * Get elementApp
     *
     * @return string 
     */
    public function getElementApp()
    {
        return $this->elementApp;
    }

    /**
     * Set elementMethode
     *
     * @param string $elementMethode
     * @return FormbElemente
     */
    public function setElementMethode($elementMethode)
    {
        $this->elementMethode = $elementMethode;

        return $this;
    }

    /**
     * Get elementMethode
     *
     * @return string 
     */
    public function getElementMethode()
    {
        return $this->elementMethode;
    }

    /**
     * Set elementParameter
     *
     * @param string $elementParameter
     * @return FormbElemente
     */
    public function setElementParameter($elementParameter)
    {
        $this->elementParameter = $elementParameter;

        return $this;
    }

    /**
     * Get elementParameter
     *
     * @return string 
     */
    public function getElementParameter()
    {
        return $this->elementParameter;
    }

    /**
     * Get elementId
     *
     * @return integer 
     */
    public function getElementId()
    {
        return $this->elementId;
    }
}
