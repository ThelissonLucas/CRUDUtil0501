<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Encadrer extends AbstractEntity
{
    protected $iIdEncadrer = null;
    protected $iIdEtudiant = null;
    protected $iIdTuteur = null;
    protected $dDebut;
    protected $dFin;

    public function setIIdEncadrer($val=null) {
	if($this->iIdEncadrer === null)
	    $this->iIdEncadrer = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdEncadrer($val);
    }
    
    public function getid() {
	    return $this->getIIdEncadrer();
    }
}