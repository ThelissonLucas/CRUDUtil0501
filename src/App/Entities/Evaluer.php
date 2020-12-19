<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Evaluer extends AbstractEntity
{
    protected $iIdEvaluer = null;
    protected $iIdEtudiant = null;
    protected $iIdTuteur = null;
    protected $iIdPeriode = null;
    protected $iIdNiveau = null;
    protected $iIdCompetence = null;
    protected $dDateHeure;

    public function setIIdEvaluer($val=null) {
	if($this->iIdEvaluer === null)
	    $this->iIdEvaluer = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdEvaluer($val);
    }
    
    public function getid() {
	    return $this->getIIdEvaluer();
    }
}