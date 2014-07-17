<?php
namespace Vest\ResponsaBundle\Entity;

class Resumfrageerzeuger{
    protected $u_id;
    protected $feld1;
    protected $feld2;
    protected $feld3;
    protected $feld4;
    protected $feld5;

		
		
    public function getUId()
    {
        return $this->u_id;
    }

    public function setUId($u_id)
    {
        $this->u_id = $u_id;
    }
    public function getFeld1()
    {
        return $this->feld1;
    }

    public function setFeld1($feld1)
    {
        $this->feld1 = $feld1;
    }
		
    public function getFeld2()
    {
        return $this->feld2;
    }

    public function setFeld2($feld2)
    {
        $this->feld2 = $feld2;
    }
		
    public function getFeld3()
    {
        return $this->feld3;
    }

    public function setFeld3($feld3)
    {
        $this->feld3 = $feld3;
    }
		
    public function getFeld4()
    {
        return $this->feld4;
    }

    public function setFeld4($feld4)
    {
        $this->feld4 = $feld4;
    }
		
    public function getFeld5()
    {
        return $this->feld5;
    }

    public function setFeld5($feld5)
    {
        $this->feld5 = $feld5;
    }
	
}