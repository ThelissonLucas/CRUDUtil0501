<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Periode extends AbstractEntity
{
    protected $iIdPeriode = null;
    protected $cNomPeriode;

    public function setIIdPeriode($val=null) {
	if($this->iIdPeriode === null)
	    $this->iIdPeriode = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdPeriode($val);
    }
    
    public function getid() {
	    return $this->getIIdPeriode();
    }
}