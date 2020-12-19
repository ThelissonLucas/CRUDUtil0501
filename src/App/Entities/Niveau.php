<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Niveau extends AbstractEntity
{
    protected $iIdNiveau = null;
    protected $cCouleurNiveau;
    protected $cCodeNiveau;
    protected $cLibelleNiveau;

    public function setIIdNiveau($val=null) {
	if($this->iIdNiveau === null)
	    $this->iIdNiveau = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdNiveau($val);
    }
    
    public function getid() {
	    return $this->getIIdNiveau();
    }
}