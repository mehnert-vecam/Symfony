<?php

namespace Vest\ResponsaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormbElemente
 */
class FormbElemente
{
    /**
     * @var integer
     */
    private $elementId;

    /**
     * @var string
     */
    private $elementName;

    /**
     * @var string
     */
    private $elementApp;

    /**
     * @var string
     */
    private $elementMethode;

    /**
     * @var string
     */
    private $elementParameter;


    /**
     * Get elementId
     *
     * @return integer 
     */
    public function getElementId()
    {
        return $this->elementId;
    }

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
}
