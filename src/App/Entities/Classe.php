<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Classe extends AbstractEntity
{
    protected $iIdClasse = null;
    protected $cNomClasse;
    protected $bInactif;

    public function setIIdClasse($val=null) {
	if($this->iIdClasse === null)
	    $this->iIdClasse = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdClasse($val);
    }
    
    public function getid() {
	    return $this->getIIdClasse();
    }
}