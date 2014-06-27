<?php
namespace Vest\SymfonyBundle\Entity;

class resfragenliste{
    protected $frage = array();
    protected $antwort = array();
		
    protected $f_id= array();
    protected $ab= array();
		

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
    public function getAb()
    {
        return $this->f_ab;
    }

    public function setAb($f_ab)
    {
        $this->f_ab = $f_ab;
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
		
		protected $antwort1;
    public function getAntwort1()
    {
        return $this->antwort1;
    }

    public function setAntwort1($antwort1)
    {
        $this->antwort1 = $antwort1;
    }
		
		
		protected $antwort2;
    public function getAntwort2()
    {
        return $this->antwort2;
    }

    public function setAntwort2($antwort2)
    {
        $this->antwort2 = $antwort2;
    }
		
		protected $antwort3;
    public function getAntwort3()
    {
        return $this->antwort3;
    }

    public function setAntwort3($antwort3)
    {
        $this->antwort3 = $antwort3;
    }
		
		protected $antwort4;
    public function getAntwort4()
    {
        return $this->antwort4;
    }

    public function setAntwort4($antwort4)
    {
        $this->antwort4 = $antwort4;
    }
		protected $antwort5;
    public function getAntwort5()
    {
        return $this->antwort5;
    }

    public function setAntwort5($antwort5)
    {
        $this->antwort5 = $antwort5;
    }
		protected $antwort6;
    public function getAntwort6()
    {
        return $this->antwort6;
    }

    public function setAntwort6($antwort6)
    {
        $this->antwort6 = $antwort6;
    }
		protected $antwort7;
    public function getAntwort7()
    {
        return $this->antwort7;
    }

    public function setAntwort7($antwort7)
    {
        $this->antwort7 = $antwort7;
    }
		protected $antwort8;
    public function getAntwort8()
    {
        return $this->antwort8;
    }

    public function setAntwort8($antwort8)
    {
        $this->antwort8 = $antwort8;
    }
		protected $antwort9;
    public function getAntwort9()
    {
        return $this->antwort9;
    }

    public function setAntwort9($antwort9)
    {
        $this->antwort9 = $antwort9;
    }
		protected $antwort10;
    public function getAntwort10()
    {
        return $this->antwort10;
    }

    public function setAntwort10($antwort10)
    {
        $this->antwort10 = $antwort10;
    }
	
}