<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Inscrire extends AbstractEntity
{
    protected $iIdInscrire = null;
    protected $iIdClasse = null;
    protected $iIdEtudiant = null;
    protected $dDebut;
    protected $dFin;

    public function setIIdInscrire($val=null) {
	if($this->iIdInscrire === null)
	    $this->iIdInscrire = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdInscrire($val);
    }
    
    public function getid() {
	    return $this->getIIdInscrire();
    }
}