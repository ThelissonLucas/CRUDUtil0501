<?php
namespace App\Entities;

class Etudiant extends Personne
{
    protected $iIdEtudiant = null;
    protected $dNaissance;

    public function setIIDEtudiant($id=null) {
        if($this->iIdTuteur === null)
            $this->setIIdPersonne($id);
    }
    
    public function setid($id=null) {
	    $this->setIIDEtudiant($id);
    }
    
    public function getid() {
	    return $this->getIIdPersonne();
    }
}
