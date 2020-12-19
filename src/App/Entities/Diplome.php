<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Diplome extends AbstractEntity
{
    protected $iIdDiplome = null;
    protected $cCouleur;
    protected $cNomDiplome;

    public function setIIdDiplome($val=null) {
	if($this->iIdDiplome === null)
	    $this->iIdDiplome = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdDiplome($val);
    }
    
    public function getid() {
	    return $this->getIIdDiplome();
    }
}