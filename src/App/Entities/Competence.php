<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Competence extends AbstractEntity
{
    protected $iIdCompetence = null;
    protected $cCouleur;
    protected $iIdBloc = null;

    public function setIIdCompetence($val=null) {
	if($this->iIdCompetence === null)
	    $this->iIdCompetence = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdCompetence($val);
    }
    
    public function getid() {
	    return $this->getIIdCompetence();
    }
}