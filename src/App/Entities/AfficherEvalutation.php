<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class AfficherEvaluation extends AbstractEntity
{
    protected $iIdAfficherEvaluation = null;
    protected $iIdTuteur = null;
    protected $iIdEtudiant = null;
    protected $iIdPeriode = null;

    public function setIIdAfficherEvaluation($val=null) {
	if($this->iIdAfficherEvaluation === null)
	    $this->iIdAfficherEvaluation = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdAfficherEvaluation($val);
    }
    
    public function getid() {
	    return $this->getIIdAfficherEvaluation();
    }
}