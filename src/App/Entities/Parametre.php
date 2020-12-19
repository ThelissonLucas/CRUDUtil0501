<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Parametre extends AbstractEntity
{
    protected $iIdParametre = null;
    protected $cNomParametre;

    public function setIIdParametre($val=null) {
	if($this->iIdParametre === null)
	    $this->iIdParametre = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdParametre($val);
    }
    
    public function getid() {
	    return $this->getIIdParametre();
    }
}