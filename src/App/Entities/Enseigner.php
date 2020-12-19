<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Enseigner extends AbstractEntity
{
    protected $iIdEnseigner = null;
    protected $iIdEnseignant = null;
    protected $iIdClasse = null;
    protected $dDebut;
    protected $dFin;

    public function setIIdEnseigner($val=null) {
	if($this->iIdEnseigner === null)
	    $this->iIdEnseigner = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdEnseigner($val);
    }
    
    public function getid() {
	    return $this->getIIdEnseigner();
    }
}