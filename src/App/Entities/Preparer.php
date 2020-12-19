<?php
namespace App\Entities;
use Phaln\AbstractEntity;

class Preparer extends AbstractEntity
{
    protected $iIdPreparer = null;
    protected $iIdDiplome = null;
    protected $iIdClasse = null;

    public function setIIdPreparer($val=null) {
	if($this->iIdPreparer === null)
	    $this->iIdPreparer = (int)$val;
    }

    public function setid($val=null) {
	    $this->setIIdPreparer($val);
    }
    
    public function getid() {
	    return $this->getIIdPreparer();
    }
}