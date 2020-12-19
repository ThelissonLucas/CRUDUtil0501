<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Tuteur extends AbstractEntity
{
    protected $iIdTuteur = null;
    
    public function setIIdTuteur($id=null) {
        if($this->iIdTuteur === null)
            $this->setIIdPersonne($id);
    }
    
    public function setid($id=null) {
	    $this->setIIdTuteur($id);
    }
    
    public function getid() {
	    return $this->getIIdPersonne();
    }
}
