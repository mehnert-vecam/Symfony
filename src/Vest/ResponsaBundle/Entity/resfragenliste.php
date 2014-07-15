<?php
namespace Vest\ResponsaBundle\Entity;

class resfragenliste{
    protected $frage = array();
    protected $antwort = array();
		
    protected $f_id= array();
		

    protected $u_id;
    protected $u_name;
    protected $feld1;
    protected $feld2;
    protected $feld3;
    protected $feld4;
    protected $feld5;

    public function getFrage()
    {
        return $this->frage;
    }

    public function setFrage($frage)
    {
        $this->frage = $frage;
    }
    public function getAntwort()
    {
        return $this->antwort;
    }

    public function setAntwort($antwort)
    {
        $this->antwort = $antwort;
    }

    public function getFid()
    {
        return $this->f_id;
    }

    public function setFid($f_id)
    {
        $this->f_id = $f_id;
    }

    public function getU_id()
    {
        return $this->u_id;
    }
    public function getUId()
    {
        return $this->u_id;
    }

    public function setU_id($u_id)
    {
        $this->u_id = $u_id;
    }

    public function getU_name()
    {
        return $this->u_name;
    }

    public function setU_name($u_name)
    {
        $this->u_name = $u_name;
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