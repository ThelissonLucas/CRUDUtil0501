<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Employer extends AbstractEntity
{
    protected $iIdEmployer = null;
    protected $iIdEntreprise = null;
    protected $iIdTuteur = null;

    public function setIIdEmployer($val=null) {
	if($this->iIdEmployer === null)
	    $this->iIdEmployer = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdEmployer($val);
    }
    
    public function getid() {
	    return $this->getIIdEmployer();
    }
}