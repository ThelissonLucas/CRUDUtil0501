<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class AutoEvaluer extends AbstractEntity
{
    protected $iIdAutoEvaluer = null;
    protected $iIdEtudiant = null;
    protected $iIdPeriode = null;
    protected $iIdNiveau = null;
    protected $iIdCompetence = null;
    protected $dDateHeure;

    public function setIIdAutoEvaluer($val=null) {
	if($this->iIdAutoEvaluer === null)
	    $this->iIdAutoEvaluer = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdAutoEvaluer($val);
    }
    
    public function getid() {
	    return $this->getIIdAutoEvaluer();
    }
}