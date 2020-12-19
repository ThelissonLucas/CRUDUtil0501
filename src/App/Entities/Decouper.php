<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Decouper extends AbstractEntity
{
    protected $iIdDecouper = null;
    protected $iIdClasse = null;
    protected $iIdPeriode = null;

    public function setIIdDecouper($val=null) {
	if($this->iIdDecouper === null)
	    $this->iIdDecouper = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdDecouper($val);
    }
    
    public function getid() {
	    return $this->getIIdDecouper();
    }
}