<?php
namespace App\Entities;

class Enseignant extends Personne
{
    protected $iIdEnseignant = null;
    
    public function setIIdEnseignant($id=null) {
        if($this->iIdEnseignant === null)
            $this->setIIdPersonne($id);
    }
    
    public function setid($id=null) {
	    $this->setIIdEnseignant($id);
    }
    
    public function getid() {
	    return $this->getIIdPersonne();
    }
}
