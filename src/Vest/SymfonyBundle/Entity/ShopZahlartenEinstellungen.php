<?php

namespace Vest\SymfonyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShopZahlartenEinstellungen
 *
 * @ORM\Table(name="shop_zahlarten_einstellungen", indexes={@ORM\Index(name="fk_shop_zahlarten_einstellungen_shop_zahlarten1", columns={"zahlart_id"})})
 * @ORM\Entity
 */
class ShopZahlartenEinstellungen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="zahlart_id", type="integer", nullable=true)
     */
    private $zahlartId;

    /**
     * @var string
     *
     * @ORM\Column(name="zahlart_api_benutzer", type="string", length=45, nullable=true)
     */
    private $zahlartApiBenutzer;

    /**
     * @var string
     *
     * @ORM\Column(name="zahlart_api_passwort", type="string", length=45, nullable=true)
     */
    private $zahlartApiPasswort;

    /**
     * @var string
     *
     * @ORM\Column(name="zahlart_api_signatur", type="string", length=45, nullable=true)
     */
    private $zahlartApiSignatur;

    /**
     * @var integer
     *
     * @ORM\Column(name="zahlart_einstellung_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zahlartEinstellungId;



    /**
     * Set zahlartId
     *
     * @param integer $zahlartId
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartId($zahlartId)
    {
        $this->zahlartId = $zahlartId;

        return $this;
    }

    /**
     * Get zahlartId
     *
     * @return integer 
     */
    public function getZahlartId()
    {
        return $this->zahlartId;
    }

    /**
     * Set zahlartApiBenutzer
     *
     * @param string $zahlartApiBenutzer
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiBenutzer($zahlartApiBenutzer)
    {
        $this->zahlartApiBenutzer = $zahlartApiBenutzer;

        return $this;
    }

    /**
     * Get zahlartApiBenutzer
     *
     * @return string 
     */
    public function getZahlartApiBenutzer()
    {
        return $this->zahlartApiBenutzer;
    }

    /**
     * Set zahlartApiPasswort
     *
     * @param string $zahlartApiPasswort
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiPasswort($zahlartApiPasswort)
    {
        $this->zahlartApiPasswort = $zahlartApiPasswort;

        return $this;
    }

    /**
     * Get zahlartApiPasswort
     *
     * @return string 
     */
    public function getZahlartApiPasswort()
    {
        return $this->zahlartApiPasswort;
    }

    /**
     * Set zahlartApiSignatur
     *
     * @param string $zahlartApiSignatur
     * @return ShopZahlartenEinstellungen
     */
    public function setZahlartApiSignatur($zahlartApiSignatur)
    {
        $this->zahlartApiSignatur = $zahlartApiSignatur;

        return $this;
    }

    /**
     * Get zahlartApiSignatur
     *
     * @return string 
     */
    public function getZahlartApiSignatur()
    {
        return $this->zahlartApiSignatur;
    }

    /**
     * Get zahlartEinstellungId
     *
     * @return integer 
     */
    public function getZahlartEinstellungId()
    {
        return $this->zahlartEinstellungId;
    }
}
