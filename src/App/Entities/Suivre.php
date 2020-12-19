<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Suivre extends AbstractEntity
{
    protected $iIdSuivre = null;
    protected $iIdEnseignant = null;
    protected $iIdEtudiant = null;
    protected $dDebut;
    protected $dFin;

    public function setIIdSuivre($val=null) {
	if($this->iIdSuivre === null)
	    $this->iIdSuivre = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdSuivre($val);
    }
    
    public function getid() {
	    return $this->getIIdSuivre();
    }
}