<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class BlocCompetence extends AbstractEntity
{
    protected $iIdBloc = null;
    protected $cCouleur;
    protected $cNomBloc;
    protected $iIdDiplome = null;
    protected $iIdBlocParent = null;

    public function setIIdBloc($val=null) {
	if($this->iIdBloc === null)
	    $this->iIdBloc = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdBloc($val);
    }
    
    public function getid() {
	    return $this->getIIdBloc();
    }
}