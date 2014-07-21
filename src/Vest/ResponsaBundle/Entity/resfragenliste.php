<?php
namespace Vest\ResponsaBundle\Entity;

class ResFragenliste{
    protected $f_frage = array();
    protected $f_antwort = array();
    protected $s_frage = array();
    protected $s_antwort = array();
		
    protected $f_f_id= array();
    protected $s_f_id= array();
		

    protected $u_id;
    protected $u_name;
    protected $feld1;
    protected $feld2;
    protected $feld3;
    protected $feld4;
    protected $feld5;

    public function getSFrage()
    {
        return $this->s_frage;
    }

    public function setSFrage($s_frage)
    {
        $this->s_frage = $s_frage;
    }
    public function getSAntwort()
    {
        return $this->s_antwort;
    }

    public function setSAntwort($s_antwort)
    {
        $this->s_antwort = $s_antwort;
    }
		
    public function getFFrage()
    {
        return $this->f_frage;
    }

    public function setFFrage($f_frage)
    {
        $this->f_frage = $f_frage;
    }
    public function getFAntwort()
    {
        return $this->f_antwort;
    }

    public function setFAntwort($f_antwort)
    {
        $this->f_antwort = $f_antwort;
    }

    public function getFFid()
    {
        return $this->f_f_id;
    }

    public function setFFid($f_f_id)
    {
        $this->f_f_id = $f_f_id;
    }
    public function getSFid()
    {
        return $this->s_f_id;
    }

    public function setSFid($s_f_id)
    {
        $this->s_f_id = $s_f_id;
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