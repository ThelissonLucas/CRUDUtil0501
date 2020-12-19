<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Alterner extends AbstractEntity
{
    protected $iIdAlterner = null;
    protected $iIdEntreprise = null;
    protected $iIdEtudiant = null;
    protected $dDebut;
    protected $dFin;

    public function setIIdAlterner($val=null) {
	if($this->iIdAlterner === null)
	    $this->iIdAlterner = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdAlterner($val);
    }
    
    public function getid() {
	    return $this->getIIdAlterner();
    }
}